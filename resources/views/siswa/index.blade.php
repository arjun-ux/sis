@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row mb-2">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data</h4>
                <form action="{{ route('siswa.store') }}" method="post">
                    @csrf
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-2">
                          <label for="inputPassword6" class="col-form-label">Nama</label>
                        </div>
                        <div class="col-auto">
                          <input type="text" id="inputPassword6" class="form-control" name="nama">
                        </div>
                    </div>

                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-2">
                          <label for="inputPassword6" class="col-form-label">NIS</label>
                        </div>
                        <div class="col-auto">
                          <input type="text" id="inputPassword6" class="form-control" name="nis">
                        </div>
                    </div>

                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-2">
                          <label for="inputPassword6" class="col-form-label">Jenis Kelamin</label>
                        </div>
                        <div class="col-auto" >
                            <select class="form-select" id="inputPassword6" name="jenis_kelamin">
                                <option selected>== Pilih Gender ==</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                          {{-- <input type="text" id="inputPassword6" class="form-control" name="jenis_kelamin"> --}}
                        </div>
                    </div>

                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-2">
                          <label for="inputPassword6" class="col-form-label">Tanggal Lahir</label>
                        </div>
                        <div class="col-auto">
                          <input type="date" id="inputPassword6" class="form-control" name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div class="col-md-2">
                            <label for="exampleFormControlTextarea1" class="col-form-label">Alamat</label>
                        </div>
                        <div class="col-auto">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-2">
                          <label for="inputPassword6" class="col-form-label">Kelas</label>
                        </div>
                        <div class="col-auto">
                          <input type="text" id="inputPassword6" class="form-control" name="kelas_id">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-2">
                          <label for="inputPassword6" class="col-form-label">Kamar</label>
                        </div>
                        <div class="col-auto">
                          <input type="text" id="inputPassword6" class="form-control" name="kamar_id">
                        </div>
                    </div>

                    <button class="btn btn-success" type="submit">Simpan</button>

                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <table id="tableSiswa" class="table table-bordered table-striped">
            <thead class="text-center">
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Kamar</th>
                <th>Tingkat Diniyyah</th>
                <th>Kelas Diniyyah</th>
                <th>Ayah</th>
                <th>Ibu</th>
                <th>Nama Wali</th>
                <th>Wali</th>
            </thead>
            <tbody>
                @foreach ($getSiswa as $siswa)
                    <tr>
                        <td>{{$siswa->nama}}</td>
                        <td>{{$siswa->jenis_kelamin}}</td>
                        <td>{{$siswa->Kamar->nama_kamar}}</td>
                        <td>{{$siswa->Diniyyah->nama_tingkatan}}</td>
                        <td>{{$siswa->Diniyyah->kelas}}</td>
                        <td>{{$siswa->Ortu->nama_ayah}}</td>
                        <td>{{$siswa->Ortu->nama_ibu}}</td>
                        <td>{{$siswa->Ortu->nama_wali}}</td>
                        <td>{{$siswa->Ortu->hubungan_wali}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection
