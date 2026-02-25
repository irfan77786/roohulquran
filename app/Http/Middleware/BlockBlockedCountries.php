<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class BlockBlockedCountries
{
    public function handle(Request $request, Closure $next)
    {
        if (! config('geo-block.enabled', true)) {
            return $next($request);
        }

        $ip = $request->ip();
        if (! $ip || $this->isLocalOrPrivate($ip)) {
            return $next($request);
        }

        $countryCode = $this->getCountryCode($ip);
        if (! $countryCode) {
            return $next($request); // allow if lookup fails (e.g. API down)
        }

        $blocked = config('geo-block.blocked_countries', []);
        if (in_array(strtoupper($countryCode), array_map('strtoupper', $blocked), true)) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Access not available in your region.'], 403);
            }
            abort(403, 'Access not available in your region.');
        }

        return $next($request);
    }

    protected function isLocalOrPrivate(string $ip): bool
    {
        return $ip === '127.0.0.1'
            || $ip === '::1'
            || str_starts_with($ip, '10.')
            || str_starts_with($ip, '172.')
            || str_starts_with($ip, '192.168.');
    }

    protected function getCountryCode(string $ip): ?string
    {
        $cacheKey = 'geo_country:' . $ip;
        $ttl = config('geo-block.cache_ttl', 2592000);

        return Cache::remember($cacheKey, $ttl, function () use ($ip) {
            try {
                $response = Http::timeout(3)->get('https://ip-api.com/json/' . $ip, [
                    'fields' => 'countryCode',
                ]);
                if ($response->successful()) {
                    $data = $response->json();
                    return $data['countryCode'] ?? null;
                }
            } catch (\Throwable $e) {
                Log::debug('GeoIP lookup failed for ' . $ip . ': ' . $e->getMessage());
            }
            return null;
        });
    }
}
