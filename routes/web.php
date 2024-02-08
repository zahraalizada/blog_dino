<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

require_once "admin.php";

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware'=>'lang'], function()
{
    Route::get('/', [HomeController::class, 'index'])->name('homepage');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});

Route::get('change-language/{locale}', [LanguageController::class, 'changeLanguage'])->name('change.language');









