<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Setting\DiniyyahController;
use App\Http\Controllers\Setting\KamarController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landingpage.index');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'dologin'])->name('dologin');
Route::get('logout',[LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');
Route::post('/kamar', [KamarController::class, 'store'])->name('kamar.store');

Route::get('/diniyyah', [DiniyyahController::class, 'index'])->name('diniyyah');
Route::post('/diniyyah', [DiniyyahController::class, 'store'])->name('diniyyah.store');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
