            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12" align="center">
                  </br>
                  <h4>
                    <i class="fas fa-globe"></i> Kios Rakyat
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col" align="center">
                  <address>
                    <br>Yogyakarta<br>
                    <p>Telp: 083105284111</p></br>
                  </address>
                </div>
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b>
                  <br><b>Kasir: </b>Kasir2<br>
                  <b>Tanggal: </b> 31 Mei 2021 </label><br><br>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <!-- Table row -->
              <div class="row">
                <div class="col-5 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Kode Barang</th>
                      <th>Jumlah</th>
                      <th>Nama Barang</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>247925726</td>
                      <td>1</td>
                      <td>Beras</td>
                      <td>Rp 50.000</td>
                    </tr>
                    <tr>
                      <td>422568643</td>
                      <td>1</td>
                      <td>Roti</td>
                      <td>Rp 10.000</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

            
                <!-- /.col -->
                <div class="col-6">
                  <div class="table-responsive" align="center">
                    <table class="table">
                      <tr>
                      <br>
                        <th style="width:50%">Total:</th>
                        <td>Rp 75.000</td>
                      </tr>
                      
                      <tr>
                        <th>Bayar:</th>
                        <td>Rp 100.000</td>
                      </tr>
                      <tr>
                        <th>Kembali:</th>
                        <td>Rp 25.000</td>
                      </tr>
                      </br>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
              <!-- this row will not appear when printing -->
              <div class="row no-print" align="right">
                <div class="col-12">
                  <a href="{{url('/printStruk')}}" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Cetak</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Bayar
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('../../plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('../../plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('../../dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('../../dist/js/demo.js')}}"></script>
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
