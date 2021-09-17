@extends('layouts.auth')

@section('page_title')
Login Pemilik Kios | POS Kios Rakyat
@endsection

@section('card_content')
                <p class="h6 mt-3 mb-4"><b>Silahkan Masuk</b></p>
                @if ($error = $errors->first())
                  <div class="alert alert-danger">
                    {{ $error }}
                  </div>
                @endif
                <form action="{{ url('retailer/login') }}" method="post">
                  @csrf
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan Username" id="username" name="username" :value="old('username')" required autofocus>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Masukkan Password" id="password" name="password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="position-absolute input-icon-left btn btn-show-password">
                        <i class="fas fa-eye"></i>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-12">
                      <button type="submit" class="btn btn-block btn-brand-main rounded-64 text-white bg-brand-main">
                        <h5>Masuk</h5>
                      </button>

                      <!-- <a href="{{url('/dashboard')}}" class="btn btn-block" style="background-color: #F47500; color: #fff">Login</a> -->
                    </div>
                    <!-- /.col -->
                  </div>
                </form>
                
                <a href="{{url('/retailer/forgot-password')}}" class="btn text-primary">
                    Lupa Password
                </a>
                <div class="my-2 d-flex">
                    <div class="border m-auto" style="height:0;width:32%"></div>
                    <div class="mx-auto">Atau</div>
                    <div class="border m-auto" style="height:0;width:32%"></div>
                </div>
                <a href="{{url('/retailer/register')}}" class="btn  btn-brand-secondary bg-brand-secondary text-white rounded-64 w-100">
                    <h5 class="mb-0">Buat Akun</h5>
                </a>
@endsection

@section('js')
<script>
$( document ).ready(function() {
  var isPasswordShow = false;
  $('.btn-show-password').click(function() {
    if(isPasswordShow){
      $(this).find('i').addClass("fa-eye")
      $(this).find('i').removeClass("fa-eye-slash")
      $('input[name="password"]').prop("type", "password")
    }else {
      $(this).find('i').removeClass("fa-eye")
      $(this).find('i').addClass("fa-eye-slash")
      $('input[name="password"]').prop("type", "text")
    }
    isPasswordShow = !isPasswordShow;
  })
});


@if (session('success-set-password'))
    // swal({{ session('alert') }});
    console.log("successsss");
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        // text: 'Akun berhasil dibuat!',
        showConfirmButton: false,
        html:`<p>Berhasil memperbarui password.</p><button onclick="Swal.close()" class="btn btn-block btn-brand-secondary rounded-64 text-white bg-brand-secondary"><h5>Oke</h5>`
    })
@endif
@if (session('success-set-account'))
    // swal({{ session('alert') }});
    console.log("successsss");
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        // text: 'Akun berhasil dibuat!',
        showConfirmButton: false,
        html:`<p>Berhasil membuat akun.</p><button onclick="Swal.close()" class="btn btn-block btn-brand-secondary rounded-64 text-white bg-brand-secondary"><h5>Oke</h5>`
    })
@endif

</script>
@endsection