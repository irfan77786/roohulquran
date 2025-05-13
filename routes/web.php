<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrialClassController;
use Illuminate\Support\Facades\Auth;
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

// admin routes

Route::get('admin/login' , [AuthController::class,'loginPage'])->name('login');
Route::post('/admin/login/auth', [AuthController::class, 'login'])->name('admin.login');


Route::middleware(['auth:admin'])->group(function () {
Route::get('dashboard' , [DashboardController::class,'index'])->name('admin.dashboard');
Route::get('admin/trial/classes' , [DashboardController::class,'trialClasses'])->name('admin.trial.classes');
Route::post('/admin/logout', function () {
    Auth::guard('admin')->logout();
    return redirect('/admin/login');
})->name('admin.logout');

});



Route::get('/' , [HomeController::class , 'index'])->name('home.index');
Route::get('/about' , [HomeController::class , 'about'])->name('home.about');
Route::get('/courses' , [HomeController::class , 'courses'])->name('home.courses');
Route::get('/trainers' , [HomeController::class , 'trainers'])->name('home.trainers');
Route::get('/events' , [HomeController::class , 'events'])->name('home.events');
Route::get('/pricing' , [HomeController::class , 'pricing'])->name('home.pricing');
Route::get('/contact-us' , [HomeController::class , 'contactUs'])->name('home.contact.us');

Route::post('/trial-class', [TrialClassController::class, 'store'])->name('trial-class.store');
// courses

Route::get('/quran-reading-with-tajweed' , [CourseController::class , 'quraWithTajweed'])->name('quran.tajweed');


