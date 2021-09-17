@extends('layouts.auth')

@section('page_title')
Daftar Pemilik Kios | POS Kios Rakyat
@endsection

@section('card_content')
                <div class="register-form">
                    <p class="h6 mt-3 mb-4"><b>Silahkan Daftar</b></p>
                    <!-- <div class="alert alert-danger hide" id="error-message"></div>
                    <div class="alert alert-success hide" id="sent-message"></div> -->
                    @if ($error = $errors->first())
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endif
                    <form class="mb-3">
                        @csrf
                        <div class="input-group mb-3 position-relative">
                            <div class="position-absolute z-99 my-auto top-0 bottom-0 pt-2 pb-2 pl-2">+62</div>
                            <input type="text" class="form-control pl-5" placeholder="Masukkan Nomor HP" id="phone-number" name="phone-number" :value="old('phone-number')" autofocus>
                            @error('phone-number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div id="recaptcha-container"></div>
                        <br>
                        <div class="row">
                            <div class="col-12">
                            <button type="button" onclick="phoneNumberCheck();" class="btn btn-block btn-brand-secondary rounded-64 text-white bg-brand-secondary btn-send-otp" disabled>
                                <h5>Kirim</h5>
                            </button>

                            <!-- <a href="{{url('/dashboard')}}" class="btn btn-block" style="background-color: #F47500; color: #fff">Login</a> -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <p>Pastikan nomor HP sudah terregistrasi</p>
                    <a href="{{url('/retailer/not-register')}}" class="btn text-primary">
                        Belum teregistrasi?
                    </a>
                </div>
                <div class="otp-verify-form d-none">
                    <p class="h6 mt-3 mb-4"><b>Verifikasi OTP</b></p>
                    <p class="mb-0">Masukkan Kode OTP yang telah dikirim</p>
                    <p>ke nomor <b><span class="phone-number">+629123456789</span></b></p>
                    @if ($error = $errors->first())
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endif
                    <form class="mb-3">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-2">
                                <input type="text" min="0" max="9"  maxlength="1" class="form-control border rounded otp-input text-center pr-0" required>
                            </div>
                            <div class="col-2">
                                <input type="text" min="0" max="9"  maxlength="1" class="form-control border rounded otp-input text-center pr-0" required>
                            </div>
                            <div class="col-2">
                                <input type="text" min="0" max="9"  maxlength="1" class="form-control border rounded otp-input text-center pr-0" required>
                            </div>
                            <div class="col-2">
                                <input type="text" min="0" max="9"  maxlength="1" class="form-control border rounded otp-input text-center pr-0" required>
                            </div>
                            <div class="col-2">
                                <input type="text" min="0" max="9"  maxlength="1" class="form-control border rounded otp-input text-center pr-0" required>
                            </div>
                            <div class="col-2">
                                <input type="text" min="0" max="9"  maxlength="1" class="form-control border rounded otp-input text-center pr-0" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                            <button type="button" onclick="otpVerify()" class="btn btn-block btn-brand-secondary rounded-64 text-white bg-brand-secondary">
                                <h5>Kirim</h5>
                            </button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <p>Tidak menerima OTP?</p>
                    <a href="{{url('/retailer/register')}}" class="btn text-primary">
                        Kirim ulang kode
                    </a>
                </div>
                <!-- form for verified otp and redirect to set account page with user data -->
                <form id="form-hidden-phone-number" action="{{ url('retailer/otp-verified') }}" method="get">
                    @csrf
                    <input type="hidden" id="hidden-phone-number" name="phone_number">
                </form>
@endsection

@section('js')
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyCA5VUdxYxKyf4g5iafOOkuZXhylKrvAXg",
        authDomain: "poskiosrakyat-dev.firebaseapp.com",
        projectId: "poskiosrakyat-dev",
        storageBucket: "poskiosrakyat-dev.appspot.com",
        messagingSenderId: "574316283268",
        appId: "1:574316283268:web:3c37f3719da3f038f609d1",
        measurementId: "G-0VJ38WX54E"
    };
    firebase.initializeApp(firebaseConfig);
</script>
<script type="text/javascript">

    window.onload=function () {
        render();
    };

    function render() {
        window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container',{
        // 'size': 'invisible',
        'callback': (response) => {
            // reCAPTCHA solved, allow signInWithPhoneNumber.
            // phoneNumberCheck();
            $('.btn-send-otp').removeAttr('disabled');
        }});
        recaptchaVerifier.render();
    }
    
    function phoneNumberCheck() {
        const phoneNumber = document.getElementById('phone-number').value;
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        // $('.btn-send-otp').html(button_loading);
        $('.btn-send-otp').prop('disabled',true);
        
        $.ajax({
            url: '/retailer/register/phone',
            type: 'post',
            data: {
                _token: CSRF_TOKEN,
                phone_number: phoneNumber,
            },
            success: function (response) {
                // fetchRecords();
                // alert(response);
                console.log("user",response);
                const user = response.data;
                firebaseSendOTP(phoneNumber);
            },
            error: function (response) {
                // fetchRecords();
                // alert(response);
                console.log("error res",response)
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    // text: 'Akun berhasil dibuat!',
                    showConfirmButton: false,
                    html:'<p>Nomor HP belum terdaftar </br> Silahkan daftar melalui aplikasi Kios Rakyat </p><a href="https://play.google.com/store/apps/details?id=com.inofa.kiosrakyat" target="_blank" class="btn btn-block btn-brand-main rounded-64 text-white bg-brand-main"><h5>Download Aplikasi</h5></a><button onclick="Swal.close()" class="btn btn-block btn-brand-secondary rounded-64 text-white bg-brand-secondary"><h5>Oke</h5>'
                })
                $('.btn-send-otp').removeAttr('disabled');
            }
        });
    }
        
    function firebaseSendOTP(phoneNumber) {
        const appVerifier = window.recaptchaVerifier;
        firebase.auth().signInWithPhoneNumber("+62"+phoneNumber, appVerifier)
        .then((confirmationResult) => {
            // SMS sent. Prompt user to type the code from the message, then sign the
            // user in with confirmationResult.confirm(code).
            window.confirmationResult = confirmationResult;
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                // text: 'Akun berhasil dibuat!',
                showConfirmButton: false,
                html:'<p>Kode OTP berhasil dikirim</p><button onclick="Swal.close()" class="btn btn-block btn-brand-secondary rounded-64 text-white bg-brand-secondary"><h5>Oke</h5></button>'
            }).then(()=>{
                console.log("lanjut")
                $('.register-form').addClass('d-none');
                $('.otp-verify-form').removeClass('d-none');
                otpInputHandler();
                $('.phone-number').html('+62'+phoneNumber);
                $('#hidden-phone-number').val(phoneNumber);
            })
        }).catch((error) => {
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                // text: 'Akun berhasil dibuat!',
                showConfirmButton: false,
                // html:'<p>'+error.message+'</p><button onclick="Swal.close()" class="btn btn-block btn-brand-secondary rounded-64 text-white bg-brand-secondary"><h5>Oke</h5>'
                html:'<p>Gagal mengirim kode OTP<br>Pastikan nomor hp anda benar</p><button onclick="Swal.close()" class="btn btn-block btn-brand-secondary rounded-64 text-white bg-brand-secondary"><h5>Oke</h5>'
            })
        });
    }

    function otpVerify() {
        // var code = document.getElementById('otp-code').value;
        var code = getInputOTP();
        console.log("code", code);
        confirmationResult.confirm(code).then(function (result) {
            // User signed in successfully.
            var user = result.user;

            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                // text: 'Akun berhasil dibuat!',
                showConfirmButton: false,
                html:'<p>Berhasul memasukkan kode OTP</p><button onclick="Swal.close()" class="btn btn-block btn-brand-secondary rounded-64 text-white bg-brand-secondary"><h5>Oke</h5>'
            })
            $('#form-hidden-phone-number').submit();

        }).catch(function (error) {
            // document.getElementById("error-message").innerHTML = error.message;
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                // text: 'Akun berhasil dibuat!',
                showConfirmButton: false,
                html:'<p>'+error.message+'</p><button onclick="Swal.close()" class="btn btn-block btn-brand-secondary rounded-64 text-white bg-brand-secondary"><h5>Oke</h5>'
            })
        });
    }

    
    // kode otp input handler
    const inputList = $('form input.otp-input');
    function otpInputHandler() {
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
    }
    function getInputOTP() {
        let otp ='';
        inputList.each(function() {
            otp = otp+$(this).val();
        })
        return otp
    }
    function firstInputCheck(userInput, indexInput){
        if(inputList[0].value == ''){
            console.log("GADA");
            inputList[0].value = userInput;
            inputList[1].focus();

            inputList[indexInput].value = '';
            return true;
        }
        return false;
    }
    function beforeInputCheck(userInput, indexInput) {
        for(let i=0;i<indexInput;i++){
            if(inputList[i].value == ''){
                inputList[i].value = userInput;
                inputList[indexInput].value = '';
                inputList[i+1].focus();
                return true;
            }
        }
        return false;
    }
</script>
@endsection
