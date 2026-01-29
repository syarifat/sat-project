<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\DB;

// Halaman Public (Landing Page)
Route::get('/', [ProjectController::class, 'home'])->name('home');

// Halaman Admin (CRUD Resource)
Route::resource('projects', ProjectController::class);

Route::get('/debug-db', function () {
    try {
        // 1. Cek Koneksi DB
        DB::connection()->getPdo();
        
        // 2. Cek List Tabel
        $tables = DB::select('SHOW TABLES');
        
        return response()->json([
            'status' => 'OK',
            'message' => 'Koneksi Database Berhasil! 🎉',
            'database_name' => DB::connection()->getDatabaseName(),
            'tables_found' => count($tables),
            'ssl_ca_path_config' => config('database.connections.mysql.options.' . PDO::MYSQL_ATTR_SSL_CA),
            'file_exists' => file_exists(config('database.connections.mysql.options.' . PDO::MYSQL_ATTR_SSL_CA)) ? 'YES' : 'NO'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'ERROR',
            'message' => $e->getMessage(), // <--- Ini pesan error aslinya
            'ssl_config' => config('database.connections.mysql.options'),
        ], 500);
    }
});