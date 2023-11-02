<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countSiswa = Siswa::all()->count();
        return view('dashboard.admin.index', compact('countSiswa'));
    }
}
