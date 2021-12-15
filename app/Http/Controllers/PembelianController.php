<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RetailerProduk;
use App\Models\RetailerProdukStok;
use App\Models\PosCart;
use App\Models\PosCartDetail;
use App\Models\Transaksi;
use Auth;
use Illuminate\Support\Facades\Log;


class PembelianController extends Controller
{
    public function tgl_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pisah = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pisah[2] . ' ' . $bulan[(int)$pisah[1]] . ' ' . $pisah[0];
    }

    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');

        $tanggal = $this->tgl_indo(date('Y-m-d'));

        if (Auth::guard('retailer')->check()) {
            $kasir = Auth::user()->nama_pemilik;
        } else {
            $kasir = Auth::user()->nama;
        }

        return view('transaksi.pembelian', compact('tanggal', 'kasir'));
    }

    public static function save(Request $request)
    {
        // return $request;

        $purchase_products = json_decode($request->purchase_products);
        // var_dump($purchase_products);
        // error_log('purchase_products.2');
        // error_log(json_encode($purchase_products));
        
        foreach ($purchase_products as $product) {
            error_log('ssssss.');
            error_log(json_encode($product));
            error_log('id_retailer_produk.');
            error_log($product->id_retailer_produk);

            $id_retailer_produk = $product->id_retailer_produk;
            $harga_beli = $product->harga_beli;
            $jumlah = $product->jumlah;

            $checkProduk = RetailerProduk::where('id_retailer_produk', $id_retailer_produk)->first();
            if ($checkProduk->stok >= 0) {
                $totalstok = $checkProduk->stok + $jumlah;
                RetailerProdukStok::create([
                    'id_retailer_produk' => $id_retailer_produk,
                    'harga_beli' => $harga_beli,
                    'jumlah' => $jumlah,
                    'terjual' => 0
                ]);
                RetailerProduk::where('id_retailer_produk', $id_retailer_produk)
                    ->update([
                        'stok' => $totalstok,
                ]);
                
            } else {
                echo 'Stok produk ' . $checkProduk['nama'] . ' kurang.';
                return response()->json([
                    'message' => 'Stok produk ' . $checkProduk['nama'] . ' kurang.'
                ],500);
            }
        }
        return response()->json([
            'message' => 'Berhasil menyimpan pembelian barang.'
        ]);
        exit;
    }
}
