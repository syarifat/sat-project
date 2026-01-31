<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/products', 'products')->name('products');
    Route::get('/services/joki', 'joki')->name('services.joki');
    Route::get('/services/network', 'network')->name('services.network');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('projects', AdminController::class);
});