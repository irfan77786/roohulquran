<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Traits\CachesResponses;

class BlogController extends Controller
{
    use CachesResponses;

    public function index()
    {
        // Cache blog index page for LIFETIME (only clears when command is run)
        $cacheKey = 'blog_index_' . app()->getLocale();
        
        $blogs = Cache::rememberForever('blog_list_paginated', function () {
            return Blog::where('status', '1')
                ->select('id', 'title', 'slug', 'excerpt', 'image', 'created_at', 'updated_at')
                ->latest()
                ->paginate(10);
        });
        
        return $this->cachedView('blogs.index', compact('blogs'), null, $cacheKey);
    }

    public function show($slug)
    {
        // Cache individual blog posts for LIFETIME (only clears when command is run)
        $cacheKey = 'blog_show_' . $slug . '_' . app()->getLocale();
        
        // Cache blog data with relationships - LIFETIME
        $blog = Cache::rememberForever('blog_' . $slug, function () use ($slug) {
            return Blog::where('slug', $slug)
                ->where('status', '1')
                ->firstOrFail();
        });

        // Cache related blogs - LIFETIME
        $relatedBlogs = Cache::rememberForever('blog_related_' . $blog->id, function () use ($blog) {
            return Blog::where('id', '!=', $blog->id)
                ->where('status', '1')
                ->select('id', 'title', 'slug', 'excerpt', 'image', 'created_at')
                ->latest()
                ->take(3)
                ->get();
        });

        return $this->cachedView('blogs.show', compact('blog', 'relatedBlogs'), null, $cacheKey);
    }
}
