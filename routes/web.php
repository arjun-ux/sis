<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Mail\SendEmailController;
use App\Http\Controllers\Setting\DiniyyahController;
use App\Http\Controllers\Setting\DomisiliController;
use App\Http\Controllers\Setting\KamarController;
use App\Http\Controllers\Siswa\OrtuController;
use App\Http\Controllers\Siswa\SiswaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landingpage.index');
});


// Route::post('/mail', [SendEmailController::class, 'index'])->name('send.mail');
// route register santri/siswa mandiri
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'doRegister'])->name('doRegister');

//  login santri
Route::get('/login-santri', [LoginController::class, 'loginSantri'])->name('login.santri')->middleware('guest');
Route::post('/login-santri', [LoginController::class, 'dologinSantri'])->name('dologin.santri');
Route::get('/siswa-page', [SiswaController::class, 'siswaPage'])->name('siswa.page');
Route::get('/ubahPassSis', [SiswaController::class, 'ubahPassPage'])->name('siswa.ubah');
Route::post('/ubahPassSis', [SiswaController::class, 'ubahPass'])->name('siswa.ubahpass');
Route::get('/logout-santri', [LoginController::class, 'logoutSantri'])->name('logout.santri');


// login admin
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'dologin'])->name('dologin');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
// route setting kamar
Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');
Route::post('/kamar', [KamarController::class, 'store'])->name('kamar.store');
// route setting diniyyah
Route::get('/diniyyah', [DiniyyahController::class, 'index'])->name('diniyyah');
Route::post('/diniyyah', [DiniyyahController::class, 'store'])->name('diniyyah.store');
// route setting domisili
Route::get('/domi', [DomisiliController::class, 'index'])->name('domisili');
Route::post('/domi', [DomisiliController::class, 'store'])->name('domisili.store');
// route sisiwa dalam dashboard admin
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa-profile', [SiswaController::class, 'profile'])->name('siswa.profile');
// route ortu dalam dashboard admin
Route::get('/ortu/create', [OrtuController::class, 'create'])->name('ortu.create');
Route::post('/ortu', [OrtuController::class, 'store'])->name('ortu.store');
