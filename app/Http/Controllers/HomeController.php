<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {


        return view('home');
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
        // Get city and state from route parameters or defaults
        $city = $city ?? $request->route('city');
        $state = $state ?? $request->route('state');

        // Format city and state names for display
        $cityName = ucwords(str_replace('-', ' ', $city));
        $stateName = ucwords(str_replace('-', ' ', $state));

        return view('cities.home', compact('cityName', 'stateName'));
    }
}
