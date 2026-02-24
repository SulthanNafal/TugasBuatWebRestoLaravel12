<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| HALAMAN UTAMA
|--------------------------------------------------------------------------
*/

// Dashboard sebagai halaman utama
Route::view('/', 'dashboard')->name('dashboard');



/*
|--------------------------------------------------------------------------
| HALAMAN UTAMA NAVBAR
|--------------------------------------------------------------------------
*/

Route::view('/dashboard', 'dashboard')->name('dashboard.page');
Route::view('/fasilitas', 'fasilitas')->name('fasilitas');
Route::view('/daftarmenu', 'daftarmenu')->name('daftarmenu');
Route::view('/paket', 'paket')->name('paket');
Route::view('/reservasi', 'reservasi')->name('reservasi');
Route::view('/tentang', 'tentang')->name('tentang');
Route::view('/login', 'login')->name('login');



/*
|--------------------------------------------------------------------------
| SUB MENU PAKET
|--------------------------------------------------------------------------
*/

Route::view('/setmenu', 'setmenu')->name('setmenu');
Route::view('/catering', 'catering')->name('catering');
Route::view('/prasmanan', 'prasmanan')->name('prasmanan');
Route::view('/nasikotak', 'nasikotak')->name('nasikotak');



/*
|--------------------------------------------------------------------------
| DETAIL MENU MAKANAN
|--------------------------------------------------------------------------
*/

Route::view('/makanan', 'makanan')->name('makanan');
Route::view('/sayuran', 'sayuran')->name('sayuran');
Route::view('/minuman', 'minuman')->name('minuman');