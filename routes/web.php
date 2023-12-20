<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;

use Illuminate\Support\Facades\Route;

require_once "admin.php";

//Route::get('/{lang}', function ($lang) {
//    App::setLocale($lang);
//    return view('front.homepage');
//});

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');





