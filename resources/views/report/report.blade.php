@extends('layout.main')
@section('report_aktif', 'active')

@section('navigation')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Beranda</a></li>
        <li class="breadcrumb-item active">Laporan</li>
    </ol>
</div>
@stop

@section('title')
<h1>Laporan</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel Transaksi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- Split button -->
                     <!-- /.card-body -->
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Transaksi</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Petugas Kasir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($laporan as $data)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$data->kode_pesanan}}</td>
                    <!-- <td>{{date ('l d-m-Y',strtotime($data->tanggal))}}</td> -->
                    <td>{{date ('d-m-Y',strtotime($data->tanggal))}}</td>
                    <td>{{date('H:i:s',strtotime($data->tanggal))}}</td>
                    <td>{{$data->nama}}</td>
                    <td style="text-align: center;">
                        <a href="{{ url('transaksi/print/'.$data->kode_pesanan) }}" target="_blank" class="btn btn-info btn-sm"><i class="fas fa-print"></i></a>
                        {{-- <button type="button" class="btn btn-outline-warning btn-sm" id="nomor_transaksi" data-toggle="modal" data-target="#editModal"><i class="fas fa-pencil-alt"></i></button> --}}
                    </td>
                </tr>
                @php
                    $no++
                @endphp
                @endforeach
                </tbody>
                <!-- <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nomor Transaksi</th>
                        <th>Hari, Tanggal</th>
                        <th>Waktu</th>
                        <th>Petugas Kasir</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot> -->
            </table>
        <!-- /.card-body -->

                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Petugas Kasir</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="frmData" method="POST" action="" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('GET') }}
                                <div class="modal-body">
                                    <input type="hidden" id="category_id" name="category_id" value="2">
                                    <div class="form-group">
                                        <label>Petugas Kasir</label>
                                        <input id="petugasKasirEdit" type="number" min="1" class="form-control"
                                            name="petugas_kasir" placeholder="0" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection

@section('js')<script>
     $(function () {
        $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": true,
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
