@extends('auth.main')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card card-outline card-success">
                <div class="card-body">
                    <form action="{{ route('siswa.ubahpass') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Password Lama" name="password_lama">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password Baru" name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-info" type="submit">Simpan</button>
                        <a class="btn btn-sm btn-warning" href="{{ route('siswa.page') }}">Kembali</a>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
       <!-- /.login-logo -->




@endsection
