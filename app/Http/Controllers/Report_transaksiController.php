<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Report_transaksiController extends Controller
{
    public function index()
    {
        return view('transaksi.report_transaksi');
    }
}