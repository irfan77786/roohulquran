<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Support\LocationCatalog;

foreach (LocationCatalog::pages('uk') as $page) {
    Route::get($page['path'], [HomeController::class, 'cityPage'])
        ->defaults('city', $page['slug'])
        ->defaults('state', $page['region_slug'])
        ->name('locations.uk.' . str_replace('-', '_', $page['slug']));
}
