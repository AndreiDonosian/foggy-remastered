<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [\App\Http\Controllers\GuestController::class, 'index'])->name('guest.index');
Route::get('/public-files/index', [\App\Http\Controllers\PublicFilesController::class, 'index'])->name('public.index');
Route::post('/public-files/upload', [\App\Http\Controllers\PublicFilesController::class, 'upload'])->name('public.upload')
    ->middleware('throttle:30,1');

Route::get('/p/{path}', [\App\Http\Controllers\PublicFilesController::class, 'read'])->name('public.read')
    ->middleware('throttle:60,1');

Auth::routes(['verify' => true]);

Route::get('/profile/email/activate/{user}', [\App\Http\Controllers\ProfileController::class, 'activateEmail'])
    ->name('profile.email.activate')
    ->middleware('signed');


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
    Route::post('/profile/settings', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/email', [\App\Http\Controllers\ProfileController::class, 'updateEmail'])->name('profile.email.update');
    Route::post('/profile/password', [\App\Http\Controllers\ProfileController::class, 'sendPasswordReset'])
        ->name('profile.password.reset')
        ->middleware('throttle:5,1');


    Route::get('/pin', [\App\Http\Controllers\PinController::class, 'index'])->name('pin');
    Route::get('/pin-gather', [\App\Http\Controllers\PinController::class, 'getPin'])->name('pin.gather');


    Route::post('/file/upload', [\App\Http\Controllers\PinController::class, 'submitPin'])->name('pin.submit')
        ->middleware([\App\Http\Middleware\MemoryVerify::class, 'throttle:60,1']);

    Route::get('/file/read/{name}/{pin}', [\App\Http\Controllers\FileController::class, 'readFile'])->name('file.read');
    Route::get('/file/read-enc/{name}/{pin}', [\App\Http\Controllers\FileController::class, 'readFileEncrypted'])->name('file.readEnc');
    Route::get('/file/public/{name}/{pin}', [\App\Http\Controllers\FileController::class, 'makePublic'])->name('file.public');
    Route::get('/file/encoded/{name}/{pin}', [\App\Http\Controllers\FileController::class, 'makePublicEncoded'])->name('file.publicEnc');
    Route::get('/file/delete/{name}/{pin}', [\App\Http\Controllers\FileController::class, 'delete'])->name('file.delete');


    Route::get('/ajax/credits-check', [\App\Http\Controllers\CreditsController::class, 'check']);


    Route::post('/contact/submit', [\App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit')
        ->middleware('throttle:5,1');

    // common all page routes
    Route::get('{any}', [HomeController::class, 'pageView']);
});
