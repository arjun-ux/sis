@extends('dashboard.main')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h4>Daftar Kamar</h4></div>
{{-- main content --}}
                            <div class="row mt-2 px-2 py-2">
                                <table id="tableSiswa" class="table table-bordered table-striped">
                                    <thead>
                                        <th>Nama Kamar</th>
                                        <th>Ketua Kamar</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($getKamar as $kamar)
                                            <tr>
                                                <td>{{$kamar->nama_kamar}}</td>
                                                <td>{{$kamar->ketua_kamar}}</td>
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

