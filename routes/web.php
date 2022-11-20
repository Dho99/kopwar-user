<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AngsuranController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\DashboardController;

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

// login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


// tampilan segala macam
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/simpanan', [SimpananController::class, 'index'])->middleware('auth');
Route::get('/pinjaman', [PinjamanController::class, 'index'])->middleware('auth');
Route::get('/angsuran', [AngsuranController::class, 'index'])->middleware('auth');

// manajemen akun
Route::get('/akun', [AkunController::class, 'index'])->name('tampil')->middleware('auth');
Route::get('/akun/edit/{anggota_id}', [AkunController::class, 'ubah'])->name('ubah')->middleware('auth');
Route::post('/update', [AkunController::class, 'update'])->name('update')->middleware('auth');
