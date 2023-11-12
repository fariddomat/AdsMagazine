<?php

use App\Http\Controllers\Dashboard\AdSlotController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\HomeController as DashboardHomeController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('dashboard')
    ->name('dashboard.')
    ->middleware(['auth', 'role:superadministrator|administrator'])
    ->group(function () {
        Route::get('/home', [DashboardHomeController::class, 'index'])->name('home');

        Route::resource('categories', CategoryController::class);

        Route::resource('adSlots', AdSlotController::class);

        Route::resource('users', UserController::class);
        Route::post('unban/{id}', [UserController::class, 'unban'])->name('users.unban');
        Route::post('ban/{id}', [UserController::class, 'ban'])->name('users.ban');


    });

require __DIR__.'/auth.php';
