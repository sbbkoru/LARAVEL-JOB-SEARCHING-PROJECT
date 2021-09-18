<?php

use App\Http\Controllers\panel\CategoryController;
use App\Http\Controllers\panel\CompanyController;
use App\Http\Controllers\panel\DashboardController;
use App\Http\Controllers\panel\JobController;
use App\Http\Controllers\panel\LocationController;
use App\Http\Controllers\panel\LoginController;
use App\Http\Controllers\panel\ProvinceController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SiteLoginController;
use App\Http\Controllers\SiteUserController;
use Illuminate\Support\Facades\Route;


Route::prefix('panel1')->name('panel')->group(function (){
    Route::get('/login', [LoginController::class , 'index'])->name('.login-page');
    Route::post('/login', [LoginController::class, 'login'])->name('.login');


    // Need Auth
    Route::middleware((['auth']))->group(function(){
        Route::get('/logout', [LoginController::class, 'logout'])->name('.logout');
        Route::get('/', [DashboardController::class, 'index'])->name('.index');

        // Company
        Route::get('/company', [CompanyController::class, 'index'])->name('.company.index');
        Route::get('/company/edit', [CompanyController::class, 'edit'])->name('.company.edit');
        Route::get('/company/delete', [CompanyController::class, 'delete'])->name('.company.delete');
        Route::post('/company/save', [CompanyController::class, 'save'])->name('.company.save');

        // Provinces
        Route::get('/province', [ProvinceController::class, 'index'])->name('.province.index');
        Route::get('/province/edit', [ProvinceController::class, 'edit'])->name('.province.edit');
        Route::get('/province/delete', [ProvinceController::class, 'delete'])->name('.province.delete');
        Route::post('/province/save', [ProvinceController::class, 'save'])->name('.province.save');

        // Locations
        Route::get('/location', [LocationController::class, 'index'])->name('.location.index');
        Route::get('/location/edit', [LocationController::class, 'edit'])->name('.location.edit');
        Route::get('/location/delete', [LocationController::class, 'delete'])->name('.location.delete');
        Route::post('/location/save', [LocationController::class, 'save'])->name('.location.save');

        // Categories
        Route::get('/category', [CategoryController::class, 'index'])->name('.category.index');
        Route::get('/category/edit', [CategoryController::class, 'edit'])->name('.category.edit');
        Route::get('/category/delete', [CategoryController::class, 'delete'])->name('.category.delete');
        Route::post('/category/save', [CategoryController::class, 'save'])->name('.category.save');

        // Jobs
        Route::get('/job', [JobController::class, 'index'])->name('.job.index');
        Route::get('/job/edit', [JobController::class, 'edit'])->name('.job.edit');
        Route::get('/job/delete', [JobController::class, 'delete'])->name('.job.delete');
        Route::post('/job/save', [JobController::class, 'save'])->name('.job.save');
    });
});

Route::name('site')->group(function(){
    Route::middleware(['auth'])->group(function(){
        // Web Panel
        Route::get('/', [DashboardController::class, 'siteIndex'])->name('.index');
        Route::get('/logout', [SiteLoginController::class, 'logout'])->name('.logout');
        Route::get('/bycity', [SearchController::class, 'bycity'])->name('.bycity');
        Route::get('/bycategory', [SearchController::class, 'bycategory'])->name('.bycategory');

        // Searching
        Route::get('/search', [SearchController::class, 'search'])->name('.search');
        Route::post('/search/submit', [SearchController::class, 'searchsubmit'])->name('.searchsubmit');
        Route::get('/searchshow', [SearchController::class, 'searchshow'])->name('.searchshow');

        // Editing account informations
        Route::get('/editaccount', [SiteUserController::class, 'editaccount'])->name('.editaccount');
        Route::post('/editaccount/submit', [SiteUserController::class, 'editaccountsubmit'])->name('.editaccount.submit');
        Route::get('/contact', [SiteUserController::class, 'contact'])->name('.contact');
    });
    Route::get('/login', [SiteLoginController::class, 'index'])->name('.login-page');
    Route::post('/login', [SiteLoginController::class, 'login'])->name('.login');
    Route::get('/register', [LoginController::class, 'register'])->name('.register');
    Route::post('/register', [LoginController::class, 'registerSave'])->name('.register.save');
});
