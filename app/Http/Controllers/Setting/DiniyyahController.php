<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Diniyyah;
use Illuminate\Http\Request;

class DiniyyahController extends Controller
{
    public function index()
    {
        $getDiniyyah = Diniyyah::all();
        return view('dashboard.settings.diniyyah', compact('getDiniyyah'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_tingkatan' => 'required',
            'kelas' => 'required',
        ]);

        Diniyyah::create([
            'nama_tingkatan' => $request->nama_tingkatan,
            'kelas' => $request->kelas,
        ]);
        return redirect()->route('diniyyah')->with('success', 'Data Berhasil Disimpan');
    }
}
