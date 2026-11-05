<?php

namespace App\Http\Controllers;

class SiteMapController extends Controller
{
    public function sitemap()
    {
        return response()
            ->view('sitemap')
            ->header('Content-Type', 'application/xml');
    }
}
