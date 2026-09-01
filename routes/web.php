<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BlogController as ControllersBlogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
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

Route::get('admin/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/admin/login/auth', [AuthController::class, 'login'])->name('admin.login');

Route::middleware(['auth:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('trial/classes', [DashboardController::class, 'trialClasses'])->name('trial.classes');
    Route::get('trial/classes/export', [DashboardController::class, 'exportTrialClasses'])->name('trial.classes.export');
    Route::post('trial/classes/bulk-delete', [DashboardController::class, 'bulkDestroyTrialClasses'])->name('trial.classes.bulk-delete');
    Route::delete('trial/classes/{trialClass}', [DashboardController::class, 'destroyTrialClass'])->name('trial.classes.destroy');

    // This will register all blog routes under /admin/blogs
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class);

    // User Management Routes
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::post('users/{user}/toggle-status', [\App\Http\Controllers\Admin\UserController::class, 'toggleStatus'])->name('users.toggle-status');
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);

    // Notification routes
    Route::get('notifications', [\App\Http\Controllers\Admin\NotificationController::class, 'index'])->name('notifications.index');
    Route::get('notifications/count', [\App\Http\Controllers\Admin\NotificationController::class, 'count'])->name('notifications.count');
    Route::post('notifications/{id}/read', [\App\Http\Controllers\Admin\NotificationController::class, 'markAsRead'])->name('notifications.read');
    Route::post('notifications/read-all', [\App\Http\Controllers\Admin\NotificationController::class, 'markAllAsRead'])->name('notifications.read.all');
    Route::delete('notifications/{id}', [\App\Http\Controllers\Admin\NotificationController::class, 'destroy'])->name('notifications.destroy');

    Route::post('logout', function () {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    })->name('logout');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/video', [HomeController::class, 'video'])->name('home.video');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
// Route::get('/courses' , [HomeController::class , 'courses'])->name('home.courses');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('home.pricing');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('home.contact.us');
Route::get('/teachers', [HomeController::class, 'teachers'])->name('teachers');

Route::post('/trial-class', [TrialClassController::class, 'store'])
    ->middleware(['protect.public.form', 'throttle:trial-class'])
    ->name('trial-class.store');

// courses

Route::get('/quran-reading-with-tajweed', [CourseController::class, 'quraWithTajweed'])->name('quran.tajweed');
Route::get('/qaida-by-roohulquran', [CourseController::class, 'quraRecitation'])->name('quran.recitation');
Route::get('/tafseer-course-online', [CourseController::class, 'quraWithTafseer'])->name('quran.tafseer');
Route::get('/memorize-quran-online', [CourseController::class, 'quraMemorization'])->name('quran.memorization');
Route::get('/beginner-quran-classes', [CourseController::class, 'begineerClasses'])->name('beginner.classes');
Route::get('/kids-quran-classes', [CourseController::class, 'kidsClasses'])->name('kids.classes');

// blogs

Route::prefix('blogs')->name('blogs.')->group(function () {
    Route::get('/', [ControllersBlogController::class, 'index'])->name('index');
    Route::get('/{slug}', [ControllersBlogController::class, 'show'])->name('show');
});

Route::get('/sitemap.xml', [SiteMapController::class, 'sitemap']);
Route::get('/storage/{path}', [MediaController::class, 'storage'])->where('path', '.*')->name('media.storage');

// Main UK city pages only (see config/uk-cities.php)
if (file_exists(__DIR__ . '/uk-cities.php')) {
    require __DIR__ . '/uk-cities.php';
}

// Old US / EU / extra UK city URLs used to be unique pages with duplicate content.
// Send them to the homepage so Google drops them from the index.
Route::get('/{city}/{slug}', function () {
    $home = rtrim((string) config('app.sitemap_base_url', 'https://roohulquranacademy.com'), '/') . '/';

    return redirect()->away($home, 301);
})->where([
    'city' => '[A-Za-z0-9\-]+',
    'slug' => 'quran-academy-.+',
]);
