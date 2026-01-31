<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;    // Controller untuk Halaman Depan
use App\Http\Controllers\ProjectController; // Controller untuk Admin CRUD

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- PUBLIC ROUTES (Halaman Depan) ---
Route::controller(PageController::class)->group(function () {
    // Landing Page
    Route::get('/', 'home')->name('home');
    
    // Halaman List Produk (Portfolio)
    Route::get('/products', 'products')->name('products');
    
    // Halaman Layanan Joki
    Route::get('/services/joki', 'joki')->name('services.joki');
    
    // Halaman Layanan Network
    Route::get('/services/network', 'network')->name('services.network');
});

// --- ADMIN ROUTES (Kelola Data) ---
// Route ini digunakan untuk menambah/edit/hapus project di database
// Aksesnya nanti via: /projects
Route::resource('projects', ProjectController::class);