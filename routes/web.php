<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage.index');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'dologin'])->name('dologin');
Route::get('logout',[LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
