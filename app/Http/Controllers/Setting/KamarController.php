<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $getKamar = Kamar::all();
        return view('dashboard.settings.kamar', compact('getKamar'));
    }
}
