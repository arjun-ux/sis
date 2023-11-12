@extends('auth.main')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card card-outline card-success">
            <div class="card-header text-center border-bottom-0">
                <img class="img-fluid" src="{{ asset('img/pondok.png') }}" alt="Logo Pondok" width="150" height="150">
            </div>

            <div class="card-body">
                <p class="login-box-msg">
                    <strong>{{ Auth::guard('siswa')->user()->nama }}</strong><br>
                    <strong>{{ Auth::guard('siswa')->user()->nis }}</strong>
                </p>
                <p>Alamat, {{ Auth::guard('siswa')->user()->alamat }}</p>

                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <a class="btn btn-sm btn-danger" href="{{ route('logout.santri') }}">Logout</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
       <!-- /.login-logo -->




@endsection
