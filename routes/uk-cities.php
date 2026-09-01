<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

foreach (config('uk-cities.cities', []) as $city) {
    Route::get("/{$city}/quran-academy-{$city}-united-kingdom", [HomeController::class, 'cityPage'])
        ->defaults('city', $city)
        ->defaults('state', 'united-kingdom');
}

foreach (config('uk-cities.london_areas', []) as $area) {
    Route::get("/{$area}/quran-academy-{$area}-london", [HomeController::class, 'cityPage'])
        ->defaults('city', $area)
        ->defaults('state', 'london');
}
