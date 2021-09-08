<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class StrukController extends Controller
{
    public function index()
    {
    
        return view('invoice.struk');
    }

    // public function invoice($id){
    //     $data = Transaksi::find($id);
        
    //     $pdf =PDF::loadVieww('struk',  compact('data'));

    //     return $pdf->download('struk_'.$id.'.pdf');
    // }

    public static function getCart(){
        $cartData['data'] = Transaksi::getData();

        return json_encode($cartData);
        exit;
    }

}
