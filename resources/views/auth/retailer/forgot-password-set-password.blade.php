@extends('layouts.auth')

@section('page_title')
Lupa Password - Atur Akun | POS Kios Rakyat
@endsection

@section('card_content')
                <p class="h6 mt-3 mb-4"><b>Atur Akun Anda</b></p>
                @if ($error = $errors->first())
                  <div class="alert alert-danger">
                    {{ $error }}
                  </div>
                @endif
                <form action="{{ url('/retailer/forgot-password/update') }}" method="post">
                  @csrf
                  <input type="hidden" class="form-control" id="nama" placeholder="Nama" value="{{$user->id_retailer}}" name="id_retailer">
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
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Masukkan ulang password" id="password_confirmation" name="password_confirmation" required>
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-12">
                      <button type="submit" class="btn btn-block btn-brand-secondary rounded-64 text-white bg-brand-secondary">
                        <h5>Kirim</h5>
                      </button>

                      <!-- <a href="{{url('/dashboard')}}" class="btn btn-block" style="background-color: #F47500; color: #fff">Login</a> -->
                    </div>
                    <!-- /.col -->
                  </div>
                </form>
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

function showModalSuccessRegister() {
  Swal.fire({
    icon: 'success',
    title: 'Setel Ulang Password',
    // text: 'Akun berhasil dibuat!',
    showConfirmButton: false,
    html:'<p>Password berhasil diubah!</p> <button onclick="Swal.close()" class="btn btn-block btn-brand-secondary rounded-64 text-white bg-brand-secondary"><h5>Oke</h5>'
  })
}

</script>
@endsection