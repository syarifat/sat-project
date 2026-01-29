<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

// Halaman Public (Landing Page)
Route::get('/', [ProjectController::class, 'home'])->name('home');

// Halaman Admin (CRUD Resource)
Route::resource('projects', ProjectController::class);