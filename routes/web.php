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

Route::get('admin/login', [AuthController::class, 'loginPage'])->name('login');
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



Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
// Route::get('/courses' , [HomeController::class , 'courses'])->name('home.courses');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('home.pricing');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('home.contact.us');
Route::get('/teachers', [HomeController::class, 'teachers'])->name('teachers');


Route::post('/trial-class', [TrialClassController::class, 'store'])->name('trial-class.store');

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

// City-specific routes
// New York
Route::get('/new-york-city/quran-academy-new-york-city-new-york', [HomeController::class, 'cityPage'])->defaults('city', 'new-york-city')->defaults('state', 'new-york');
Route::get('/buffalo/quran-academy-buffalo-new-york', [HomeController::class, 'cityPage'])->defaults('city', 'buffalo')->defaults('state', 'new-york');
Route::get('/rochester/quran-academy-rochester-new-york', [HomeController::class, 'cityPage'])->defaults('city', 'rochester')->defaults('state', 'new-york');
Route::get('/albany/quran-academy-albany-new-york', [HomeController::class, 'cityPage'])->defaults('city', 'albany')->defaults('state', 'new-york');
Route::get('/syracuse/quran-academy-syracuse-new-york', [HomeController::class, 'cityPage'])->defaults('city', 'syracuse')->defaults('state', 'new-york');

// New Jersey
Route::get('/jersey-city/quran-academy-jersey-city-new-jersey', [HomeController::class, 'cityPage'])->defaults('city', 'jersey-city')->defaults('state', 'new-jersey');
Route::get('/paterson/quran-academy-paterson-new-jersey', [HomeController::class, 'cityPage'])->defaults('city', 'paterson')->defaults('state', 'new-jersey');
Route::get('/newark/quran-academy-newark-new-jersey', [HomeController::class, 'cityPage'])->defaults('city', 'newark')->defaults('state', 'new-jersey');
Route::get('/clifton/quran-academy-clifton-new-jersey', [HomeController::class, 'cityPage'])->defaults('city', 'clifton')->defaults('state', 'new-jersey');
Route::get('/edison/quran-academy-edison-new-jersey', [HomeController::class, 'cityPage'])->defaults('city', 'edison')->defaults('state', 'new-jersey');

// Michigan
Route::get('/dearborn/quran-academy-dearborn-michigan', [HomeController::class, 'cityPage'])->defaults('city', 'dearborn')->defaults('state', 'michigan');
Route::get('/detroit/quran-academy-detroit-michigan', [HomeController::class, 'cityPage'])->defaults('city', 'detroit')->defaults('state', 'michigan');
Route::get('/ann-arbor/quran-academy-ann-arbor-michigan', [HomeController::class, 'cityPage'])->defaults('city', 'ann-arbor')->defaults('state', 'michigan');
Route::get('/hamtramck/quran-academy-hamtramck-michigan', [HomeController::class, 'cityPage'])->defaults('city', 'hamtramck')->defaults('state', 'michigan');
Route::get('/warren/quran-academy-warren-michigan', [HomeController::class, 'cityPage'])->defaults('city', 'warren')->defaults('state', 'michigan');

// Illinois
Route::get('/chicago/quran-academy-chicago-illinois', [HomeController::class, 'cityPage'])->defaults('city', 'chicago')->defaults('state', 'illinois');
Route::get('/bridgeview/quran-academy-bridgeview-illinois', [HomeController::class, 'cityPage'])->defaults('city', 'bridgeview')->defaults('state', 'illinois');
Route::get('/skokie/quran-academy-skokie-illinois', [HomeController::class, 'cityPage'])->defaults('city', 'skokie')->defaults('state', 'illinois');
Route::get('/naperville/quran-academy-naperville-illinois', [HomeController::class, 'cityPage'])->defaults('city', 'naperville')->defaults('state', 'illinois');
Route::get('/peoria/quran-academy-peoria-illinois', [HomeController::class, 'cityPage'])->defaults('city', 'peoria')->defaults('state', 'illinois');

// Texas
Route::get('/houston/quran-academy-houston-texas', [HomeController::class, 'cityPage'])->defaults('city', 'houston')->defaults('state', 'texas');
Route::get('/dallas/quran-academy-dallas-texas', [HomeController::class, 'cityPage'])->defaults('city', 'dallas')->defaults('state', 'texas');
Route::get('/austin/quran-academy-austin-texas', [HomeController::class, 'cityPage'])->defaults('city', 'austin')->defaults('state', 'texas');
Route::get('/san-antonio/quran-academy-san-antonio-texas', [HomeController::class, 'cityPage'])->defaults('city', 'san-antonio')->defaults('state', 'texas');
Route::get('/plano/quran-academy-plano-texas', [HomeController::class, 'cityPage'])->defaults('city', 'plano')->defaults('state', 'texas');

// California
Route::get('/los-angeles/quran-academy-los-angeles-california', [HomeController::class, 'cityPage'])->defaults('city', 'los-angeles')->defaults('state', 'california');
Route::get('/san-francisco/quran-academy-san-francisco-california', [HomeController::class, 'cityPage'])->defaults('city', 'san-francisco')->defaults('state', 'california');
Route::get('/sacramento/quran-academy-sacramento-california', [HomeController::class, 'cityPage'])->defaults('city', 'sacramento')->defaults('state', 'california');
Route::get('/san-diego/quran-academy-san-diego-california', [HomeController::class, 'cityPage'])->defaults('city', 'san-diego')->defaults('state', 'california');
Route::get('/fremont/quran-academy-fremont-california', [HomeController::class, 'cityPage'])->defaults('city', 'fremont')->defaults('state', 'california');

// Minnesota
Route::get('/minneapolis/quran-academy-minneapolis-minnesota', [HomeController::class, 'cityPage'])->defaults('city', 'minneapolis')->defaults('state', 'minnesota');
Route::get('/st-paul/quran-academy-st-paul-minnesota', [HomeController::class, 'cityPage'])->defaults('city', 'st-paul')->defaults('state', 'minnesota');
Route::get('/bloomington/quran-academy-bloomington-minnesota', [HomeController::class, 'cityPage'])->defaults('city', 'bloomington')->defaults('state', 'minnesota');
Route::get('/rochester/quran-academy-rochester-minnesota', [HomeController::class, 'cityPage'])->defaults('city', 'rochester')->defaults('state', 'minnesota');
Route::get('/st-cloud/quran-academy-st-cloud-minnesota', [HomeController::class, 'cityPage'])->defaults('city', 'st-cloud')->defaults('state', 'minnesota');

// Ohio
Route::get('/cleveland/quran-academy-cleveland-ohio', [HomeController::class, 'cityPage'])->defaults('city', 'cleveland')->defaults('state', 'ohio');
Route::get('/columbus/quran-academy-columbus-ohio', [HomeController::class, 'cityPage'])->defaults('city', 'columbus')->defaults('state', 'ohio');
Route::get('/cincinnati/quran-academy-cincinnati-ohio', [HomeController::class, 'cityPage'])->defaults('city', 'cincinnati')->defaults('state', 'ohio');
Route::get('/toledo/quran-academy-toledo-ohio', [HomeController::class, 'cityPage'])->defaults('city', 'toledo')->defaults('state', 'ohio');
Route::get('/dayton/quran-academy-dayton-ohio', [HomeController::class, 'cityPage'])->defaults('city', 'dayton')->defaults('state', 'ohio');

// Virginia
Route::get('/fairfax/quran-academy-fairfax-virginia', [HomeController::class, 'cityPage'])->defaults('city', 'fairfax')->defaults('state', 'virginia');
Route::get('/alexandria/quran-academy-alexandria-virginia', [HomeController::class, 'cityPage'])->defaults('city', 'alexandria')->defaults('state', 'virginia');
Route::get('/arlington/quran-academy-arlington-virginia', [HomeController::class, 'cityPage'])->defaults('city', 'arlington')->defaults('state', 'virginia');
Route::get('/richmond/quran-academy-richmond-virginia', [HomeController::class, 'cityPage'])->defaults('city', 'richmond')->defaults('state', 'virginia');
Route::get('/norfolk/quran-academy-norfolk-virginia', [HomeController::class, 'cityPage'])->defaults('city', 'norfolk')->defaults('state', 'virginia');

// Maryland
Route::get('/baltimore/quran-academy-baltimore-maryland', [HomeController::class, 'cityPage'])->defaults('city', 'baltimore')->defaults('state', 'maryland');
Route::get('/silver-spring/quran-academy-silver-spring-maryland', [HomeController::class, 'cityPage'])->defaults('city', 'silver-spring')->defaults('state', 'maryland');
Route::get('/rockville/quran-academy-rockville-maryland', [HomeController::class, 'cityPage'])->defaults('city', 'rockville')->defaults('state', 'maryland');
Route::get('/college-park/quran-academy-college-park-maryland', [HomeController::class, 'cityPage'])->defaults('city', 'college-park')->defaults('state', 'maryland');
Route::get('/gaithersburg/quran-academy-gaithersburg-maryland', [HomeController::class, 'cityPage'])->defaults('city', 'gaithersburg')->defaults('state', 'maryland');

// Pennsylvania
Route::get('/philadelphia/quran-academy-philadelphia-pennsylvania', [HomeController::class, 'cityPage'])->defaults('city', 'philadelphia')->defaults('state', 'pennsylvania');
Route::get('/pittsburgh/quran-academy-pittsburgh-pennsylvania', [HomeController::class, 'cityPage'])->defaults('city', 'pittsburgh')->defaults('state', 'pennsylvania');

// Georgia
Route::get('/atlanta/quran-academy-atlanta-georgia', [HomeController::class, 'cityPage'])->defaults('city', 'atlanta')->defaults('state', 'georgia');

// Florida
Route::get('/miami/quran-academy-miami-florida', [HomeController::class, 'cityPage'])->defaults('city', 'miami')->defaults('state', 'florida');
Route::get('/orlando/quran-academy-orlando-florida', [HomeController::class, 'cityPage'])->defaults('city', 'orlando')->defaults('state', 'florida');
Route::get('/tampa/quran-academy-tampa-florida', [HomeController::class, 'cityPage'])->defaults('city', 'tampa')->defaults('state', 'florida');

// Massachusetts
Route::get('/boston/quran-academy-boston-massachusetts', [HomeController::class, 'cityPage'])->defaults('city', 'boston')->defaults('state', 'massachusetts');
Route::get('/cambridge/quran-academy-cambridge-massachusetts', [HomeController::class, 'cityPage'])->defaults('city', 'cambridge')->defaults('state', 'massachusetts');
