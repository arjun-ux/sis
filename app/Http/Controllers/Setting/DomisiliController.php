<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Domisili;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DomisiliController extends Controller
{
    public function index()
    {
        $getDom = Domisili::all();
        $Muqim = Siswa::where('domisili_id', '1')->get()->count();
        // dd($Muqim);
        return view('dashboard.settings.domisili', compact('getDom','Muqim'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori_domisili' => 'required',
        ]);
        Domisili::create([
            'kategori_domisili' => $request->kategori_domisili,
        ]);
        return redirect()->route('domisili')->with('success', 'Data Berhasil Disimpan');
    }
}
