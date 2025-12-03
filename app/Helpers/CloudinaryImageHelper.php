<?php

namespace App\Helpers;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;

class CloudinaryImageHelper
{
    /**
     * Get Cloudinary URL for a local asset path
     * 
     * @param string $localPath Local asset path (e.g., 'assets/img/hero-bg-4.webp')
     * @param array $transformations Optional Cloudinary transformations
     * @return string Cloudinary URL
     */
    public static function url($localPath, $transformations = [])
    {
        // Remove leading slash if present
        $localPath = ltrim($localPath, '/');
        
        // Cache key for this image URL
        $cacheKey = 'cloudinary_url_' . md5($localPath . serialize($transformations));
        
        // Cache the URL lookup for LIFETIME to avoid repeated config lookups
        return Cache::rememberForever($cacheKey, function () use ($localPath, $transformations) {
            // For SVG files, check if we should use Cloudinary or fallback to local
            // SVG files are small and sometimes work better served locally
            $extension = strtolower(pathinfo($localPath, PATHINFO_EXTENSION));
            if ($extension === 'svg') {
                // Check if we have a Cloudinary URL for this SVG
                $mappings = Config::get('cloudinary-images', []);
                if (isset($mappings[$localPath])) {
                    $cloudinaryUrl = $mappings[$localPath];
                    return $cloudinaryUrl;
                }
                // Fallback to local asset for SVG if not in mappings
                return asset($localPath);
            }
            
            // Get mappings from config (cached internally by Laravel)
            $mappings = Config::get('cloudinary-images', []);
            
            // Check if we have a Cloudinary URL for this path
            if (isset($mappings[$localPath])) {
                $cloudinaryUrl = $mappings[$localPath];
                
                // Apply transformations if provided
                if (!empty($transformations)) {
                    return self::applyTransformations($cloudinaryUrl, $transformations);
                }
                
                return $cloudinaryUrl;
            }
            
            // Fallback to local asset if not found in mappings
            return asset($localPath);
        });
    }
    
    /**
     * Upload a local image file to Cloudinary
     * 
     * @param string $localPath Path to local image file
     * @param string $folder Cloudinary folder name
     * @param string|null $publicId Custom public_id (optional)
     * @return string|false Cloudinary URL on success, false on failure
     */
    public static function upload($localPath, $folder = 'home', $publicId = null)
    {
        $fullPath = public_path($localPath);
        
        if (!file_exists($fullPath)) {
            \Log::warning("Image file not found: {$fullPath}");
            return false;
        }
        
        try {
            // Generate public_id from local path if not provided
            if (!$publicId) {
                $pathInfo = pathinfo($localPath);
                $publicId = $folder . '/' . str_replace(['/', '\\'], '_', $pathInfo['dirname']) . '_' . $pathInfo['filename'];
            } else {
                $publicId = $folder . '/' . $publicId;
            }
            
            $uploadResult = Cloudinary::upload($fullPath, [
                'folder' => $folder,
                'public_id' => $publicId,
            ]);
            
            return $uploadResult->getSecurePath();
        } catch (\Exception $e) {
            \Log::error("Failed to upload image to Cloudinary: {$localPath} - " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Apply Cloudinary transformations to a URL
     * 
     * @param string $url Cloudinary URL
     * @param array $transformations Transformation parameters
     * @return string Transformed URL
     */
    private static function applyTransformations($url, $transformations)
    {
        // Cloudinary URL format: https://res.cloudinary.com/{cloud_name}/image/upload/{transformations}/v{version}/{public_id}.{ext}
        // We can insert transformations before the version
        
        // For now, return the URL as-is
        // In the future, you can implement transformation logic here
        return $url;
    }
    
    /**
     * Get all image mappings
     * 
     * @return array
     */
    public static function getMappings()
    {
        return Config::get('cloudinary-images', []);
    }
    
    /**
     * Set image mappings
     * 
     * @param array $mappings
     * @return void
     */
    public static function setMappings($mappings)
    {
        $configPath = config_path('cloudinary-images.php');
        $content = "<?php\n\n/**\n * Cloudinary Image Mappings\n * \n * This file stores mappings between local asset paths and Cloudinary URLs.\n * Generated by: php artisan cloudinary:upload-home-images\n */\n\nreturn " . var_export($mappings, true) . ";\n";
        file_put_contents($configPath, $content);
        
        // Clear config cache
        if (function_exists('opcache_reset')) {
            opcache_reset();
        }
    }
}
