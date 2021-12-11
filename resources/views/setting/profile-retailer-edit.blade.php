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
	<h1>Pengaturan Profil</h1>
@stop
@section('content')

@foreach ($data as $value => $row)
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-sm-11">
      <div class="row">
        <!-- AKUN -->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">Profil</h5>
            </div>
            <div class="card-body row" style="font-size:16px;">
              <div class="col-sm-10">
              <form action="{{ url('/profile/retailer/update') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                  @csrf
                  
                <input type="hidden" class="form-control" id="id_retailer" placeholder="id_retailer" value="{{$row['id_retailer']}}" name="id_retailer">
                <div class="form-group row">
                  <label for="name" class="col-md-3 col-form-label text-md-left">Nama Pengguna</label>
                  <div class="col-md-6">
                    <input id="nama_pemilik" type="text" class="form-control" name="nama_pemilik" value="{{$row['nama_pemilik']}}" placeholder="">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="username" class="col-md-3 col-form-label text-md-left">Username</label>
                  <div class="col-md-6">
                      <input id="username" type="text" class="form-control" name="username" value="{{$row['username']}}" placeholder="">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="no_hp" class="col-md-3 col-form-label text-md-left">Nomor HP</label>
                  <div class="col-md-6">
                      <input id="no_hp" type="text" class="form-control" name="no_hp" value="{{$row['no_hp']}}" placeholder="">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="nama_toko" class="col-md-3 col-form-label text-md-left">Nama Toko</label>
                  <div class="col-md-6">
                      <input id="nama_toko" type="text" class="form-control" name="nama_toko" value="{{$row['nama_toko']}}" placeholder="">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="alamat" class="col-md-3 col-form-label text-md-left">Alamat</label>
                  <div class="col-md-6">
                      <!-- <input id="alamat" type="text" class="form-control" name="alamat" value="{{$row['alamat']}}" placeholder="" style="height:80px;vertical-align:;text-align:center"> -->
                      <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="4">{{$row['alamat']}}</textarea>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="foto" class="col-md-3 col-form-label text-md-left">Foto</label>
                  <div class="col-md-6 d-flex">
                    <img src="{{ $row['file_foto_depan'] ? asset('storage/posts_image/'.$row['file_foto_depan']) : asset('storage\app\public\posts_image\1638279578.png')}}" alt="Your Profile Image" class="avatar img-thumbnail" style="margin-bottom:10px; width:140px; height:140px;" id="preview_foto">
                    <!-- <img src="{{url('img/avatar.png')}}" alt="Your Profile Image" class="avatar img-circle img-thumbnail" style="margin-bottom:10px; width:140px; height:140px;"> -->
                    <label for="file_foto_depan">
                      <a type="button" class="btn btn-outline-danger rounded-8 ml-2">Unggah Foto</a>
                    </label>
                    <input type="file" class="form-control-file d-none" id="file_foto_depan" placeholder="Photo" name="file_foto_depan" value="" onchange="loadFile(event)">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <button type="submit" class="btn  btn-brand-secondary btn-sm bg-brand-secondary text-white rounded-8 no-shadow">Ubah Profil</button>
                    <a type="button" class="btn btn-outline-danger rounded-8" href="{{url('/profile/retailer')}}" id="batal">Batal</a>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div><!--/tab-pane-->
@endforeach
@endsection

@section('js')
<script>
  var loadFile = function(event) {
    var output = document.getElementById('preview_foto');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
@endsection
