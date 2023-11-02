@extends('dashboard.main')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h4>Dashboard</h4></div>
{{-- main content --}}
                        <div class="row mt-2 px-2 py-2">
                            <div class="col-md-3">
                                <a href="{{ route('siswa') }}" style="text-decoration: none">
                                    <div class="card">
                                        <div class="card-header colorCard">Santri</div>
                                        <div class="card-body text-center">
                                            <h4>Jumlah Santri</h4>
                                            <h3>{{$countSiswa}}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header colorCard">Santri</div>
                                    <div class="card-body">
                                        <p>Jumlah Santri</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header colorCard">Santri</div>
                                    <div class="card-body">
                                        <p>Jumlah Santri</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header colorCard">Santri</div>
                                    <div class="card-body">
                                        <p>Jumlah Santri</p>
                                    </div>
                                </div>
                            </div>
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
