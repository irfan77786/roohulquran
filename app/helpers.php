<?php

use Illuminate\Support\Facades\Cache;

if (!function_exists('cloudinary_image')) {
    /**
     * Get Cloudinary URL for a local asset path
     * 
     * @param string $path Local asset path (e.g., 'assets/img/hero-bg-4.webp')
     * @param array $transformations Optional Cloudinary transformations
     * @return string Cloudinary URL or local asset URL
     */
    function cloudinary_image($path, $transformations = [])
    {
        return \App\Helpers\CloudinaryImageHelper::url($path, $transformations);
    }
}

if (!function_exists('get_countries_list')) {
    /**
     * Get cached countries list to avoid repeated config lookups
     * Cached for LIFETIME (only clears when command is run)
     * 
     * @return array
     */
    function get_countries_list()
    {
        return Cache::rememberForever('countries_list', function () {
            return config('countries.countries', []);
        });
    }
}
