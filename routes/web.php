<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LayananController;

Route::get('/', fn() => view('beranda'))->name('beranda');
Route::get('/profil', fn() => view('profil'))->name('profil');
Route::get('/galeri', fn() => view('galeri'))->name('galeri');
Route::get('/kontak', fn() => view('kontak'))->name('kontak');

// CRUD untuk Layanan
Route::resource('layanan', LayananController::class);
