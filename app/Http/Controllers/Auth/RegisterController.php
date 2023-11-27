<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function doRegister(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string'],
            'username' => ['required', 'string'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required', 'min:6'],
        ]);
        // dd($request);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => 2
        ]);
        echo 'berhasil';
    }
}
