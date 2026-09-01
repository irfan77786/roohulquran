<?php

use App\Http\Controllers\HomeController;
use App\Support\UkLocations;
use Illuminate\Support\Facades\Route;

foreach (UkLocations::pages() as $page) {
    Route::get($page['path'], [HomeController::class, 'cityPage'])
        ->defaults('city', $page['city'])
        ->defaults('state', $page['state']);
}
