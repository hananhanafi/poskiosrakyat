@extends('layout.main')
@section('operator_aktif', 'active')

@section('navigation')
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Beranda</a></li>
      <li class="breadcrumb-item active">Petugas Kasir</li>
    </ol>
  </div>
@stop

@section('css')
	<!-- DataTables -->
  	<link rel="stylesheet" href="{{url('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  	<link rel="stylesheet" href="{{url('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  	<link rel="stylesheet" href="{{url('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('title')
	<h1>Petugas Kasir</h1>		
@stop
@section('content')
<!-- Main content -->
<div class="container-fluid">
	<div class="row">
    	<div class="col-12">
			<div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
              	<a href="{{url('/operator/create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Kasir</a>
                  <thead>
                  <tr>
                    <th width="5%">No.</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Kata Sandi</th>
                    <th width="15%">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    @foreach ($data as $value => $row)
                    <td align="center">{{$value+1}}</td>
                    <td>{{$row['nama']}}</td>
                    <td>{{$row['username']}}</td>
                    <td>********</td>
                    <td>
                    	<a href="{{url('/operator/show/'.$row['id_retailer_operator'])}}" class="btn btn-outline-success btn-sm"><i class="fas fa-eye"></i></a>

                    	<a href="{{url('/operator/edit/'.$row['id_retailer_operator'])}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>

                    	<button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal-hapus{{$row['id_retailer_operator']}}" id="hapus-operator"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <!-- <tr>
                    <th width="5%">No.</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th width="15%">Aksi</th>
                  </tr> -->
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    	</div>
	</div>
</div>

@foreach ($data as $value => $row)
<div class="modal fade" id="modal-hapus{{$row['id_retailer_operator']}}">
	<div class="modal-dialog">
	  <div class="modal-content bg-danger">
	    <div class="modal-header">
	      <h4 class="modal-title">Hapus Kasir</h4>
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
	      </button>
	    </div>
	    <div class="modal-body">
	      <p>Apakah Anda yakin ingin menghapus "{{$row['nama']}}"?</p>
	    </div>
	    <div class="modal-footer justify-content-between">
	      <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
	      <form action="{{url('/operator/hapus/'.$row['id_retailer_operator'])}}" method="POST" enctype="multipart/form-data">
	        @csrf
	        <button type="submit" class="btn btn-outline-light">Hapus</button>
	      </form>
	    </div>
	  </div>
	  <!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endforeach

@endsection
@section('js')
	<!-- DataTables  & Plugins -->
	<script src="{{url('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{url('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{url('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{url('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{url('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{url('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{url('adminlte/plugins/jszip/jszip.min.js')}}"></script>
	<script src="{{url('adminlte/plugins/pdfmake/pdfmake.min.js')}}"></script>
	<script src="{{url('adminlte/plugins/pdfmake/vfs_fonts.js')}}"></script>
	<script src="{{url('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
	<script src="{{url('adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
	<script src="{{url('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
	<!-- Page specific script -->
	<script>
	  $(function () {
	    $("#example1").DataTable({
	      "responsive": true, 
	      "lengthChange": false, 
	      "autoWidth": false,
	      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
	    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');	  });
	</script>

  <script type="text/javascript">
    var id;
    var id_to_delete;
    $(document).on('click', '.delete-modal', function() {
        $('.modal-title').text('Delete');
        $('#deleteModal').modal('show');
        id_to_delete = $(this).data('id');
    });
    $(document).on('click', '.delete', function() {
        $.ajax({
            type: 'GET',
            headers: {
              'Accept': 'application/json'
            },
            url: "{{ url('/operator/hapus/') }}"+id_to_delete,
            success: function(data) {
              if(data.status && data.status === 'failed'){
                toastr.error(data.message, 'Error', {timeOut: 5000});
              } else {
                toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
                // table_list_banner.ajax.reload();
              }
            }
        });
    });
</script>
@endsection