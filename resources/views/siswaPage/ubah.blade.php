@extends('auth.main')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card card-outline card-success">
            <div class="card-body">
                <form action="{{ route('siswa.ubahpass') }}" method="post">
                    @csrf
                    <div class="row align-items-center mb-1">
                        <div class="col-md-4">
                        <label for="inputPassword6" class="col-form-label">Password</label>
                        </div>
                        <div class="col-md-8">
                        <input type="text" id="inputPassword6" class="form-control" name="password">
                        </div>
                    </div>
                    <button class="btn btn-sm btn-info" type="submit">Simpan</button>

                </form>
            </div>
        </div>

    </div>
</div>
       <!-- /.login-logo -->




@endsection
