<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('img/logokiosrakyat.png')}}">
    <title>@yield('page_title','POS KiosRakyat')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
    <!-- Google Font : Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,400&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{url('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('adminlte/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{url('adminlte/dist/css/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{url('css/custom.css')}}">

    @yield('css')

</head>

<body class="">
    <div class="hold-transition login-page bg-cream">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="mb-4 text-center">
                <img src="{{secure_url('img/logo.png')}}" alt="ICON+ Logo" class="brand-image">
            </div>
            <div class="card card-outline shadow-main border-16 color-text ">
                <div class="card-body text-center">
                    @yield('card_content')
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{secure_url('adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{secure_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{secure_url('adminlte/dist/js/adminlte.min.js')}}"></script>
    <script src="{{secure_url('adminlte/dist/js/sweetalert2.min.js')}}"></script>
    <script>
        const button_loading = '<div class="spinner-border text-dark" role="status"> <span class="sr-only">Loading...</span></div>'
    </script>
    @yield('js')
</body>

</html>
