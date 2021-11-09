@extends('layout.main')
@section('management_menu_open', 'menu-is-opening menu-open')
@section('management_aktif', 'active')
@section('product_aktif', 'active')
@section('navigation')
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Beranda</a></li>
      <li class="breadcrumb-item active">Produk</li>
    </ol>
  </div>
@stop

@section('title')
	<h1>Tabel Produk</h1>		
@stop
@section('content')
<!-- Main content -->
<div class="container-fluid">
  <div class="row">
    <div class="col-7">
      <!-- Horizontal Form -->
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Ubah Data Produk</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="{{ url('produk/update') }}">
          @csrf
          <div class="card-body">
            @foreach (($produk as $data => $row)
            <div class="form-group row">
              <label for="nama" class="col-sm-3 col-form-label">Stok</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="stok" placeholder="Stok" value="{{$row['stok']}}" name="stok">
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
            <a class="btn btn-danger btn-sm" onclick="location.href='{{url('/produk/update')}}'">Batal</a>
          </div>
          <!-- /.card-footer -->
          @endforeach
        </form>
      </div>
      <!-- /.card -->
    </div>

    <div class="col-5">
      <!-- general form elements disabled -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Hak Akses</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form>
              <div class="row">
                <div class="col-sm-6">
                  <!-- checkbox -->
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" checked>
                      <label class="form-check-label">Laporan</label>
                    </div>
                  </div>
                </div>
              </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

</div>
@endsection

@section('js')

@endsection
