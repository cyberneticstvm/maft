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
        Route::get('ratchet-load-binders', 'product2')->name('product2');
        Route::get('lever-hoist', 'product3')->name('product3');
        Route::get('beam-and-geared-trolley', 'product4')->name('product4');
        Route::get('cargo-lashing', 'product5')->name('product5');
        Route::get('round-sling', 'product6')->name('product6');
        Route::get('shackle', 'product7')->name('product7');
        Route::get('vertical-and-horizontal-plate-clamp', 'product8')->name('product8');
        Route::get('chain-block', 'product9')->name('product9');
        Route::get('5-tonne-pallet-truck', 'product10')->name('product10');
        Route::get('magnetic-lifter', 'product11')->name('product11');
        Route::get('electric-chain-block-0.5-ton-to-15-ton', 'product12')->name('product12');
        Route::get('lifting-gear', 'product13')->name('product13');
        Route::get('chain-slings', 'product14')->name('product14');
        Route::get('wire-rope-slings', 'product15')->name('product15');
        Route::get('double-webbing-lanyard', 'product16')->name('product16');
        Route::get('full-body-harness', 'product17')->name('product17');
        Route::get('retractable-fall-arrester-block', 'product18')->name('product18');
        Route::get('anchorage-life-line-rope', 'product19')->name('product19');
    });
});
