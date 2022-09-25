<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\Home\PortfolioController;

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
Route::get('/about',[HomeController::class,'showAboutPage'])->name('about');


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
    Route::controller(AboutController::class)->group(function (){
        Route::get('/admin/add-about-section','addAboutSection')->name('add.about.section');
        Route::post('/admin/save-about-section','saveAboutSection')->name('save.about.section');
        Route::get('/admin/manage-about-section','manageAboutSection')->name('manage.about.section');
        Route::get('/admin/edit-about-section/{id}','editAboutSection')->name('edit.about.section');
        Route::post('/admin/update-about-section/{id}','updateAboutSection')->name('update.about.section');
        Route::get('/admin/about-multi-image','aboutMultiImage')->name('about.multi.image');
        Route::post('/admin/save-multi-image','saveMultiImage')->name('save.multi.image');
        Route::get('/admin/manage-multi-image','manageMultiImage')->name('manage.multi.image');
        Route::get('/admin/edit-multi-image/{id}','editMultiImage')->name('edit.multi.image');
        Route::post('/admin/update-multi-image/{id}','updateMultiImage')->name('update.multi.image');
        Route::get('/admin/delete-multi-image/{id}','deleteMultiImage')->name('delete.multi.image');

    });

    Route::controller(PortfolioController::class)->group(function (){
        Route::get('/admin/add-portfolio','addPortfolio')->name('add.portfolio');
        Route::post('/admin/save-portfolio','savePortfolio')->name('save.portfolio');
        Route::get('/admin/manage-portfolio','managePortfolio')->name('manage.portfolio');
        Route::get('/admin/edit-portfolio/{id}','editPortfolio')->name('edit.portfolio');
        Route::post('/admin/update-portfolio/{id}','updatePortfolio')->name('update.portfolio');
        Route::get('/admin/delete-portfolio/{id}','deletePortfolio')->name('delete.portfolio');
    });
});


require __DIR__.'/auth.php';
