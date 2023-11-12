<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // login santri
    public function loginSantri()
    {
        return view('auth.loginSiswa');
    }
    public function dologinSantri(Request $request)
    {
        $credential = $request->validate([
            'nis' => 'required',
            'password' => 'required'
        ]);
        if (Auth::guard('siswa')->attempt($credential, $request->remember)) {
            return redirect()->intended(route('siswa.page'));
        }
        echo 'login gagal';

    }

    public function logoutSantri()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login.santri')
            ->withSuccess('Logout Berhasil');
    }
    // end Login Santri

    // login Admin
    public function login()
    {
        return view('auth.login');
    }
    public function dologin(Request $request)
    {
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        // dd($credential);
        if (auth()->attempt($credential)) {
            session()->regenerate();
            return redirect('dashboard')->withSuccess('Login Successfully!');
        }
        return back()->with('error', 'Email atau password Salah!!!');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('Logout Berhasil');
    }
    // end login admin
}
