<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginSantri()
    {
        return view('auth.loginSiswa');
    }
    public function dologinSantri(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required',
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

    public function login()
    {
        return view('auth.login');
    }
    public function dologin(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required',
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

}
