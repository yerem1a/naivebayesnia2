<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlasifikasiController;


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

// Route::get('/klasifikasi', [KlasifikasiController::class, 'showform'])->name('klasifikasi');
// Route::post('/klasifikasi', [KlasifikasiController::class, 'classify'])->name('klasifikasi.classify'); // Tambahkan rute POST

Route::get('/klasifikasi', [KlasifikasiController::class, 'showform'])->name('klasifikasi');
Route::post('/klasifikasi', [KlasifikasiController::class, 'classify'])->name('klasifikasi.classify');


