<?php

// routes/web.php
use Illuminate\Support\Facades\Route;

// Import Controllers
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Rute Halaman Publik
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/layanan/{package}', [PageController::class, 'detailPaket'])->name('layanan.detail');
Route::get('/tentang-kami', [PageController::class, 'tentang'])->name('tentang');
Route::get('/pemesanan', [PageController::class, 'pemesanan'])->name('pemesanan');
Route::post('/pemesanan', [PageController::class, 'storePemesanan'])->name('pemesanan.store');

// Rute Autentikasi Admin
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');


// Rute Panel Admin (Dilindungi oleh Middleware Auth)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('packages', PackageController::class);
    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::patch('orders/{order}/status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
    Route::get('orders/report', [OrderController::class, 'generateReport'])->name('orders.report');
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
});

