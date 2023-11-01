<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
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
        return back()->with('error', 'Username atau password Salah!!!');
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
