<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/products', 'products')->name('products');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/refresh/captcha', 'refreshCaptcha')->name('refresh.captcha');
        Route::post('/contact', 'contactSubmit')->name('contact.submit');
        Route::get('/sitemap.xml', 'sitemap')->name('sitemap');
    });

    Route::prefix('product')->controller(WebController::class)->group(function () {
        Route::get('snatch-block-and-tirfor-winch', 'product1')->name('product1');
    });
});
