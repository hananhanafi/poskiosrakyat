@extends('layout.main')
@section('operator_aktif', 'active')

@section('navigation')
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Beranda</a></li>
      <li class="breadcrumb-item"><a href="{{url('/operator')}}">Petugas Kasir</a></li>
      <li class="breadcrumb-item active">Detail Kasir</li>
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
    <div class="col-7">
			<div class="card">
        <div class="card-header">
          <h3 class="card-title">Detail Kasir</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table">
            <thead>
            </thead>
            <tbody>
              @foreach ($data as $value => $row)
              <tr>
                <td width="30%"><b>Nama</b></td>
                <td>: {{$row['nama']}}</td>
              </tr>
              <tr>
                <td><b>Username</b></td>
                <td>: {{$row['username']}}</td>
              </tr>
              <tr>
                <td><b>Kata Sandi</b></td>
                <td>: ********</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

    <!-- <div class="col-5"> -->
      <!-- general form elements disabled -->
      <!-- <div class="card">
        <div class="card-header">
          <h3 class="card-title">Hak Akses</h3>
        </div>
         /.card-header -->
        <!-- <div class="card-body">
          <form>
              <div class="row">
                <div class="col-sm-6">
                  checkbox -->
                  <!-- <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" checked>
                      <label class="form-check-label">Laporan</label>
                    </div>
                  </div>
                </div>
              </div> -->
          <!-- </form>
        </div> --> 
        <!-- /.card-body -->
      <!-- </div> -->
      <!-- /.card -->
    <!-- </div> -->
	</div>
  <div class="row">
    <div class="col-2">
      <div class="row">
        <div class="col-4">
          @foreach ($data as $value => $row)
            <button class="btn btn-warning btn-sm" onclick="location.href='{{url('/operator/edit/'.$row['id_retailer_operator'])}}'">
              Edit
            </button>
          @endforeach
        </div>
        <div>
          <button class="btn btn-primary btn-sm" onclick="location.href='{{url('/operator')}}'">
            Kembali
          </button>  
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
@section('js')
	
@endsection
