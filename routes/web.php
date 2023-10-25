<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BerandaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'showLoginForm']);
Route::get('/beranda', [BerandaController::class, 'showBeranda'])->name('beranda');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/', [KlasifikasiController::class, 'showform'])->name('klasifikasi');
Route::get('/klasifikasi', [KlasifikasiController::class, 'showform'])->name('klasifikasi');
Route::post('/klasifikasi', [KlasifikasiController::class, 'classify'])->name('klasifikasi.classify');
Route::get('/riwayat-gejala', [KlasifikasiController::class, 'riwayatGejala'])->name('riwayat.gejala');

Route::middleware('auth')->group(function () {
    Route::get('/beranda', [BerandaController::class, 'showBeranda'])->name('beranda');
    Route::get('/klasifikasi', [KlasifikasiController::class, 'showform'])->name('klasifikasi');
    Route::post('/klasifikasi', [KlasifikasiController::class, 'classify'])->name('klasifikasi.classify');
    Route::get('/riwayat-gejala', [KlasifikasiController::class, 'riwayatGejala'])->name('riwayat.gejala');
});
