<?php

namespace App\Http\Controllers\Siswa;
use App\Http\Controllers\Controller;
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
        return view('dashboard.siswa.index', compact('getSiswa'));
    }
    public function create()
    {
        return view('dashboard.siswa.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nis' => 'required',
            'no_nik' => 'required',
            'no_kk' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'domisili_id' => 'required',
            'ortu_id' => '',
            'alamat' => 'required',
            'diniyyah_id' => 'required',
            'kamar_id' => 'required',
        ]);
        // dd($request);
        Siswa::create([
            'nis' => $request->nis,
            'no_nik' => $request->no_nik,
            'no_kk' => $request->no_kk,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'domisili_id' => $request->domisili_id,
            'ortu_id' => $request->ortu_id ?: null,
            'alamat' => $request->alamat,
            'diniyyah_id' => $request->diniyyah_id,
            'kamar_id' => $request->kamar_id,
        ]);
        return redirect('ortu.create');

    }

    public function profile()
    {
        return view('dashboard.siswa.profile');
    }

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
