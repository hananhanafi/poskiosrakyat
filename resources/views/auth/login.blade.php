@extends('layouts.auth')

@section('page_title')
Login | POS Kios Rakyat
@endsection

@section('card_content')
                <p class="h6 mt-3 mb-4"><b>Masuk Sebagai</b></p>
                <a href="{{url('/retailer/login')}}" class="btn btn-brand-main bg-brand-main text-white rounded-64 w-100">
                    <h5 class="mb-0">Pemilik Kios</h5>
                </a>
                <div class="my-2 d-flex">
                    <div class="border m-auto" style="height:0;width:32%"></div>
                    <div class="mx-auto">Atau</div>
                    <div class="border m-auto" style="height:0;width:32%"></div>
                </div>
                <a href="{{url('/retailer_operator/login')}}" class="btn  btn-brand-secondary bg-brand-secondary text-white rounded-64 w-100">
                    <h5 class="mb-0">Kasir</h5>
                </a>
@endsection