<?php

namespace App\Providers;

use App\Services\GoogleReviewsService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        
        // Share student data with all student views
        View::composer('student.*', function ($view) {
            if (Auth::guard('student')->check()) {
                $student = Auth::guard('student')->user();
                $view->with('student', $student);
            }
        });

        View::composer('layouts.testimonial', function ($view) {
            if (config('google-reviews.driver') === 'embed') {
                $view->with('googleReviews', [
                    'source' => 'embed',
                    'rating' => null,
                    'total' => 0,
                    'maps_url' => config('google-reviews.maps_url'),
                    'reviews' => [],
                ]);

                return;
            }

            $view->with('googleReviews', app(GoogleReviewsService::class)->getReviews());
        });
    }
}
