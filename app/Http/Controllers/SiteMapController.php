<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SiteMapController extends Controller
{
    public function sitemap()
    {
        // Cache sitemap for LIFETIME (only clears when command is run)
        $cacheKey = 'sitemap_xml';
        
        $xml = Cache::rememberForever($cacheKey, function () {
            $blogs = Blog::select('slug', 'updated_at')
                ->where('status', '1')
                ->latest()
                ->get();
            
            return view('sitemap', compact('blogs'))->render();
        });

        return response($xml)
            ->header('Content-Type', 'application/xml')
            ->header('Cache-Control', 'public, max-age=31536000, s-maxage=31536000'); // 1 year for browser
    }
}
