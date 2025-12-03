<?php

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
