@extends('layouts.auth')

@section('page_title')
Lupa Password - Verifikasi OTP | POS Kios Rakyat
@endsection

@section('card_content')
                <p class="h6 mt-3 mb-4"><b>Verifikasi OTP</b></p>
                <p class="mb-0">Masukkan Kode OTP yang telah dikirim</p>
                <p>ke nomor <b>+629123456789</b></p>
                @if ($error = $errors->first())
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endif
                <form action="{{ url('/retailer/forgot-password/set-password') }}" class="mb-3" method="post">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-2">
                            <input type="texr" min="0" max="9"  maxlength="1" class="form-control border rounded otp-input text-center pr-0" required>
                        </div>
                        <div class="col-2">
                            <input type="texr" min="0" max="9"  maxlength="1" class="form-control border rounded otp-input text-center pr-0" required>
                        </div>
                        <div class="col-2">
                            <input type="texr" min="0" max="9"  maxlength="1" class="form-control border rounded otp-input text-center pr-0" required>
                        </div>
                        <div class="col-2">
                            <input type="texr" min="0" max="9"  maxlength="1" class="form-control border rounded otp-input text-center pr-0" required>
                        </div>
                        <div class="col-2">
                            <input type="texr" min="0" max="9"  maxlength="1" class="form-control border rounded otp-input text-center pr-0" required>
                        </div>
                        <div class="col-2">
                            <input type="texr" min="0" max="9"  maxlength="1" class="form-control border rounded otp-input text-center pr-0" required>
                        </div>
                    </div>
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
                <p>Tidak menerima OTP?</p>
                <a href="{{url('')}}" class="btn text-primary">
                    Kirim ulang kode
                </a>
@endsection

@section('js')
<script>

    // kode otp input handler
    const inputList = $('form input.otp-input');
    inputList[0].focus();
    $( document ).ready(function() {
        inputList.each(function(index) {
            $(this).on("input",function() {
                if(!firstInputCheck($(this).val(),index)){
                    if(!beforeInputCheck($(this).val(),index)){
                        if(index<5){
                            inputList[index+1].focus();
                        }
                    }
                }
            })
        })
    });
    function firstInputCheck(userInput, index){
        if(inputList[0].value == ''){
            console.log("GADA");
            inputList[0].value = userInput;
            inputList[1].focus();

            inputList[index].value = '';
            return true;
        }
        return false;
    }
    function beforeInputCheck(userInput, index) {
        for(let i=0;i<index;i++){
            if(inputList[i].value == ''){
                inputList[i].value = userInput;
                inputList[index].value = '';
                inputList[i+1].focus();
                return true;
            }
        }
        return false;
    }
</script>
@endsection
