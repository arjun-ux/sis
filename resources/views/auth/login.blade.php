@extends('auth.main')
@section('content')
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-success">
            <div class="card-header text-center border-bottom-0">
                <img class="img-fluid" src="{{ asset('img/pondok.png') }}" alt="Logo Pondok" width="150" height="150">
            </div>

            <div class="card-body">
            <p class="login-box-msg">Login Untuk Masuk</p>

            <form action="{{ route('dologin') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-user"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="row justify-content-center">
                <div class="col-4">
                    <button type="submit" class="btn btn-success btn-block">Login</button>
                </div>
                <!-- /.col -->
                </div>
            </form>



            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

@endsection
