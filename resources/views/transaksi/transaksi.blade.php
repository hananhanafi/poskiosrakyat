@extends('layout.main')
@section('transaction_aktif', 'active')
<link rel="stylesheet" type="text/css" href="{{asset('jqueryui/jquery-ui.min.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('navigation')
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Transaksi</li>
    </ol>
  </div>
@stop

@section('title')
	<h1>Transaksi</h1>		
@stop
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title"><b>KASIR POS KIOS RAKYAT</b></h3>
              </div>
              <form role="form">
                <div class="card-body">
                  <h3><label>Data transaksi</label></h3>
                  <div class="form-group">
                    <h6 for="exampleInputPassword1">Tgl.Penjualan</h6>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tgl.Penjualan">
                  </div>
                  <h3><label>Input Barang</label></h3>
                  <div class="form-inline" style="padding-bottom: 15px;">
                    <h6 for="inputEmail4">Nama/Kode Barang : </h6>
                    <div class="form-group col-md-4">
                      <input class="form-control" style="width:250px;" name="cari" id="namabarang">
                    </div>
                  </div>
                  <div class="input-group col-md-12 ">
                    <h6 for="exampleInputFile">Harga jual (Rp) : </h6>
                      <div class="form-group col-2">
                      <input type="input" class="form-control" id="hargabarang">
                      </div>
                      <p>Harga Setelah Diskon (Rp) : </p>
                      <div class="form-group col-2">
                      <input type="input" class="form-control" id="hargadiskon">
                      </div>
                      <p>jumlah&nbsp;:</p>
                      <div class="form-group col-1">
                      <input type="number" class="form-control" id="exampleInputPassword1">
                      </div>
                      <div>
                      <button type="submit" class="btn btn-default ">Tambah</button>
                      </div>
                  </div>
                  <h3><label>Daftar Barang</label></h3>
                  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <!-- <th>id</th> -->
                  <th>No</th>
                  <th>Kode</th>
                  <th>Nama Barang</th>
                  <th>Harga(Rp)</th>
                  <th>Disc(%)</th>
                  <th>Jumlah</th>
                  <th>SubTotal(Rp)</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>21PCY85</td>
                  <td>Beras</td>
                  <td>10.000</td>
                  <td>0</td>
                  <td>1</td>
                  <td>10.000</td>
                  <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                      <a href="{{url('#')}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                      <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal-hapus" id="hapus-barang"><i class="fa fa-trash"></i></button>
                      </div>
                    </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>21PCY85</td>
                  <td>Beras</td>
                  <td>10.000</td>
                  <td>0</td>
                  <td>1</td>
                  <td>10.000</td>
                  <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                      <a href="{{url('#')}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                      <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal-hapus" id="hapus-barang"><i class="fa fa-trash"></i></button>
                      </div>
                    </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>21PCY85</td>
                  <td>Beras</td>
                  <td>10.000</td>
                  <td>0</td>
                  <td>1</td>
                  <td>10.000</td>
                  <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                      <a href="{{url('#')}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                      <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal-hapus" id="hapus-barang"><i class="fa fa-trash"></i></button>
                      </div>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>Total Belanja</th>
                  <th></th>
                  <th>30.000</th>
                  <th></th>
                </tr>
                <tr>
                <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>Uang Bayar</th>
                  <th></th>
                  <th>50.000</th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
              </div>
                <div class="modal fade" id="modal-hapus">
                    <div class="modal-dialog">
                      <div class="modal-content bg-danger">
                        <div class="modal-header">
                          <h4 class="modal-title">Hapus Operator</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Apakah kamu yakin untuk menghapus?</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                          <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="btn btn-outline-light">Delete</button>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('jqueryui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){

$( "#namabarang" ).autocomplete({
  source: function( request, response ) {
    // Fetch data
    $.ajax({
      url:"/cari",
      type: 'post',
      dataType: "json",
      data: {
         _token: CSRF_TOKEN,
         search: request.term
      },
      success: function( data ) {
         response( data );
      }
    });
  },
  select: function (event, ui) {
     // Set selection
     $('#namabarang').val(ui.item.label); // display the selected text
     $('#hargabarang').val(ui.item.price); // save selected id to input
     $('#hargadiskon').val(ui.item.diskon); // save selected id to input
     return false;
  }
});

});
</script>
@endsection