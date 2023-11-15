@extends('dashboard.main')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="card border-light">
                        <div class="card-header border-light">
                            <h4>Tambah Santri</h4>
                            {{-- <img src="{{ asset('plugins/icons/Star.png') }}" alt=""> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="85" height="42" viewBox="0 0 85 42" fill="none">
                                <path d="M39.6179 0.527786C41.5235 0.17883 43.4765 0.17883 45.3821 0.527785L70.8997 5.20072C74.2691 5.81775 77.3664 7.51574 79.7085 10.0155V10.0155C85.4738 16.169 85.4738 25.831 79.7085 31.9845V31.9845C77.3664 34.4843 74.2691 36.1823 70.8997 36.7993L45.3821 41.4722C43.4765 41.8212 41.5235 41.8212 39.6179 41.4722L14.1003 36.7993C10.7309 36.1823 7.63356 34.4843 5.29153 31.9845V31.9845C-0.473775 25.831 -0.473775 16.169 5.29153 10.0155V10.0155C7.63356 7.51574 10.7309 5.81775 14.1003 5.20072L39.6179 0.527786Z" fill="#41AE7E" fill-opacity="0.72"/>
                              </svg>
                        </div>
                            <div class="row mt-2 px-2 py-2">
                                {{-- main content --}}
                                {{-- <div class="card-body"> --}}
                                <div class="row justify-content-center">
                                    @include('dashboard.ortuSiswa._dataOrtu')
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
