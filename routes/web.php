<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApp\ProfileController;
use App\Http\Controllers\UserApp\HomeController;
use App\Http\Controllers\UserApp\LoginController;
use App\Http\Controllers\UserApp\RewardController;
use App\Http\Controllers\UserApp\SampahController;
use App\Http\Controllers\UserApp\HistoryController;
use App\Http\Controllers\UserApp\RegisterController;
use App\Http\Controllers\UserApp\TukarPoinController;

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
    Route::get('/profile', [ProfileController::class, 'show'])->name('showProfile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('editProfile');

    // PAGES
    Route::get('/settings', [HomeController::class, 'settings'])->name('settings');
    Route::get('/kategori-sampah', [SampahController::class, 'index'])->name('index');

    // Tukar Poin -> Transaction
    Route::get('/tukar-poin', [TukarPoinController::class, 'index'])->name('indexTukarPoin');
    Route::get('/tukar-poin/reward/{id}', [TukarPoinController::class, 'show'])->name('showReward');
    Route::get('/tukar-poin/reward/{id}/konfirmasi', [TukarPoinController::class, 'confirm'])->name('confirmReward');

    // Transaction
    Route::get('/transaction/{id}/detail', [HistoryController::class, 'show'])->name('transactionDetail');
    Route::get('/history/transaction', [HistoryController::class, 'transactionHistory'])->name('transactionHistory');
    Route::get('/history/points', [HistoryController::class, 'pointHistory'])->name('pointHistory');
    Route::get('/history/tukar-poin', [HistoryController::class, 'tukarPointHistory'])->name('tukarPointHistory');
    route::post('/tukar-poin/reward/{id}', [TukarPoinController::class, 'store'])->name('storeTukarPoin');
});
