@extends('dashboard.main')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="card border-light">
                        <div class="card-header border-light"><h4>Tambah Santri</h4></div>
                            <div class="row mt-2 px-2 py-2">
                                {{-- main content --}}
                                {{-- <div class="card-body"> --}}
                                <div class="row justify-content-center">
                                    @include('dashboard.siswa._dataDiri')
                                </div>

                                {{-- </div> --}}
                                {{-- end main content --}}
                            </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
