<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->authorize('isAdmin');
    // }
    public function index()
    {
        $this->authorize('isAdmin');
        $countSiswa = Siswa::get('nama')->count();
        // $getName = Siswa::get('nama')->first();
        // dd($getName);
        return view('dashboard.admin.index', compact('countSiswa'));
    }
}
