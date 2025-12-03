<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;

trait CachesResponses
{
    /**
     * Cache and return a view response (LIFETIME CACHE - only clears when command is run)
     * 
     * @param string $view View name
     * @param array $data View data
     * @param int|null $cacheTime Cache time in seconds (null = lifetime/forever)
     * @param string|null $cacheKey Custom cache key (optional)
     * @return \Illuminate\Http\Response
     */
    protected function cachedView($view, $data = [], $cacheTime = null, $cacheKey = null)
    {
        // Generate cache key if not provided
        if (!$cacheKey) {
            $cacheKey = $this->generateCacheKey($view, $data);
        }
        
        // Get cached HTML or render view - use forever() for lifetime cache
        $html = Cache::rememberForever($cacheKey, function () use ($view, $data) {
            return view($view, $data)->render();
        });
        
        // Set cache control to 1 year for browser caching (31536000 seconds)
        // The server cache is lifetime, but we still want browser to cache
        $browserCacheTime = $cacheTime ?? 31536000; // 1 year for browser
        
        // Return response with optimized cache headers
        return Response::make($html)
            ->header('Content-Type', 'text/html; charset=utf-8')
            ->header('Cache-Control', 'public, max-age=' . $browserCacheTime . ', s-maxage=' . $browserCacheTime)
            ->header('X-Content-Type-Options', 'nosniff')
            ->header('X-Frame-Options', 'SAMEORIGIN')
            ->header('Vary', 'Accept-Encoding');
    }
    
    /**
     * Generate a cache key for a view
     * 
     * @param string $view View name
     * @param array $data View data
     * @return string
     */
    protected function generateCacheKey($view, $data = [])
    {
        $locale = app()->getLocale();
        $dataHash = md5(serialize($data));
        $viewName = str_replace(['.', '/'], '_', $view);
        
        return "page_{$viewName}_{$locale}_{$dataHash}";
    }
    
    /**
     * Clear cache for a specific view
     * 
     * @param string $view View name
     * @param array $data View data (optional)
     * @return void
     */
    protected function clearViewCache($view, $data = [])
    {
        $cacheKey = $this->generateCacheKey($view, $data);
        Cache::forget($cacheKey);
    }
}

