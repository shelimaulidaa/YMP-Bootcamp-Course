<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminKelasController;
use App\Http\Controllers\Admin\KelasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ======================
// 🔹 Halaman Utama
// ======================
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/bootcamp', 'pages.bootcamp')->name('bootcamp');
Route::view('/contact', 'pages.contact')->name('contact');

// ======================
// 🔹 Authentication Routes
// ======================
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// ======================
// 🔹 USER ROUTES
// ======================
Route::middleware(['auth'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', fn() => view('pages.user.dashboard'))->name('dashboard');
    Route::get('/bootcamp', fn() => view('pages.user.bootcamp'))->name('bootcamp');
    Route::get('/course', fn() => view('pages.user.course'))->name('course');
    Route::get('/sertifikat', fn() => view('pages.user.sertifikat'))->name('sertifikat');
    Route::get('/transaksi', fn() => view('pages.user.transaksi'))->name('transaksi');
});

// ======================
// 🔹 ADMIN ROUTES
// ======================
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminKelasController::class, 'index'])->name('dashboard');
    Route::resource('kelas', KelasController::class);
});
