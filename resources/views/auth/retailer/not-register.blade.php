@extends('layouts.auth')

@section('page_title')
POS Kios Rakyat
@endsection

@section('card_content')
                <p class="h6 mb-2"><b>Silahkan Daftar</b></p>
                <p class="h6 mb-3"><b>Melalui Aplikasi Kios Rakyat</b></p>
                <a href="https://play.google.com/store/apps/details?id=com.inofa.kiosrakyat" target="_blank" class="btn btn-block btn-brand-secondary rounded-64 text-white bg-brand-secondary">
                    <h5>Download Aplikasi</h5>
                </a>
                <a href="{{url('/retailer/register')}}" class="btn text-primary">
                    Sudah registrasi?
                </a>
@endsection
