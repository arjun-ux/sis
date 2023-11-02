@extends('dashboard.main')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h4>Daftar Santri</h4></div>
{{-- main content --}}
                            <div class="row mt-2 px-2 py-2">
                                <table id="tableSiswa" class="table table-bordered table-striped">
                                    <thead>
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
{{-- end main content --}}
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
