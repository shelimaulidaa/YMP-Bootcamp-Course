<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/bootcamp', 'pages.bootcamp')->name('bootcamp');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/login', 'pages.login')->name('login');
Route::view('/register', 'pages.register')->name('register');
