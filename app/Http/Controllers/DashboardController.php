<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PesananPo;
use App\PesananPosDetail;
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
        if(@$_GET['range'] != '') {
            $range = $_GET['range'];
            $exp = explode(" - ", $range);
            $date1 = $exp[0];
            $date2 = $exp[1];
            
            $start = $this->date_convert($date1);
            $end = $this->date_convert($date2);
            $pesanan_detail = DB::select("SELECT * FROM pesanan_pos_detail 
                INNER JOIN pesanan_pos ON pesanan_pos_detail.kode_pesanan = pesanan_pos.kode_pesanan
                WHERE pesanan_pos.id_retailer = ".Auth::user()->id_retailer." AND
                (MID(tanggal,1,10) BETWEEN '$start' AND '$end')");
            
            $pesanan_group = DB::select("SELECT count(pesanan_pos.kode_pesanan) as jml, (MID(tanggal,1,7)) as bln FROM pesanan_pos_detail 
                INNER JOIN pesanan_pos ON pesanan_pos_detail.kode_pesanan = pesanan_pos.kode_pesanan
                WHERE pesanan_pos.id_retailer = ".Auth::user()->id_retailer." AND
                (MID(tanggal,1,10) BETWEEN '$start' AND '$end')
                GROUP BY (MID(tanggal,1,7))");
        } else {
            $pesanan_detail = DB::table('pesanan_pos_detail')
                ->join('pesanan_pos','pesanan_pos_detail.kode_pesanan','=','pesanan_pos.kode_pesanan')
                ->where('pesanan_pos.id_retailer', Auth::user()->id_retailer)
                ->get();

            $pesanan_group = DB::select("SELECT count(pesanan_pos.kode_pesanan) as jml, (MID(tanggal,1,7)) as bln FROM pesanan_pos_detail 
                INNER JOIN pesanan_pos ON pesanan_pos_detail.kode_pesanan = pesanan_pos.kode_pesanan
                WHERE pesanan_pos.id_retailer = ".Auth::user()->id_retailer."
                GROUP BY (MID(tanggal,1,7))");
        }

        // $pesanan = DB::table('pesanan_pos')
        //     ->where('id_retailer', '=',  Auth::user()->id_retailer)
        //     ->get();
        // dd($pesanan_detail);

        $count = count($pesanan_detail);
            
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
                'y' => $pesanan_group[$i]->bln,
                'a' => $pesanan_group[$i]->jml,
            ]);
        }
        $chart_data = $data;

        // dd($chart_data);
        return view('dashboard.dashboard', compact('count', 'mean', 'chart_data'));
    }
}
