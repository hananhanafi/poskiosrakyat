@extends('layout.main')

@section('navigation')
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Beranda</a></li>
      <li class="breadcrumb-item active">Profil</li>
    </ol>
  </div>
@stop

@section('title')
  <h1>Profil</h1>   
@stop
@section('content')

@foreach ($data as $value => $row)
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-11">               
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body row" align="right">
              <div class="col-md-8"></div>
              <div class="col-md-2">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-edit-akun" id="edit-akun" style="background-color: #F47500;color: #fff">Ubah Info Akun</button>
              </div>
              <div class="col-md-2">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-edit-pass" id="edit-pass" style="background-color: #F47500;color: #fff">Ubah Kata Sandi</button>
              </div>
            </div>
          </div>
        </div>
        <!-- AKUN -->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">Info Akun</h5>
            </div>
            <div class="card-body row" style="font-size:16px;">
              <div class="col-sm-2 text-center">
              </div>
              <div class="col-sm-10">
                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label text-md-left">Nama</label>
                    <div class="col-md-6">
                      <input id="name" type="text" class="form-control" name="nama" value="{{$row['nama']}}" placeholder="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="username" class="col-md-3 col-form-label text-md-left">Nama Pengguna</label>
                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control" name="username" value="{{$row['username']}}" placeholder="">
                    </div>
                  </div>

                <div class="form-group row">
                    <label for="password" class="col-md-3 col-form-label text-md-left">Kata Sandi</label>
                    <div class="col-md-6">
                        <input id="new_password" type="password" class="form-control" name="password" value="********">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>          
</div><!--/tab-pane-->

<!-- MODAL EDIT AKUN -->
<div class="modal fade" id="modal-edit-akun">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Data Akun</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('/profile/retailer_operator/update') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                          <input type="hidden" class="form-control" id="nama" placeholder="Nama" value="{{$row['id_retailer_operator']}}" name="id_retailer_operator">
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-5 col-form-label">Nama*</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama" value="{{$row['nama']}}" autofocus>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-5 col-form-label">Nama Pengguna*</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Pengguna" name="username" value="{{$row['username']}}">
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
<!-- /.modal -->

<!-- MODAL EDIT PASSWORD -->
<div class="modal fade" id="modal-edit-pass">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Kata Sandi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('/profile/retailer_operator/update/password') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                          <label for="exampleInputEmail1" class="col-sm-5 col-form-label">Password Saat ini*</label>
                          <div class="col-sm-7">
                            <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Password Saat Ini" name="current_password" autofocus>
                          </div>
                        </div>
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
<!-- /.modal -->
@endforeach
@endsection

@section('js')
@endsection
