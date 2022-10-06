<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignoutController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\GustListController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\GalleryController;




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

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/gusts', function () {
    return view('gust');
});

Route::prefix('admin')->group(function(){
    Route::post('/store/gust-list',[GustListController::class, 'StoreGustList'])->name('store.gustList');

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
        
        Route::get('/gust-list/edit/{id}',[GustListController::class, 'Edit']);
        Route::post('/gust-list/update/{id}',[GustListController::class, 'Update']);
        Route::get('/gust-list/delete/{id}',[GustListController::class, 'Delete']);

        //Gallery
        Route::get('/gallery',[GalleryController::class, 'HomeGallery'])->name('home.gallery');
        Route::get('/add/gallery',[GalleryController::class, 'AddGallery'])->name('add.gallery');
        Route::post('/store/gallery',[GalleryController::class, 'StoreGallery'])->name('store.gallery');
        Route::get('/gallery/edit/{id}',[GalleryController::class, 'Edit']);
        Route::post('/gallery/update/{id}',[GalleryController::class, 'Update']);
        Route::get('/gallery/delete/{id}',[GalleryController::class, 'Delete']);

        

    });

    Route::prefix('admin/design')->group(function(){
        // Banner
        Route::get('/banner',[BannerController::class, 'HomeBanner'])->name('home.banner');
        Route::get('/add/banner',[BannerController::class, 'AddBanner'])->name('add.banner');
        Route::post('/store/banner',[BannerController::class, 'StoreBanner'])->name('store.banner');
        Route::get('/banner/edit/{id}',[BannerController::class, 'Edit']);
        Route::post('/banner/update/{id}',[BannerController::class, 'Update']);
        Route::get('/banner/delete/{id}',[BannerController::class, 'Delete']);

        //About
        Route::get('/aboutus',[AboutUsController::class, 'HomeAboutUs'])->name('home.aboutus');
        Route::get('/add/aboutus',[AboutUsController::class, 'AddAboutUs'])->name('add.aboutus');
        Route::post('/store/aboutus',[AboutUsController::class, 'StoreAboutUs'])->name('store.aboutus');
        Route::get('/aboutus/edit/{id}',[AboutUsController::class, 'Edit']);
        Route::post('/aboutus/update/{id}',[AboutUsController::class, 'Update']);
        Route::get('/aboutus/delete/{id}',[AboutUsController::class, 'Delete']);

        //Our Story
        Route::get('/story',[StoryController::class, 'HomeStory'])->name('home.story');
        Route::get('/add/story',[StoryController::class, 'AddStory'])->name('add.story');
        Route::post('/store/story',[StoryController::class, 'StoreStory'])->name('store.story');
        Route::get('/story/edit/{id}',[StoryController::class, 'Edit']);
        Route::post('/story/update/{id}',[StoryController::class, 'Update']);

        




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
