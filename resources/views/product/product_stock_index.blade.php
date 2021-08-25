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
	<h1>Tabel Produk</h1>
@stop
@section('content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Stok Produk {{$produk->nama}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Ditambahkan</th>
          <th>Harga Beli</th>
          <th>Jumlah</th>
          <th>Terjual</th>
          <th>Sisa Stok</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($stok as $data)
        @php
            // dd($data);
        @endphp
        <!-- <tr id="{{$data->id_retailer_produk}}"> -->
        <tr>
          <td>{{$no}}</td>
          <td>{{$data->created_at}}</td>
          <td>{{$data->harga_beli}}</td>
          <td>{{$data->jumlah}}</td>
          <td>{{$data->terjual}}</td>
          <td>{{$data->jumlah - $data->terjual}}</td>
          <td style="text-align: center;">
              <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#modal-edit-stok-produk-{{$data->id_retailer_produk_stok}}" id="modal-edit-stok-produk-{{$data->id_retailer_produk_stok}}" data-toggle="modal" data-target="#editModal"><i class="fas fa-pencil-alt"></i></button>
          </td>
        </tr>
          @php
            $no++
          @endphp
          <!-- MODAL EDIT STOK PRODUK -->
          <div class="modal fade" id="modal-edit-stok-produk-{{$data->id_retailer_produk_stok}}">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Jumlah Stok</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="{{route('product.stock.update', [$data->id_retailer_produk, $data->id_retailer_produk_stok])}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" class="form-control" id="id_retailer_produk_stok" placeholder="id_retailer_produk_stok" value="{{$data->id_retailer_produk_stok}}" name="id_retailer_produk_stok">
                                  <div class="form-group row">
                                    <label for="exampleInputEmail1" class="col-sm-5 col-form-label">Stok</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Stok" name="stok" value="{{$data->jumlah}}" autofocus>
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
