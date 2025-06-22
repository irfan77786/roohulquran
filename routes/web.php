<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BlogController as ControllersBlogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteMapController;
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



Route::middleware(['auth:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('trial/classes', [DashboardController::class, 'trialClasses'])->name('trial.classes');

    // This will register all blog routes under /admin/blogs
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class);

    Route::post('logout', function () {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    })->name('logout');
});



Route::get('/' , [HomeController::class , 'index'])->name('home.index');
Route::get('/about' , [HomeController::class , 'about'])->name('home.about');
Route::get('/courses' , [HomeController::class , 'courses'])->name('home.courses');
Route::get('/pricing' , [HomeController::class , 'pricing'])->name('home.pricing');
Route::get('/contact-us' , [HomeController::class , 'contactUs'])->name('home.contact.us');

Route::post('/trial-class', [TrialClassController::class, 'store'])->name('trial-class.store');
// courses

Route::get('/quran-reading-with-tajweed' , [CourseController::class , 'quraWithTajweed'])->name('quran.tajweed');
Route::get('/qaida-by-roohulquran' , [CourseController::class , 'quraRecitation'])->name('quran.recitation');
Route::get('/tafseer-course-online' , [CourseController::class , 'quraWithTafseer'])->name('quran.tafseer');
Route::get('/memorize-quran-online' , [CourseController::class , 'quraMemorization'])->name('quran.memorization');

// blogs

Route::prefix('blogs')->name('blogs.')->group(function () {
    Route::get('/', [ControllersBlogController::class, 'index'])->name('index'); 
    Route::get('/{slug}', [ControllersBlogController::class, 'show'])->name('show'); 
});

Route::get('/sitemap.xml', [SiteMapController::class, 'sitemap']);







