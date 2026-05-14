<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tzi.index');
})->name('tzi.home');

Route::get('/tentang-kami', function () {
    return view('tzi.about');
})->name('tzi.about');

Route::get('/layanan', function () {
    return view('tzi.service');
})->name('tzi.service');

Route::get('/produk', function () {
    return view('tzi.product');
})->name('tzi.product');

Route::get('/produk/{slug}', function ($slug) {
    return view('tzi.product-detail');
})->name('tzi.product-detail');

Route::get('/kontak', function () {
    return view('tzi.contact');
})->name('tzi.contact');

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');

Route::get('/sitemap.xml', function () {
    return response()->view('tzi.sitemap')->header('Content-Type', 'text/xml');
});
