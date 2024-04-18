<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');


    Route::get('/pin', [\App\Http\Controllers\PinController::class, 'index'])->name('pin');
    Route::get('/pin-gather', [\App\Http\Controllers\PinController::class, 'getPin'])->name('pin.gather');
    Route::post('/pin-submit', [\App\Http\Controllers\PinController::class, 'submitPin'])->name('pin.submit');


    // common all page routes
    Route::get('{any}', [HomeController::class, 'pageView']);
});
