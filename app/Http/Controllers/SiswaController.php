<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $getSiswa = Siswa::all();
        // dd($getSiswa);
        return view('siswa.index', compact('getSiswa'));
    }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'nama' => 'required',
    //         'nis' => 'required',
    //         'jenis_kelamin' => 'required',
    //         'tanggal_lahir' => 'required',
    //         'alamat' => 'required',
    //         'kelas_id' => 'required',
    //         'kamar_id' => 'required'
    //     ]);
    //     // dd($request);
    //     Siswa::create([
    //         'nama' => $request->nama,
    //         'nis' => $request->nis,
    //         'jenis_kelamin' => $request->jenis_kelamin,
    //         'tanggal_lahir' => $request->tanggal_lahir,
    //         'alamat' => $request->alamat,
    //         'kelas_id' => $request->kelas_id,
    //         'kamar_id' => $request->kamar_id
    //     ]);
    //     return redirect()->route('siswa')->with('success','Data Berhasil Ditambahkan');
    // }

    // public function search()
    // {
    //     $cari = $_GET['search'];
    //     $data = DB::table('siswas');
    //     if ($cari != "") {
    //         $data->where('nama', 'LIKE', '%' . $cari . '%');
    //     }
    //     $data = $data->paginate(10);
    //     return view('/siswa/index', ['datas'=>$data]);
    // }
}
