<?php

namespace App\Http\Controllers;

use App\Support\LocationCatalog;
use App\Support\LocationPageCopy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ukFeatured = LocationCatalog::featured('uk', 12);

        return view('home', compact('ukFeatured'));
    }

    public function video()
    {
        return view('video');
    }

    public function about()
    {
        return view('about');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function courses()
    {
        return view('courses');
    }

    public function events()
    {
        return view('events');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function teachers()
    {
        return view('teachers');
    }

    public function cityPage(Request $request, $city = null, $state = null)
    {
        $route = $request->route();
        $defaults = $route ? $route->defaults : [];
        $city = $city ?? $request->route('city') ?? ($defaults['city'] ?? null);
        $state = $state ?? $request->route('state') ?? ($defaults['state'] ?? null);

        $location = LocationCatalog::find((string) $city, (string) $state);
        if (! $location) {
            abort(404);
        }

        $cityName = $location['name'];
        $stateName = $location['region_name'];
        $copy = LocationPageCopy::make($location);

        return view('locations.landing', compact('location', 'cityName', 'stateName', 'copy'));
    }
}
