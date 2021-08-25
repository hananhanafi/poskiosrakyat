@extends('layout.main')
@section('report_aktif', 'active')

@section('navigation')
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Laporan Transaksi</li>
    </ol>
  </div>
@stop

@section('title')
	<h1>List Transaksi</h1>		
@stop
@section('content')
<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <!-- <h3 class="card-title">List Transaction </h3> -->
              <form>
                <td>
                <button type="button" class="btn btn-default float-right" id="daterange-btn">
                      <i class="far fa-calendar-alt"></i> All
                      <i class="fas fa-caret-down"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Yesterday</a>
                      <a class="dropdown-item" href="#">Last 7 Days </a>
                      <a class="dropdown-item" href="#">Last 30 Days </a>
                      <a class="dropdown-item" href="#">This Month </a>
                      <a class="dropdown-item" href="#">Last Month </a>
                      <a class="dropdown-item" href="#">Custom Range </a>
                    </div>
                <button type="button" class=" float-sm-right btn btn-block bg-gradient-warning col-md-2">Download</button>
                </td>
                <!-- <div class="form-group">
                  <label>Date range button:</label>
                  <div class="input-group">
                    <button type="button" class="btn btn-default float-right" id="daterange-btn">
                      <i class="far fa-calendar-alt"></i> Date range picker
                      <i class="fas fa-caret-down"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div> -->
                </form>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form class=" float-sm-right form-inline ml-4">
                    <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <!-- <th>id</th> -->
                  <th>No</th>
                  <th>Nama Transaksi</th>
                  <th>Hari, Tanggal</th>
                  <th>Waktu</th>
                  <th>Petugas Kasir</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>21PCY85</td>
                  <td>Jumat, 16 Oktober 2020 </td>
                  <td>13.43 WIB</td>
                  <td>Afi</td>
                  <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="/detail_transaksi" class="btn btn-outline-success btn-sm"><i class="fas fa-eye"></i></a>
                      </div>
                    </td>
                </tr>
                <tr>
                <td>2</td>
                  <td>78HSH81</td>
                  <td>Sabtu, 17 Oktober 2020 </td>
                  <td>10.14 WIB</td>
                  <td>Febi</td>
                  <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="/detail_transaksi" class="btn btn-outline-success btn-sm"><i class="fas fa-eye"></i></a>
                      </div>
                    </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>21SDF85</td>
                  <td>Minggu, 18 Oktober 2020 </td>
                  <td>12.33 WIB</td>
                  <td>Pinta</td>
                  <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="/detail_transaksi" class="btn btn-outline-success btn-sm"><i class="fas fa-eye"></i></a>
                      </div>
                    </td>
                </tr>
                <tr>
                <td>4</td>
                  <td>78GHD81</td>
                  <td>Senin, 20 Oktober 2020 </td>
                  <td>10.24 WIB</td>
                  <td>Siti</td>
                  <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="/detail_transaksi" class="btn btn-outline-success btn-sm"><i class="fas fa-eye"></i></a>
                      </div>
                    </td>
                </tr>
                </tbody>
                <!-- <tfoot>
                <tr>
                <th>No</th>
                  <th>Nama Transaksi</th>
                  <th>Hari, Tanggal</th>
                  <th>Waktu</th>
                  <th>Petugas Kasir</th>
                  <th>Aksi</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
@section('js')
<script>
$(function () {
  //   $('#example2').DataTable({
  //     "paging": true,
  //     "lengthChange": false,
  //     "searching": false,
  //     "ordering": true,
  //     "info": true,
  //     "autoWidth": false,
  //     "responsive": true,
  //   });
  // });
   //Date range as a button
   $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )
</script>
@endsection
