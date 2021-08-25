<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('img/logokiosrakyat.png')}}">
    <title>LOGIN POS | KiosRakyat</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
        <div class="card card-outline">
            <div class="card-header text-center">
                <img src="{{url('img/logokiosrakyat.png')}}" alt="ICON+ Logo" class="brand-image img-circle"
                    style="opacity: .8"></br>
                <p class="h6"><b>Masuk Sebagai</b></p>
            </div>
            <div class="card-body">
                <a href="{{url('/login/retailer')}}" class="btn btn-app bg-success" style="width: 95%; height: 10%;">
                    <i class="fas fa-users"></i>
                    <h5>Pemilik Toko</h5>
                </a>
                <br>
                <a href="{{url('/login/retailer_operator')}}" class="btn btn-app bg-orange"
                    style="width: 95%; height: 10%">
                    <i class="fas fa-users"></i>
                    <h5>Kasir</h5>
                </a>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="{{url('adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('adminlte/dist/js/adminlte.min.js')}}"></script>
</body>

</html>
