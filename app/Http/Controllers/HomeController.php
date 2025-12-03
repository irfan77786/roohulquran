<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Traits\CachesResponses;

class HomeController extends Controller
{
    use CachesResponses;

    public function index()
    {
        // Cache the entire homepage HTML for LIFETIME (only clears when command is run)
        $cacheKey = 'homepage_html_' . app()->getLocale();
        
        return $this->cachedView('home', [], null, $cacheKey);
    }

    public function video()
    {
        return $this->cachedView('video', [], null);
    }

    public function about()
    {
        return $this->cachedView('about', [], null);
    }

    public function contactUs()
    {
        return $this->cachedView('contact-us', [], null);
    }

    public function courses()
    {
        return $this->cachedView('courses', [], null);
    }

    public function events()
    {
        return $this->cachedView('events', [], null);
    }

    public function pricing()
    {
        return $this->cachedView('pricing', [], null);
    }

    public function teachers()
    {
        return $this->cachedView('teachers', [], null);
    }

    public function cityPage(Request $request, $city = null, $state = null)
    {
        // Get city and state from route parameters or defaults
        $city = $city ?? $request->route('city');
        $state = $state ?? $request->route('state');

        // Format city and state names for display
        $cityName = ucwords(str_replace('-', ' ', $city));
        $stateName = ucwords(str_replace('-', ' ', $state));

        // Cache city pages for LIFETIME (only clears when command is run)
        $cacheKey = 'city_page_' . md5($city . '_' . $state . '_' . app()->getLocale());
        
        return $this->cachedView('cities.home', compact('cityName', 'stateName'), null, $cacheKey);
    }

    /**
     * Clear homepage cache (useful for admin or when content is updated)
     */
    public static function clearCache()
    {
        $locales = ['en']; // Add more locales if needed
        foreach ($locales as $locale) {
            Cache::forget('homepage_html_' . $locale);
        }
        Cache::forget('countries_list');
    }
}
