<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" sizes="16x16" href="{{url('img/logokiosrakyat.png')}}">
  <title>POS | Kirana</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('adminlte/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{url('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  
    <!-- Google Font : Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,400&display=swap" rel="stylesheet">
  
  <!-- <link rel="stylesheet" type="text/css" href="{{url('adminlte/dist/css/sweetalert2.css')}}"> -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
  <link rel="stylesheet" href="{{url('css/custom.css')}}">

   @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  @include('layout.header')

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    @include('layout.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex">
            @yield('title') 
            @auth('retailer') <h1 class="ml-2">| Pemilik Toko</h1> @endauth
            @auth('retailer_operator') <h1 class="ml-2">| Kasir</h1> @endauth
          </div>
          @yield('navigation')
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      @include('flash-message')
        @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
     @include('layout.footer')
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('adminlte/dist/js/demo.js')}}"></script>
<script src="{{url('adminlte/dist/js/sweetalert2.min.js')}}"></script>
<script src="{{url('adminlte/dist/js/sweetalert2.js')}}"></script>
<script src="{{url('adminlte/dist/js/sweetalert2.all.js')}}"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
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
<!-- ChartJS -->
<script src="{{url('adminlte/plugins/chart.js/Chart.min.js')}}"></script>

@yield('js')
</body>
</html>