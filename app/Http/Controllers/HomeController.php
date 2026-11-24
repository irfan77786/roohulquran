<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    /**
     * Temporary soft landing for old city URLs that are still indexed.
     * 200 + trial form keeps traffic/leads; noindex lets Google drop them gradually.
     * Switch back to 410 once GSC traffic on these URLs is near zero.
     */
    public function legacyCitySoftLanding(Request $request, string $city, string $slug)
    {
        $cityName = ucwords(str_replace('-', ' ', $city));
        $countrySlug = (string) preg_replace(
            '/^quran-academy-' . preg_quote($city, '/') . '-/i',
            '',
            $slug
        );
        $countryName = $countrySlug !== ''
            ? ucwords(str_replace('-', ' ', $countrySlug))
            : 'your area';

        return response()
            ->view('legacy.city-soft-landing', compact('city', 'slug', 'cityName', 'countryName'))
            ->header('X-Robots-Tag', 'noindex, follow');
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

    public function faq()
    {
        return view('faq');
    }

    public function privacyPolicy()

    {
        return view('privacy-policy');
    }

}
