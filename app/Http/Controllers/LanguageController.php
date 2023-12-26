<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LanguageController extends Controller
{
    public function changeLanguage($locale)
    {
        if (array_key_exists($locale, LaravelLocalization::getSupportedLocales())) {
            App::setLocale($locale);
            session()->put('locale', $locale);
        }

        return Redirect::back();
    }
}
