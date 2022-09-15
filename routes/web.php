<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignoutController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BannerController;

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

Route::get('/', function () {
    return view('home');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/user/logout',[SignoutController::class, 'Logout'])->name('user.logout');

Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Cleared!";

});

// User Management All Route
Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[BannerController::class, 'HomeDashboard'])->name('home.dashboard');
    Route::get('/banner',[BannerController::class, 'HomeBanner'])->name('home.banner');

});
