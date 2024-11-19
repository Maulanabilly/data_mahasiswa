<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\AuthMiddleware;

// Halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk halaman utama (Beranda)
Route::get('/', function () {
    return view('home'); // Mengembalikan view home.blade.php
})->name('home');

// Route untuk halaman utama (Beranda)
Route::get('/dashboard', function () {
    return view('index'); 
});

// Route untuk halaman Data Mahasiswa
Route::get('/data-mahasiswa', [MahasiswaController::class, 'index'])->name('data-mahasiswa')->middleware([AuthMiddleware::class]);

// Route untuk menampilkan form tambah mahasiswa
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create')->middleware([AuthMiddleware::class]);

// Route untuk menyimpan data mahasiswa baru
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store')->middleware([AuthMiddleware::class]);

// Route untuk menampilkan form edit mahasiswa
Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit')->middleware([AuthMiddleware::class]);

// Route untuk mengupdate data mahasiswa
Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update')->middleware([AuthMiddleware::class]);

// Route untuk menghapus mahasiswa
Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy')->middleware([AuthMiddleware::class]);
