@extends('layout.main')

@section('navigation')
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Profil</li>
    </ol>
  </div>
@stop

@section('title')
	<h1>Profil</h1>		
@stop
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-10">                 
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">Detail Profil</h5>
            </div>
            <div class="card-body row" style="font-size:16px;">
              <div class="col-sm-3 text-center">
                <img src="{{('adminlte/dist/img/avatar3.png')}}" alt="Your Profile Image" class="avatar img-circle img-thumbnail" style="margin-bottom:10px; width:80%;">
                <form method="POST" enctype="multipart/form-data" action="">
                  @csrf
                  <div class="form-group">
                    <input type="file" class="form-control-file" id="photo" name="photo">
                  </div>
                  <button type="submit" class="btn btn-primary btn-sm">Ubah gambar</button>
                </form>
              </div>
              <div class="col-sm-9">
                <h3>Administrator</h3>
                <hr>
                <form method="POST" action="">
                  {{ csrf_field() }}
                  @method('PUT')

                  @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                  @endforeach 

                  <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-left">Nama</label>

                    <div class="col-md-6">
                      <input id="name" type="text" class="form-control" name="name" value="" placeholder="Your Name">
                    </div>
                  </div>

                  <!-- <div class="form-group row">
                    <label for="phonenumber" class="col-md-4 col-form-label text-md-left">Nomor telp</label>

                    <div class="col-md-6">
                        <input id="phonenumber" type="number" class="form-control" name="phonenumber" value="" placeholder="+6281 xxxx xxxx">
                    </div>
                  </div> -->

                  <div class="form-group row">
                    <label for="username" class="col-md-4 col-form-label text-md-left">Username</label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control" name="username" value="" placeholder="yourname">
                    </div>
                  </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-left">Password Baru</label>

                    <div class="col-md-6">
                        <input id="new_password" type="password" class="form-control" name="password" autocomplete="current-password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-left">Ulangi Password Baru</label>

                    <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="current-password">
                    </div>
                </div>
                  <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Ubah Profil
                        </button>
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
@endsection

@section('js')
@endsection
