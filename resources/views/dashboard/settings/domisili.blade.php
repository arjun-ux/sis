@extends('dashboard.main')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h4>Diniyyah</h4></div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createDom">
                                Tambah
                            </button>
                        </div>
{{-- main content --}}
                            <div class="row mt-2 px-2 py-2">
                                <table id="tableSiswa" class="table table-bordered table-striped">
                                    <thead>
                                        <th>Kategori Domisili</th>
                                        <th>Total</th>
                                    </thead>
                                    <tbody>

                                        @foreach ($getDom as $dom)
                                            <tr>
                                                <td>{{$dom->kategori_domisili}}</td>
                                                <td>{{$Muqim}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
{{-- end main content --}}
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- Modal Create domisili -->
<div class="modal fade" id="createDom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori Domisili</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('domisili.store') }}" method="post">
            @csrf
            <div class="modal-body">
                <div class="row align-items-center mb-1">
                    <div class="col-md-4">
                    <label for="inputPassword6" class="col-form-label">Kategori Domisili</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" id="inputPassword6" class="form-control" name="kategori_domisili">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
</div>
@endsection

