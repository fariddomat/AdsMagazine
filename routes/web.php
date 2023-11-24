<?php

use App\Http\Controllers\Dashboard\AdController;
use App\Http\Controllers\Dashboard\AdSlotController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\HomeController as DashboardHomeController;
use App\Http\Controllers\Dashboard\ProfileController as DashboardProfileController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    // shell_exec('composer update');
    return "Cleared!";
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/show/{id}', [HomeController::class, 'show'])->name('show');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/postContact', [HomeController::class, 'postContact'])->name('postContact');


Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');



Route::prefix('dashboard')
    ->name('dashboard.')
    ->middleware(['auth', 'role:superadministrator|administrator|advertiser|user'])
    ->group(function () {
        Route::get('/home', [DashboardHomeController::class, 'index'])->name('home');

        Route::resource('categories', CategoryController::class);

        Route::resource('adSlots', AdSlotController::class);
        Route::resource('ads', AdController::class);
        Route::get('ads/accept/{id}', [AdController::class, 'accept'])->name('ads.accept');
        Route::get('ads/reject/{id}', [AdController::class, 'reject'])->name('ads.reject');

        Route::resource('users', UserController::class);
        Route::post('unban/{id}', [UserController::class, 'unban'])->name('users.unban');
        Route::post('ban/{id}', [UserController::class, 'ban'])->name('users.ban');

        Route::get('about', [SettingController::class, 'about'])->name('about');
        Route::get('social', [SettingController::class, 'social'])->name('social');
        Route::post('settings', [SettingController::class, 'settings'])->name('settings');


        Route::get('profile/edit', [DashboardProfileController::class, 'edit'])->name('profile.edit');
        Route::post('profile/update', [DashboardProfileController::class, 'update'])->name('profile.update');

        Route::get('contacts/index', [ContactController::class, 'index'])->name('contacts.index');
        Route::get('contacts/view/{id}', [ContactController::class, 'view'])->name('contacts.view');

    });



require __DIR__ . '/auth.php';
