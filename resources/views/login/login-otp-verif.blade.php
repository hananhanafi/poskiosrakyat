  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" sizes="16x16" href="{{url('/img/logokiosrakyat.png')}}">
  <title>LOGIN POS | KiosRakyat</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{url('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('adminlte/dist/css/adminlte.min.css')}}">

</head>
<body class="hold-transition login-page">

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline" style="transform: translateZ(0);">
    <div class="card-header text-center">
      <a href="#" class="h2"><b>Masukkan Kode OTP</b></a>
    </div>
    <div class="card-body">
      <center><p>Kode OTP telah dikirimkan melalui SMS ke 08*******111</p></center>
      <form action="" method="post">
        <div class="row">
          <div class="col-2">
            <input type="text" class="form-control">
          </div>
          <div class="col-2">
            <input type="text" class="form-control">
          </div>
          <div class="col-2">
            <input type="text" class="form-control">
          </div>
          <div class="col-2">
            <input type="text" class="form-control">
          </div>
          <div class="col-2">
            <input type="text" class="form-control">
          </div>
          <div class="col-2">
            <input type="text" class="form-control">
          </div>
        </div>
        <br>
        <p><center>Tidak menerima kode OTP? <a href=""> Kirim Ulang </a>(00:30)</center></p>
        <br>
        <div class="row">
          <div class="col-12">
            <!-- <button type="submit" class="btn btn-block" style="background-color: #F47500; color: #fff">Next</button> -->

            <a href="{{url('/dashboard')}}" class="btn btn-block" style="background-color: #F47500; color: #fff">Verifikasi</a>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{url('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('adminlte/dist/js/adminlte.min.js')}}"></script>
</body>
</html>