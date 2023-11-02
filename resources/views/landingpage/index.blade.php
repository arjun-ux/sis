@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0 boxImg boxTumpuk">
                <div class="col-md-12 text-center mt-4 landingPage">
                    <img class="img-fluid" src="{{ asset('img/pondok.png') }}" alt="" width="150" height="150">
                    <h1>Penerimaan Peserta Didik Baru</h1>
                    <h2>Pondok Pesantren Al Anwari</h2>
                    <h3>Kertosari - Banyuwangi</h3>

                    <a class="btn btn-sm btn-outline-warning" href="#"><i data-feather="briefcase"></i> Klik Daftar</a>
                    <a class="btn btn-sm btn-outline-info" href="#"><i data-feather="log-in"></i> Login Santri</a>
                </div>
            </div>
        </div>

    </div>
@endsection
