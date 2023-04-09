<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApp\RewardController;
use App\Http\Controllers\UserApp\SampahController;

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

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/kategori-sampah', [SampahController::class, 'index'])->name('index');
Route::get('/rewards', [RewardController::class, 'index'])->name('index');

Route::get('/login', function () {
    return view('user-app/login');
});

Route::get('/register', function () {
    return view('user-app/register');
});

Route::get('/dashboard', function () {
    return view('user-app/dashboard');
});

Route::get('/profile', function () {
    return view('user-app/profile');
});

Route::get('/tukar-poin', function () {
    return view('user-app/tukar-poin/tukar-poin-page');
});



Route::get('/tukar-poin/reward/konfirmasi', function () {
    return view('user-app/tukar-poin/konfirmasi-tukar-poin');
});

Route::get('/tukar-poin/reward/success', function () {
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
