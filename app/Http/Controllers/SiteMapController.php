<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Support\UkLocations;

class SiteMapController extends Controller
{
    public function sitemap()
    {
        $blogs = Blog::select('slug', 'updated_at')->latest()->get();
        $ukPages = UkLocations::pages();

        return response()
            ->view('sitemap', compact('blogs', 'ukPages'))
            ->header('Content-Type', 'application/xml');
    }

}
