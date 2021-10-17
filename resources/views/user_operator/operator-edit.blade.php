@extends('layout.main')
@section('operator_aktif', 'active')

@section('navigation')
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Beranda</a></li>
      <li class="breadcrumb-item"><a href="{{url('/operator')}}">Petugas Kasir</a></li>
      <li class="breadcrumb-item active">Edit Kasir</li>
    </ol>
  </div>
@stop

@section('css')

@endsection

@section('title')
  <h1>Petugas Kasir</h1>    
@stop
@section('content')
<!-- Main content -->
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- Horizontal Form -->
      <div class="card card">
        <div class="card-header">
          <h3 class="card-title">Ubah Petugas Kasir</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="{{ url('operator/update') }}">
          @csrf
          <div class="card-body">
            @foreach ($data as $value => $row)
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama Operator</label>
              <div class="col-sm-4">
                <input type="hidden" class="form-control" id="nama" placeholder="Nama" value="{{$row['id_retailer_operator']}}" name="id_retailer_operator">
                <input type="text" class="form-control" id="nama" value="{{$row['nama']}}" name="nama">
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="nama" value="{{$row['username']}}" name="username">
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-4">
                <!-- <button type="button" class="btn btn-brand-main btn-sm" id="sandi" data-toggle="modal" data-target="#editModal">Ubah Password</button> -->
                <button type="button" class="btn  btn-brand-main btn-sm bg-brand-main text-white rounded-8 no-shadow" id="sandi" data-toggle="modal" data-target="#editModal">
                  Ubah Password
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-sm-4">
                <button type="submit" class="btn  btn-brand-secondary btn-sm bg-brand-secondary text-white rounded-8 no-shadow">
                  Ubah
                </button>
                <!-- <button type="submit" class="btn btn-sm btn-primary">Tambah</button> -->
                <a class="btn btn-outline-danger rounded-8" onclick="location.href='{{url('operator')}}'">Batal</a>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <!-- <div class="card-footer">
            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
            <a class="btn btn-danger btn-sm" onclick="location.href='{{url('/operator')}}'">Batal</a>
          </div> -->
          <!-- /.card-footer -->
          @endforeach
        </form>
      </div>
      <!-- /.card -->
    </div>

    <!-- <div class="col-5">
      <!-- general form elements disabled -->
      <!-- <div class="card">
        <div class="card-header">
          <h3 class="card-title">Hak Akses</h3>
        </div>
        <!-- /.card-header -->
        <!-- <div class="card-body"> -->
          <!-- <form>
              <div class="row">
                <div class="col-sm-6">
                  checkbox
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" checked>
                      <label class="form-check-label">Laporan</label>
                    </div>
                  </div>
                </div>
              </div>
          </form> -->
        <!-- </div> -->
        <!-- /.card-body -->
      <!-- </div> --> 
      <!-- /.card -->
    <!-- </div> -->
  </div>

</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Kata Sandi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('operator/update/password') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        @foreach ($data as $value => $row)
                          <input type="hidden" class="form-control" id="nama" placeholder="Nama" value="{{$row['id_retailer_operator']}}" name="id_retailer_operator">
                        @endforeach
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-5 col-form-label">Kata Sandi Baru*</label>
                          <div class="col-sm-7">
                            <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Minimal 8 karakter" name="password" value="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-5 col-form-label">Konfirmasi Kata Sandi Baru*</label>
                          <div class="col-sm-7">
                            <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Tulis Ulang Kata Sandi Baru" name="password_confirmation" value="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </form>
      </div>
    </div>
  </div>
@endsection
@section('js')
  
@endsection