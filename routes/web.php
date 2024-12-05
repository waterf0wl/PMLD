<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AttackerController;
use App\Http\Controllers\DefenderController;
use App\Http\Controllers\SandboxController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Access\AuthorizationException;

// Route dasar untuk halaman beranda
Route::get('/', function () {
    return view('welcome');
});

// Route untuk dashboard yang hanya dapat diakses oleh pengguna yang terautentikasi dan terverifikasi
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Group routes untuk semua peran (attacker, defender, administrator)
Route::middleware(['role:administrator,attacker,defender'])->group(function () {

    // Routes untuk Defender
    Route::middleware(['role:administrator,defender'])->group(function () {
        Route::get('/defender', function () {
            return view('defender');
        })->name('defender');

        Route::get('/defender/dashboard', [DefenderController::class, 'dashboard'])->name('defender.dashboard');
    });

    // Routes untuk Attacker
    Route::middleware(['role:administrator,attacker'])->group(function () {
        Route::get('/attacker', function () {
            return view('attacker');
        })->name('attacker');

        Route::get('/attacker/dashboard', [AttackerController::class, 'dashboard'])->name('attacker.dashboard');
    });

    // Routes umum untuk semua peran
    Route::get('/sandbox', [SandboxController::class, 'index'])->name('sandbox');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk terminal
    Route::get('/terminal', function () {
        return view('terminal');
    })->name('terminal');
});

// Group routes khusus untuk Administrator
Route::middleware(['role:administrator'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/{user}/edit', [AdminController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [AdminController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [AdminController::class, 'destroy'])->name('admin.users.destroy');
});

// Mengimpor route autentikasi
require __DIR__.'/auth.php';
