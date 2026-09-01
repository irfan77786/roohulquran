<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {


        return view('home');
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

        $cityName = ucwords(str_replace('-', ' ', (string) $city));
        $stateName = ucwords(str_replace('-', ' ', (string) $state));

        return view('cities.home', compact('cityName', 'stateName'));
    }
}
