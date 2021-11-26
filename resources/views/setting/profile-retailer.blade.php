@extends('layout.main')
@section('setting_menu_open', 'menu-is-opening menu-open')
@section('setting_aktif', 'active')
@section('profil_aktif', 'active')

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
              <div class="col-md-6"></div>
              <div class="col-md-2">
                <button type="button" class="btn  btn-brand-main btn-sm bg-brand-main text-white rounded-8 no-shadow" data-toggle="modal" data-target="#modal-edit-akun" id="edit-akun">Ubah Info Akun</button>
              </div>
              <div class="col-md-2">
                <button type="button" class="btn  btn-brand-main btn-sm bg-brand-main text-white rounded-8 no-shadow" data-toggle="modal" data-target="#modal-edit-kios" id="edit-kios">Ubah Info Toko</button>
              </div>
              <div class="col-md-2">
                <button type="button" class="btn  btn-brand-main btn-sm bg-brand-main text-white rounded-8 no-shadow" data-toggle="modal" data-target="#modal-edit-pass" id="edit-pass">Ubah Kata Sandi</button>
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
                <!-- <img src="{{url($row['file_foto_depan'])}}" alt="Your Profile Image" class="avatar img-circle img-thumbnail" style="margin-bottom:10px; width:140px; height:140px;"> -->
                <img src="{{url('img/avatar.png')}}" alt="Your Profile Image" class="avatar img-circle img-thumbnail" style="margin-bottom:10px; width:140px; height:140px;">
              </div>
              <div class="col-sm-10">
                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label text-md-left">Nama</label>
                    <div class="col-md-6">
                      <input id="name" type="text" class="form-control" name="name" value="{{$row['nama_pemilik']}}" placeholder="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="username" class="col-md-3 col-form-label text-md-left">Username</label>
                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control" name="username" value="{{$row['username']}}" placeholder="" readonly>
                    </div>
                  </div>

                <div class="form-group row">
                    <label for="password" class="col-md-3 col-form-label text-md-left">Kata Sandi</label>
                    <div class="col-md-6">
                        <input id="new_password" type="password" class="form-control" name="password" value="********" readonly>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- TOKO -->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">Info Toko</h5>
            </div>
            <div class="card-body row" style="font-size:16px;">
              <div class="col-sm-2 text-center">
              </div>
              <div class="col-sm-10">
                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label text-md-left">Nama Toko</label>
                    <div class="col-md-6">
                      <input id="name" type="text" class="form-control" name="name" value="{{$row['nama_toko']}}" placeholder="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="phonenumber" class="col-md-3 col-form-label text-md-left">No Telp</label>
                    <div class="col-md-6">
                        <input id="phonenumber" type="" class="form-control" name="phonenumber" value="{{$row['no_hp']}}" placeholder="" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="username" class="col-md-3 col-form-label text-md-left">Alamat</label>
                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control" name="username" value="{{$row['alamat']}}" placeholder="" readonly>
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
        <form action="{{ url('/profile/retailer/update') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                          <input type="hidden" class="form-control" id="nama" placeholder="Nama" value="{{$row['id_retailer']}}" name="id_retailer">
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-5 col-form-label">Nama*</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama_pemilik" value="{{$row['nama_pemilik']}}" autofocus>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-5 col-form-label">Username*</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username" value="{{$row['username']}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-5 col-form-label">Photo</label>
                          <div class="col-sm-7">
                            <input type="file" class="form-control-file" id="exampleInputEmail1" placeholder="Photo" name="file_foto_depan" value="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button type="submit" class="btn  btn-brand-secondary btn-sm bg-brand-secondary text-white rounded-8 no-shadow">Simpan</button>
                    <button type="button" class="btn btn-outline-danger rounded-8" data-dismiss="modal">Batal</button>
                  </div>
                </div>
              </div>
            </form>
      </div>
    </div>
</div>
<!-- /.modal -->

<!-- MODAL EDIT TOKO -->
<div class="modal fade" id="modal-edit-kios">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Data Toko</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('/profile/retailer/update/toko') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                          <input type="hidden" class="form-control" id="nama" placeholder="Nama" value="{{$row['id_retailer']}}" name="id_retailer">
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Nama Toko*</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Toko" name="nama_toko" value="{{$row['nama_toko']}}" autofocus>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-3 col-form-label">No Telp*</label>
                          <div class="col-sm-9">
                            <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="no_telp" name="" value="{{$row['no_hp']}}" readonly> -->
                            <input type="" class="form-control" id="exampleInputEmail1" placeholder="No Telp" name="no_hp" value="{{$row['no_hp']}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Alamat*</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat" name="alamat" value="{{$row['alamat']}}">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button type="submit" class="btn  btn-brand-secondary btn-sm bg-brand-secondary text-white rounded-8 no-shadow">Simpan</button>
                    <button type="button" class="btn btn-outline-danger rounded-8" data-dismiss="modal">Batal</button>
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
        <form action="{{ url('/profile/retailer/update/password') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        @foreach ($data as $value => $row)
                          <input type="hidden" class="form-control" id="nama" placeholder="Nama" value="{{$row['id_retailer']}}" name="id_retailer">
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
                  <button type="submit" class="btn  btn-brand-secondary btn-sm bg-brand-secondary text-white rounded-8 no-shadow">Simpan</button>
                    <button type="button" class="btn btn-outline-danger rounded-8" data-dismiss="modal">Batal</button>
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
