<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PesananPo;
use App\PesananPosDetail;
use App\Models\Retailer;
use App\Models\RetailerOperator;
use Auth;

class DashboardController extends Controller
{
    function date_convert($tgl) {
        $date = explode("/", $tgl);
        $d = $date[0];
        $m = $date[1];
        $y = $date[2];
        $date_eng = $y."-".$d."-".$m;
        return $date_eng;
    }

    public function index()
    {
        $products = DB::select('SELECT * from retailer_produk');
        $operators = RetailerOperator::where('id_retailer', Auth::user()->id_retailer)->get();
        $sales = DB::table('pesanan_pos_detail')->sum('subtotal');

        date_default_timezone_set('Asia/Jakarta');

        $year = date('Y');
        $lastYearDate = date_create(strval($year-1).'-01-01');
        $nextYearDate = date_create(strval($year+1).'-01-01');

        $pesanan_detail = DB::table('pesanan_pos_detail')
            ->join('pesanan_pos','pesanan_pos_detail.kode_pesanan','=','pesanan_pos.kode_pesanan')
            ->where('pesanan_pos.id_retailer', Auth::user()->id_retailer)
            ->get();

        $pesanan_group = DB::table('pesanan_pos')
                            ->select(DB::raw(' count(pesanan_pos.kode_pesanan) as jml, DATE(pesanan_pos.tanggal) as tanggal'))
                            ->join('pesanan_pos_detail','pesanan_pos.kode_pesanan','=','pesanan_pos_detail.kode_pesanan')
                            // ->where('tanggal','<',$dateNow)
                            ->where('tanggal','>=',date_format($lastYearDate,'Y-m-d'))
                            ->where('tanggal','<',date_format($nextYearDate,'Y-m-d'))
                            ->groupBy('tanggal')
                            ->get();

        $count = count($pesanan_detail);
        $products_count = count($products);
        $operators_count = count($operators);
            
        $total = 0;
        for ($i=0; $i < $count; $i++){
            $total += $pesanan_detail[$i]->subtotal;
        }
        
        if ($count > 0) {
            $mean = $total/$count;
        } else {
            $mean = 0;
        }

        $data = [];
        for ($i=0; $i < count($pesanan_group); $i++) {
            array_push($data, [
                'date' => $pesanan_group[$i]->tanggal,
                'amount' => $pesanan_group[$i]->jml,
            ]);
        }
        $chart_data = $data;

        return view('dashboard.dashboard', compact('count', 'mean', 'chart_data', 'products_count', 'sales', 'operators_count'));
    }
}
