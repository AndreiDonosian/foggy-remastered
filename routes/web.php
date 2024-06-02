<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [\App\Http\Controllers\GuestController::class, 'index'])->name('guest.index');
Route::get('/public-files/index', [\App\Http\Controllers\PublicFilesController::class, 'index'])->name('public.index');
Route::post('/public-files/upload', [\App\Http\Controllers\PublicFilesController::class, 'upload'])->name('public.upload')
    ->withoutMiddleware(\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class);

Route::get('/p/{path}', [\App\Http\Controllers\PublicFilesController::class, 'read'])->name('public.read');

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
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');


    Route::get('/profile/info', [\App\Http\Controllers\ProfileController::class, 'info'])->name('profile.info');
    Route::get('/profile/settings', [\App\Http\Controllers\ProfileController::class, 'settings'])->name('profile.settings');

    Route::get('/pin', [\App\Http\Controllers\PinController::class, 'index'])->name('pin');
    Route::get('/pin-gather', [\App\Http\Controllers\PinController::class, 'getPin'])->name('pin.gather');


    Route::post('/file/upload', [\App\Http\Controllers\PinController::class, 'submitPin'])->name('pin.submit')
        ->middleware([\App\Http\Middleware\MemoryVerify::class])
        ->withoutMiddleware(\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class);

    Route::get('/file/read/{name}/{pin}', [\App\Http\Controllers\FileController::class, 'readFile'])->name('file.read');
    Route::get('/file/read-enc/{name}/{pin}', [\App\Http\Controllers\FileController::class, 'readFileEncrypted'])->name('file.readEnc');
    Route::get('/file/public/{name}/{pin}', [\App\Http\Controllers\FileController::class, 'makePublic'])->name('file.public');
    Route::get('/file/encoded/{name}/{pin}', [\App\Http\Controllers\FileController::class, 'makePublicEncoded'])->name('file.publicEnc');
    Route::get('/file/delete/{name}/{pin}', [\App\Http\Controllers\FileController::class, 'delete'])->name('file.delete');


    Route::get('/ajax/credits-check', [\App\Http\Controllers\CreditsController::class, 'check']);


    // common all page routes
    Route::get('{any}', [HomeController::class, 'pageView']);
});
