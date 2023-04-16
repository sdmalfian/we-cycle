<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApp\LoginController;
use App\Http\Controllers\UserApp\RewardController;
use App\Http\Controllers\UserApp\SampahController;
use App\Http\Controllers\UserApp\RegisterController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('landing-page');
    });
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('store');
    Route::get('/register', [RegisterController::class, 'index'])->name('indexRegister');
    Route::post('/register', [RegisterController::class, 'store'])->name('storeUser');
});

Route::middleware(['auth'])->group(function () {
    // AUTH
    Route::get('/dashboard', [LoginController::class, 'login'])->name('loginDashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    // PAGES
    Route::get('/kategori-sampah', [SampahController::class, 'index'])->name('index');
    Route::get('/rewards', [RewardController::class, 'index'])->name('indexReward');
});


Route::get('/profile', function () {
    return view('user-app/profile');
});

Route::get('/tukar-poin/reward/konfirmasi', function () {
    return view('user-app/tukar-poin/konfirmasi-tukar-poin');
});

Route::get('/tukar-poin/success', function () {
    return view('user-app/tukar-poin/success');
});

Route::get('/history/transaction', function () {
    return view('user-app/riwayat-transaksi');
});

Route::get('/history/points', function () {
    return view('user-app/riwayat-poin');
});

Route::get('/history/tukar-poin', function () {
    return view('user-app/riwayat-pesanan');
});

Route::get('/transactions/detail', function () {
    return view('user-app/detail-transaksi');
});
