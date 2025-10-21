<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// ====== Halaman Utama ======
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/bootcamp', 'pages.bootcamp')->name('bootcamp');
Route::view('/contact', 'pages.contact')->name('contact');


Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::view('/register', 'pages.register')->name('register');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', fn() => view('pages.admin.dashboard'))->name('admin.dashboard');
    Route::get('/bootcamp', fn() => view('pages.admin.bootcamp'))->name('admin.bootcamp');
    Route::get('/course', fn() => view('pages.admin.course'))->name('admin.course');
    Route::get('/sertifikat', fn() => view('pages.admin.sertifikat'))->name('admin.sertifikat');
    Route::get('/transaksi', fn() => view('pages.admin.transaksi'))->name('admin.transaksi');
});

