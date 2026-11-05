<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GeoLocationService
{
    public function getCountryFromIp(?string $ip = null): string
    {
        $ip = $ip ?? request()->ip();

        if (!$ip || $this->isPrivateIp($ip)) {
            return 'Unknown';
        }

        return Cache::remember("geo:country:{$ip}", 86400, function () use ($ip) {
            try {
                $response = Http::timeout(5)->get("http://ip-api.com/json/{$ip}", [
                    'fields' => 'status,country',
                ]);

                if ($response->ok() && $response->json('status') === 'success') {
                    return $response->json('country') ?: 'Unknown';
                }
            } catch (\Throwable $e) {
                //
            }

            return 'Unknown';
        });
    }

    private function isPrivateIp(string $ip): bool
    {
        return !filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE);
    }
}
