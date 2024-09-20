<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;

// Rute untuk halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk daftar UMKM dan detail UMKM
Route::get('/umkm', [UmkmController::class, 'index'])->name('umkm.index');
Route::get('/umkm/{id}', [UmkmController::class, 'show'])->name('umkm.show');

// Rute untuk halaman Tentang Kami
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Rute untuk otentikasi (login, register, dll.)
Auth::routes();

// Rute yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});


