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
                                        <th>NIS</th>
                                        <th>Password</th>
                                        <th>Nama Siswa</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Kamar</th>
                                        <th>Tingkat Diniyyah</th>
                                        <th>Kelas Diniyyah</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($getSiswa as $siswa)
                                            <tr>
                                                <td>{{$siswa->nis}}</td>
                                                <td>{{$siswa->password}}</td>
                                                <td>{{$siswa->nama}}</td>
                                                <td>{{$siswa->jenis_kelamin}}</td>
                                                <td>{{$siswa->Kamar->nama_kamar}}</td>
                                                <td>{{$siswa->Diniyyah->nama_tingkatan}}</td>
                                                <td>{{$siswa->Diniyyah->kelas}}</td>
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
