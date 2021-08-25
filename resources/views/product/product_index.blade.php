@extends('layout.main')
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
	<h1>Tabel Stok Produk</h1>
@stop
@section('content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Stok Produk</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Kode Produk</th>
          <th>Nama Produk</th>
          <th>Deskripsi Produk</th>
          <th>Foto</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Stok</th>
        </tr>
        </thead>
        <tbody>
          @php
            $no = 1;
          @endphp
          @foreach ($produk as $data)
        <!-- <tr id="{{$data->id_retailer_produk}}"> -->
        <tr>
          <td>{{$no}}</td>
          <td>{{$data->kode_produk}}</td>
          <td>{{$data->nama}}</td>
          <td>{{$data->deskripsi_produk}}</td>
          <td><img src='{{$data->foto}}'></td>
          <!-- <td><img src='img/{{$data->foto}}'></td> -->
          <td>{{$data->stok}}</td>
          <td>Rp {{number_format($data->harga_jual,0,".",".")}}</td>
          <td style="text-align: center;">
              <a href="{{route('product.stock.show', $data->id_retailer_produk)}}" class="btn btn-outline-primary btn-sm"><i class="fas fa-eye"></i></a>
              <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modal-tambah-stok-produk-{{$data->id_retailer_produk}}" id="modal-tambah-stok-produk-{{$data->id_retailer_produk}}" data-toggle="modal" data-target="#tambahModal"><i class="fas fa-plus"></i></button>
              {{-- <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#modal-edit-stok-produk" id="modal-edit-stok-produk" data-toggle="modal" data-target="#editModal"><i class="fas fa-pencil-alt"></i></button> --}}
          </td>
        </tr>
          @php
            $no++
          @endphp

          <!-- MODAL TAMBAH STOK PRODUK -->
          <div class="modal fade" id="modal-tambah-stok-produk-{{$data->id_retailer_produk}}">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Jumlah Stok</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="{{route('product.stock.add', $data->id_retailer_produk)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                      <label for="exampleInputEmail1" class="col-sm-5 col-form-label">Stok</label>
                                      <div class="col-sm-7">
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Stok" name="stok" value="" autofocus>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="exampleInputEmail1" class="col-sm-5 col-form-label">Harga Beli</label>
                                      <div class="col-sm-7">
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Harga Beli" name="harga_beli" value="" autofocus>
                                      </div>
                                      </div>
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
      </tbody>
      <!-- <tfoot>
      <tr>
          <th>No</th>
          <th>Kode Produk</th>
          <th>Nama Produk</th>
          <th>Deskripsi Produk</th>
          <th>Foto</th>
          <th>Stok</th>
          <th>Harga</th>
      </tr>
      </tfoot> -->
    </table>
  </div>
  <!-- /.card-body -->
  </div>



@endsection

@section('js')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": true,
      "buttons": ["excel", "pdf", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });



</script>
@endsection
