<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminAuthController;

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
Route::view('/catering', 'catering')->name('catering');
Route::view('/tentang', 'tentang')->name('tentang');
Route::view('/login', 'login')->name('login');
Route::view('/transaksi', 'transaksi')->name('transaksi');
Route::view('/Laporan', 'Laporan')->name('Laporan');
Route::get('/daftar', function () {
return view('daftarlogin');})->name('daftar');
Route::get('/login', function () {
return view('login');})->name('login');



/*
|--------------------------------------------------------------------------
| SUB MENU PAKET
|--------------------------------------------------------------------------
*/

Route::view('/setmenu', 'setmenu')->name('setmenu');
Route::view('/prasmanan', 'prasmanan')->name('prasmanan');
Route::view('/nasikotak', 'nasikotak')->name('nasikotak');

/*
|--------------------------------------------------------------------------
| SUB KE RESERVASI
|--------------------------------------------------------------------------
*/
Route::get('/reservasi', [PageController::class, 'reservasi'])->name('reservasi');
Route::post('/transaksi', [PageController::class, 'transaksi'])
    ->name('transaksi');

/*
|--------------------------------------------------------------------------
| DETAIL MENU MAKANAN
|--------------------------------------------------------------------------
*/

Route::view('/makanan', 'makanan')->name('makanan');
Route::view('/sayuran', 'sayuran')->name('sayuran');
Route::view('/minuman', 'minuman')->name('minuman');


/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AdminAuthController::class, 'login'])->name('login');

Route::get('/Dashboard', [PageController::class, 'Dashboard'])->name('Dashboard');
Route::get('/Laporan', [PageController::class, 'Laporan'])->name('Laporan');

Route::get('/daftar', function () {
    return view('daftarlogin');
})->name('daftar');

Route::post('/daftar', [AdminAuthController::class, 'register'])->name('register.proses');
