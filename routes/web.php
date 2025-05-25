<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman (tentang kami)
Route::get('login', function () {
    return view('login');
})->name('login');
