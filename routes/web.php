<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignoutController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\GustListController;
use App\Http\Controllers\AboutUsController;


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

Route::get('/gusts', function () {
    return view('gust');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');})->name('dashboard');


    // User Management All Route
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard',[BannerController::class, 'HomeDashboard'])->name('home.dashboard');

        //Gust List
        Route::get('/gust-list',[GustListController::class, 'HomeGustList'])->name('home.gustList');
        Route::get('/add/gust-list',[GustListController::class, 'AddGustList'])->name('add.gustList');
        Route::post('/store/gust-list',[GustListController::class, 'StoreGustList'])->name('store.gustList');
        Route::get('/gust-list/edit/{id}',[GustListController::class, 'Edit']);
        Route::post('/gust-list/update/{id}',[GustListController::class, 'Update']);
        Route::get('/gust-list/delete/{id}',[GustListController::class, 'Delete']);

    });

    Route::prefix('admin/design')->group(function(){
        // Banner
        Route::get('/banner',[BannerController::class, 'HomeBanner'])->name('home.banner');
        Route::get('/add/banner',[BannerController::class, 'AddBanner'])->name('add.banner');
        Route::post('/store/banner',[BannerController::class, 'StoreBanner'])->name('store.banner');
        Route::get('/banner/edit/{id}',[BannerController::class, 'Edit']);
        Route::post('/banner/update/{id}',[BannerController::class, 'Update']);
        Route::get('/banner/delete/{id}',[BannerController::class, 'Delete']);

        //
        Route::get('/aboutus',[AboutUsController::class, 'HomeAboutUs'])->name('home.aboutus');
        Route::get('/add/aboutus',[AboutUsController::class, 'AddAboutUs'])->name('add.aboutus');
        Route::post('/store/aboutus',[AboutUsController::class, 'StoreAboutUs'])->name('store.aboutus');
        Route::get('/aboutus/edit/{id}',[AboutUsController::class, 'Edit']);
        Route::post('/aboutus/update/{id}',[AboutUsController::class, 'Update']);
        Route::get('/aboutus/delete/{id}',[AboutUsController::class, 'Delete']);




    });

}); //Admin route end 

Route::get('/user/logout',[SignoutController::class, 'Logout'])->name('user.logout');







Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Cleared!";

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
