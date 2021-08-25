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
<body style="background-image: url('img/loginpage 1.png'); background-repeat: no-repeat; background-size: 80%; background-position: center; margin-left: 15%; margin-top: 15%">

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline" style="transform: translateZ(0);">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Point of Sale</b></a>
      <a href="#" class="h1" style="color: #F47500"><b>KiosRakyat</b></a>
    </div>
    <div class="card-body">
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="no_tlp" class="form-control" placeholder="Nomor Telepon">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
            <!-- <button type="submit" class="btn btn-block" style="background-color: #F47500; color: #fff">Next</button> -->

            <a href="{{url('/login-otp-verif')}}" class="btn btn-block" style="background-color: #F47500; color: #fff">Submit</a>
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