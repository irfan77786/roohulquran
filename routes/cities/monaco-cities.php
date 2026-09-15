<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/fontvieille/quran-academy-fontvieille-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'fontvieille')
    ->defaults('state', 'monaco');

Route::get('/jardin-exotique/quran-academy-jardin-exotique-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'jardin-exotique')
    ->defaults('state', 'monaco');

Route::get('/la-colle/quran-academy-la-colle-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'la-colle')
    ->defaults('state', 'monaco');

Route::get('/la-condamine/quran-academy-la-condamine-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'la-condamine')
    ->defaults('state', 'monaco');

Route::get('/la-gare/quran-academy-la-gare-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'la-gare')
    ->defaults('state', 'monaco');

Route::get('/la-source/quran-academy-la-source-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'la-source')
    ->defaults('state', 'monaco');

Route::get('/larvotto/quran-academy-larvotto-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'larvotto')
    ->defaults('state', 'monaco');

Route::get('/malbousquet/quran-academy-malbousquet-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'malbousquet')
    ->defaults('state', 'monaco');

Route::get('/monaco-ville/quran-academy-monaco-ville-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'monaco-ville')
    ->defaults('state', 'monaco');

Route::get('/moneghetti/quran-academy-moneghetti-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'moneghetti')
    ->defaults('state', 'monaco');

Route::get('/monte-carlo/quran-academy-monte-carlo-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'monte-carlo')
    ->defaults('state', 'monaco');

Route::get('/moulins/quran-academy-moulins-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'moulins')
    ->defaults('state', 'monaco');

Route::get('/port-hercule/quran-academy-port-hercule-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'port-hercule')
    ->defaults('state', 'monaco');

Route::get('/saint-roman/quran-academy-saint-roman-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'saint-roman')
    ->defaults('state', 'monaco');

Route::get('/sainte-devote/quran-academy-sainte-devote-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'sainte-devote')
    ->defaults('state', 'monaco');

Route::get('/spelugues/quran-academy-spelugues-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'spelugues')
    ->defaults('state', 'monaco');

Route::get('/vallon-de-la-rousse/quran-academy-vallon-de-la-rousse-monaco', [HomeController::class, 'cityPage'])
    ->defaults('city', 'vallon-de-la-rousse')
    ->defaults('state', 'monaco');
