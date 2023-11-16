<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $getKamar = Kamar::all(['*']);
        return view('dashboard.settings.kamar', compact('getKamar'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kamar' => 'required',
            'ketua_kamar' => 'required',
        ]);
        Kamar::create([
            'nama_kamar' => $request->nama_kamar,
            'ketua_kamar' => $request->ketua_kamar,
        ]);
        return redirect()->route('kamar')->with('succes', 'Data Berhasil Disimpan');
    }
}
