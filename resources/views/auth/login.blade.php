@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title"><h4>Login</h4></div>
                        <form action="{{ route('dologin') }}" method="post">
                            @csrf
                            <div class="row align-items-center mb-2">
                                <div class="col-md-4 ">
                                  <label for="inputEmail" class="col-form-label">Username</label>
                                </div>
                                <div class="col-md-8">
                                  <input type="text" id="inputEmail" name="username" class="form-control" autofocus>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-md-4">
                                  <label for="inputPassword6" class="col-form-label">Password</label>
                                </div>
                                <div class="col-md-8">
                                  <input type="password" id="inputPassword6" name="password" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <button class="btn btn-primary" type="submit">Login</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
