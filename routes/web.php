<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\website\HomeController;

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
    return view('website.index');
});

Route::get('/',[HomeController::class,'ShowHeroSection']);


//admin all route
Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth','verified'])->name('dashboard');

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/admin/logout',[AdminController::class,'destroy'])->name('admin.logout');
    Route::get('/admin/profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('/admin/edit-profile',[AdminController::class,'editProfile'])->name('edit.profile');
    Route::post('/admin/store-profile',[AdminController::class,'storeProfile'])->name('store.profile');
    Route::get('/admin/change-password',[AdminController::class,'changePassword'])->name('change.password');
    Route::post('/admin/update-password',[AdminController::class,'updatePassword'])->name('update.password');

    // all route hero section
    Route::get('/admin/add-hero-section',[HomeSliderController::class,'addHeroSection'])->name('add.hero.section');
    Route::post('/admin/save-hero-section',[HomeSliderController::class,'saveHeroSection'])->name('save.hero.section');
    Route::get('/admin/manage-hero-section',[HomeSliderController::class,'manageHeroSection'])->name('manage.hero.section');
    Route::get('/admin/edit-hero-section/{id}',[HomeSliderController::class,'editHeroSection'])->name('edit.hero.section');
    Route::post('/admin/update-hero-section/{id}',[HomeSliderController::class,'updateHeroSection'])->name('update.hero.section');
    // all route about section
    Route::get('/admin/add-about-section',[AboutController::class,'addAboutSection'])->name('add.about.section');
    Route::post('/admin/save-about-section',[AboutController::class,'saveAboutSection'])->name('save.about.section');
    Route::get('/admin/manage-about-section',[AboutController::class,'manageAboutSection'])->name('manage.about.section');
    Route::get('/admin/edit-about-section/{id}',[AboutController::class,'editAboutSection'])->name('edit.about.section');
    Route::post('/admin/update-about-section/{id}',[AboutController::class,'updateAboutSection'])->name('update.about.section');
});


require __DIR__.'/auth.php';
