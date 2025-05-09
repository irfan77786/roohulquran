<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/' , [HomeController::class , 'index'])->name('home.index');
Route::get('/about' , [HomeController::class , 'about'])->name('home.about');
Route::get('/courses' , [HomeController::class , 'courses'])->name('home.courses');
Route::get('/trainers' , [HomeController::class , 'trainers'])->name('home.trainers');
Route::get('/events' , [HomeController::class , 'events'])->name('home.events');
Route::get('/pricing' , [HomeController::class , 'pricing'])->name('home.pricing');
Route::get('/contact-us' , [HomeController::class , 'contactUs'])->name('home.contact.us');
