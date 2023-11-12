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

                                    <div class="row">

                                            <div class="col-md-6">
                                                <div class="card card-outline card-success shadow">
                                                    <div class="card-header text-center border-light"><h5>Data Siswa</h5></div>
                                                    <div class="card-body">
                                                        <form action="{{ route('siswa.store') }}" method="post">
                                                            @csrf
                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">NIS</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                <input type="text" id="inputPassword6" class="form-control" name="nis" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">Email</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                <input type="text" id="inputPassword6" class="form-control" name="email">
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">Password</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                <input type="text" id="inputPassword6" class="form-control" name="password" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">Role</label>
                                                                </div>
                                                                <div class="col-md-8" >
                                                                    <select class="form-select" id="inputPassword6" name="role_id">
                                                                        <option selected>== Pilih Role ==</option>
                                                                        <option value="1">Admin</option>
                                                                        <option value="2">Siswa</option>
                                                                    </select>
                                                                {{-- <input type="text" id="inputPassword6" class="form-control" name="jenis_kelamin"> --}}
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">NIK</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                <input type="text" id="inputPassword6" class="form-control" name="no_nik">
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">NO KK</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                <input type="text" id="inputPassword6" class="form-control" name="no_kk">
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">Nama</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                <input type="text" id="inputPassword6" class="form-control" name="nama">
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">Jenis Kelamin</label>
                                                                </div>
                                                                <div class="col-md-8" >
                                                                    <select class="form-select" id="inputPassword6" name="jenis_kelamin">
                                                                        <option selected>== Pilih Gender ==</option>
                                                                        <option value="laki-laki">Laki-Laki</option>
                                                                        <option value="perempuan">Perempuan</option>
                                                                    </select>
                                                                {{-- <input type="text" id="inputPassword6" class="form-control" name="jenis_kelamin"> --}}
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">Tempat Lahir</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                <input type="text" id="inputPassword6" class="form-control" name="tempat_lahir">
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">Tanggal Lahir</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                <input type="date" id="inputPassword6" class="form-control" name="tanggal_lahir">
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">Domisili</label>
                                                                </div>
                                                                <div class="col-md-8" >
                                                                    <select class="form-select" id="inputPassword6" name="domisili_id">
                                                                        <option selected>== Pilih Domisili ==</option>
                                                                        <option value="1">Muqim</option>
                                                                        <option value="2">Non-Muqim</option>
                                                                    </select>
                                                                {{-- <input type="text" id="inputPassword6" class="form-control" name="jenis_kelamin"> --}}
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                    <label for="exampleFormControlTextarea1" class="col-form-label">Alamat</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">Diniyyah</label>
                                                                </div>
                                                                <div class="col-md-8" >
                                                                    <select class="form-select" id="inputPassword6" name="diniyyah_id">
                                                                        <option selected>== Pilih Diniyyah ==</option>
                                                                        <option value="1">Ula</option>
                                                                        <option value="2">Wustho</option>
                                                                        <option value="3">Ulya</option>
                                                                    </select>
                                                                {{-- <input type="text" id="inputPassword6" class="form-control" name="jenis_kelamin"> --}}
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">Kamar</label>
                                                                </div>
                                                                <div class="col-md-8" >
                                                                    <select class="form-select" id="inputPassword6" name="kamar_id">
                                                                        <option selected>== Pilih Kamar ==</option>
                                                                        <option value="1">A</option>
                                                                        <option value="2">B</option>
                                                                    </select>
                                                                {{-- <input type="text" id="inputPassword6" class="form-control" name="jenis_kelamin"> --}}
                                                                </div>
                                                            </div>
                                                        <button class="btn btn-success" type="submit">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6">
                                                <div class="card card-outline card-success shadow">
                                                    <div class="card-header text-center border-light"><h5>Data Siswa</h5></div>
                                                    <div class="card-body">

                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">Nama</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                <input type="text" id="inputPassword6" class="form-control" name="nama">
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">NIS</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                <input type="text" id="inputPassword6" class="form-control" name="nis">
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">Jenis Kelamin</label>
                                                                </div>
                                                                <div class="col-md-8" >
                                                                    <select class="form-select" id="inputPassword6" name="jenis_kelamin">
                                                                        <option selected>== Pilih Gender ==</option>
                                                                        <option value="laki-laki">Laki-Laki</option>
                                                                        <option value="perempuan">Perempuan</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">Tanggal Lahir</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                <input type="date" id="inputPassword6" class="form-control" name="tanggal_lahir">
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                    <label for="exampleFormControlTextarea1" class="col-form-label">Alamat</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">Kelas</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                <input type="text" id="inputPassword6" class="form-control" name="kelas_id">
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-1">
                                                                <div class="col-md-4">
                                                                <label for="inputPassword6" class="col-form-label">Kamar</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                <input type="text" id="inputPassword6" class="form-control" name="kamar_id">
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div> --}}

                                        </div>

                                    </form>
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
