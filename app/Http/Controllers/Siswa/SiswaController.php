<?php

namespace App\Http\Controllers\Siswa;
use App\Http\Controllers\Controller;
use App\Mail\kirimEmail;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    // index untuk role siswa/santri
    public function siswaPage()
    {

        return view('siswaPage.index');
    }
    public function index()
    {
        $getSiswa = Siswa::all();

        // dd($get);
        return view('dashboard.siswa.index', compact('getSiswa'));
    }
    public function create()
    {
        return view('dashboard.siswa.create');
    }



    public function store(Request $request)
    {

        $data = $this->validate($request, [
            'nis' => '',
            'email' => 'required',
            'password' => '',
            'role_id' => '',
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
        // dd($data);
        // '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        Siswa::create([
            'nis' => Siswa::generateNis() ?: null,
            'email' => $request->email,
            'password' => Hash::make(Str::random(8)), // nantinya password akan dikirim ke email pendaftar
            'role_id' => $request->role_id ?: null,
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
        // mengirim password ke akun email yang di daftarkan

        $getSiswaMail = Siswa::latest()->first();

        Mail::to($getSiswaMail->email)->send(new kirimEmail('data'));
        return redirect()->route('siswa');

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
