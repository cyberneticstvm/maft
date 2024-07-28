<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::middleware(['web'])->group(function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/refresh/captcha', 'refreshCaptcha')->name('refresh.captcha');
        Route::post('/contact', 'contactSubmit')->name('contact.submit');
    });
});
