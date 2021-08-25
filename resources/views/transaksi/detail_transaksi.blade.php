@extends('layout.main')
@section('transaction_aktif', 'active')

@section('content')
<div class="row justify-content-center">
      <div class="col-6">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b>Detail Transaksi</b> </h3>
            </div>
          <div class="row">
              <div class="col-md-12">
                <div class="card-outline">
                  <div class="card-header justify-content-center">
                    <p>No Transaksi&nbsp;&nbsp;: 21PCY85</p>
                    <p>Waktu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 16 Oktober 2020, 13.43 WIB</br><p>Petugas Kasir&nbsp;: Afi</p></p>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card-outline">
                  <div class="card-header">
                    <h3 class="justify-content-center"></h3>
                    <p><b>149201257 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Beras &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10.000 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10.000
                    </b></p></br>
                    <p><b>149201257 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Beras &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10.000 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10.000
                    </b></p></br>
                    <p><b>149201257 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Beras &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10.000 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10.000
                    </b></p></br>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card-outline">
                  <div class="float-sm-right">
                    <p>Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 30.000 &nbsp;&nbsp;</p>
                    <p>Tunai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 50.000 &nbsp;&nbsp;</p>
                    <p>Kembali : 20.000</p>
                  </div>
                </div>
              </div>
            <!-- /.card -->
          </div>
      </div>
    </div>
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
</script>
@endsection