<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Support\LocationCatalog;

class SiteMapController extends Controller
{
    public function sitemap()
    {
        $blogs = Blog::select('slug', 'updated_at')->latest()->get();
        $ukPages = LocationCatalog::pages('uk');
        $usPages = LocationCatalog::pages('us');

        return response()
            ->view('sitemap', compact('blogs', 'ukPages', 'usPages'))
            ->header('Content-Type', 'application/xml');
    }

}
