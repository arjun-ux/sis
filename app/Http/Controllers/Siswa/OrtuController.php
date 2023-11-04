<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Ortu;
use Illuminate\Http\Request;

class OrtuController extends Controller
{
    public function create()
    {
        return view('dashboard.ortu.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_ayah' => 'required',
            'nik_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nama_ibu' => 'required',
            'perkerjaan_ibu' => 'required',
            'penghasilan_ortu' => 'required',
            'alamat_ortu' => '',
            'nama_wali' => 'required',
            'hubungan_wali' => 'required',
            'pekerjaan_wali' => 'required',
            'penghasilan_wali' => 'required',
            'alamat_wali' => '',
        ]);
        Ortu::create([
            'nama_ayah' => $request->nama_ayah,
            'nik_ayah' => $request->nik_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'perkerjaan_ibu' => $request->perkerjaan_ibu,
            'penghasilan_ortu' => $request->penghasilan_ortu,
            'alamat_ortu' => $request->alamat_ortu ?: null,
            'nama_wali' => $request->nama_wali,
            'hubungan_wali' => $request->hubungan_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'penghasilan_wali' => $request->penghasilan_wali,
            'alamat_wali' => $request->alamat_wali ?: null,
        ]);
        return redirect()->route('siswa.profile')->withSuccess('Data berhasil disimpan!');
    }
}
