<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countSiswa = Siswa::all()->count();
        $getName = Siswa::get('nama')->first();
        // dd($getName);
        return view('dashboard.admin.index', compact('countSiswa', 'getName'));
    }
}
