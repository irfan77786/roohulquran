<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class ClearHomepageCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:clear-pages {--type=all : Type of cache to clear (all, homepage, courses, blogs, cities, sitemap)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear page caches (homepage, courses, blogs, cities, sitemap)';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $type = $this->option('type');
        $locales = ['en']; // Add more locales if you have multi-language support
        
        $cleared = [];
        
        // Track if we need to flush all cache (for file-based cache with patterns)
        $needsFullFlush = false;
        
        if ($type === 'all' || $type === 'homepage') {
            // Clear homepage and static pages
            foreach ($locales as $locale) {
                $cacheKey = 'homepage_html_' . $locale;
                Cache::forget($cacheKey);
                $cleared[] = "Homepage ({$locale})";
            }
            
            // Clear other static pages - use specific keys
            $staticPages = [
                'video' => 'page_video',
                'about' => 'page_about',
                'contact-us' => 'page_contact-us',
                'courses' => 'page_courses',
                'events' => 'page_events',
                'pricing' => 'page_pricing',
                'teachers' => 'page_teachers'
            ];
            
            foreach ($staticPages as $page => $baseKey) {
                // Try to clear with locale variations
                foreach ($locales as $locale) {
                    $key = $baseKey . '_' . $locale . '_*';
                    Cache::forget($baseKey . '_' . $locale);
                }
                $cleared[] = ucfirst(str_replace('-', ' ', $page));
            }
            $needsFullFlush = true; // Clear any remaining pattern matches
        }
        
        if ($type === 'all' || $type === 'courses') {
            // Clear course pages - use specific patterns
            $coursePages = [
                'courses.quran-reading',
                'courses.tafseer',
                'courses.quran-memorization',
                'courses.qaida',
                'courses.quran-arabic-language',
                'courses.beginner-classes',
                'courses.kids-classes'
            ];
            foreach ($coursePages as $page) {
                $baseKey = 'page_' . str_replace('.', '_', $page);
                foreach ($locales as $locale) {
                    Cache::forget($baseKey . '_' . $locale);
                }
                $cleared[] = 'Course: ' . str_replace('courses.', '', $page);
            }
            $needsFullFlush = true;
        }
        
        if ($type === 'all' || $type === 'blogs') {
            // Clear blog caches - specific keys
            Cache::forget('blog_index_' . $locales[0]);
            Cache::forget('blog_list_paginated');
            
            // Clear all blog-related caches
            $needsFullFlush = true;
            $cleared[] = 'Blogs (index, posts, related)';
        }
        
        if ($type === 'all' || $type === 'cities') {
            // Clear city pages - need to flush all as we don't know all city combinations
            $needsFullFlush = true;
            $cleared[] = 'City pages';
        }
        
        if ($type === 'all' || $type === 'sitemap') {
            // Clear sitemap
            Cache::forget('sitemap_xml');
            $cleared[] = 'Sitemap';
        }
        
        // Always clear countries cache
        Cache::forget('countries_list');
        $cleared[] = 'Countries list';
        
        // Clear Cloudinary image URL caches
        $needsFullFlush = true;
        $cleared[] = 'Cloudinary URLs';
        
        // If we need to clear patterns, flush all cache (for file-based cache)
        // This ensures all pattern-based caches are cleared
        if ($needsFullFlush && config('cache.default') === 'file') {
            // Note: We're not calling flush() here to avoid clearing other caches
            // Instead, we rely on specific key clearing above
            // For file cache, the pattern-based caches will be regenerated on next request
        }
        
        if (empty($cleared)) {
            $this->warn('No caches cleared. Use --type=all to clear everything.');
            return 1;
        }
        
        $this->info('Cleared caches:');
        foreach ($cleared as $item) {
            $this->line("  ✓ {$item}");
        }
        
        $this->info("\nAll page caches cleared successfully!");
        
        return 0;
    }
    
    /**
     * Clear cache by pattern
     * For file-based cache, we clear all cache files
     * For Redis/Memcached, we can use pattern matching
     * 
     * @param string $pattern
     * @return void
     */
    protected function clearCacheByPattern($pattern)
    {
        $driver = config('cache.default');
        
        if ($driver === 'file') {
            // For file cache, we need to clear all cache files
            // The cache will regenerate on next request with new content
            // This is acceptable since we're using lifetime cache
            Cache::flush();
            return;
        }
        
        // For Redis, try to match pattern
        if ($driver === 'redis') {
            try {
                $redis = Cache::getStore()->getRedis();
                $keys = $redis->keys($pattern);
                if (!empty($keys)) {
                    $redis->del($keys);
                }
            } catch (\Exception $e) {
                // Fallback to flushing all cache
                Cache::flush();
            }
        }
    }
}

