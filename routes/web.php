<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {
//    $locale = explode('/', \request()->path())[0];
    $locale = \request()->cookie('lang', 'en');
    if(!in_array($locale, ['en', 'ru'])) {
        $locale = 'en';
    }
    if(!empty(\request()->get('lang', null))) {
        $locale = \request()->get('lang');
    }

    \Illuminate\Support\Facades\App::setLocale($locale);
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');


    Route::get('/profile/info', [\App\Http\Controllers\ProfileController::class, 'info'])->name('profile.info');
    Route::get('/profile/settings', [\App\Http\Controllers\ProfileController::class, 'settings'])->name('profile.settings');

    Route::get('/pin', [\App\Http\Controllers\PinController::class, 'index'])->name('pin');
    Route::get('/pin-gather', [\App\Http\Controllers\PinController::class, 'getPin'])->name('pin.gather');
    Route::post('/pin-submit', [\App\Http\Controllers\PinController::class, 'submitPin'])->name('pin.submit');


    // common all page routes
    Route::get('{any}', [HomeController::class, 'pageView']);
});
