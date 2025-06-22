<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SiteMapController extends Controller
{
    public function sitemap()
{
    $blogs = Blog::select('slug', 'updated_at')->latest()->get();

    return response()
        ->view('sitemap', compact('blogs'))
        ->header('Content-Type', 'application/xml');
}

}
