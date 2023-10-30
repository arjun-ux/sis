<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            return redirect('dashboard.admin.index')->withSuccess('Login Successfully!');
        }
        return back()->with('error', 'Username atau password Salah!!!');
    }
}
