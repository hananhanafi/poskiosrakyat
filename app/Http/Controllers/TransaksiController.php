<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RetailerProduk;
use App\Models\PosCart;
use App\Models\PosCartDetail;
use App\Models\Transaksi;
use Auth;

class TransaksiController extends Controller
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

        return view('transaksi.transaksi1', compact('tanggal', 'kasir'));
    }

    public function loadData(Request $request)
    {
        $search = $request->search;

        if ($search == '') {
            $datas = RetailerProduk::select('id_retailer_produk', 'kode_produk', 'nama', 'harga_jual', 'deskripsi_produk', 'harga_diskon', 'foto', 'stok', 'created_at')
                ->orderby('nama', 'asc')
                ->orderby('created_at', 'asc')
                ->where('id_retailer', '=', Auth::user()->id_retailer)
                ->limit(5)
                ->get();
        } else {
            $datas = RetailerProduk::select('id_retailer_produk', 'kode_produk', 'nama', 'harga_jual', 'deskripsi_produk', 'harga_diskon', 'foto', 'stok', 'created_at')
                ->orderby('nama', 'asc')
                ->orderby('created_at', 'asc')
                ->orwhere('kode_produk', 'like', '%' . $search . '%')
                ->orwhere('nama', 'like', '%' . $search . '%')
                ->where('id_retailer', '=', Auth::user()->id_retailer)
                ->limit(5)
                ->get();
        }

        $response = array();
        foreach ($datas as $data) {
            if ($data->stok > 0) {
                if (isset($data->harga_diskon)) {
                    $response[] = array("price" => number_format($data->harga_jual, 0, ".", "."), "label" => $data->nama, "deskripsi_produk" => $data->deskripsi_produk, "diskon" => number_format($data->harga_diskon, 0, ".", "."), "idretailerproduk" => $data->id_retailer_produk, "kode_produk" => $data->kode_produk, "foto" => $data->foto);
                } else {
                    $response[] = array("price" => number_format($data->harga_jual, 0, ".", "."), "label" => $data->nama, "deskripsi_produk" => $data->deskripsi_produk, "diskon" => number_format($data->harga_jual, 0, ".", "."), "idretailerproduk" => $data->id_retailer_produk, "kode_produk" => $data->kode_produk, "foto" => $data->foto);
                }
            }
        }

        return response()->json($response);
        // dd($datas);
    }

    public static function getCart()
    {
        $cartData['data'] = Transaksi::getData();

        return json_encode($cartData);
        exit;
    }

    public static function addCart(Request $request)
    {
        // return $request;

        $idretailerproduk = $request->idretailerproduk;
        $namabarang = $request->namabarang;
        $hargabarang = $request->hargabarang;
        $deskripsiproduk = $request->deskripsiproduk;
        $hargadiskon = $request->hargadiskon;
        $jumlah = $request->jumlah;
        $foto = $request->foto;

        if ($idretailerproduk != '' && $jumlah != '') {
            $data = array("idretailerproduk" => $idretailerproduk, "jumlah" => $jumlah);

            $checkProduk = RetailerProduk::where('id_retailer_produk', $idretailerproduk)->first();
            if (($checkProduk->stok - (int) $jumlah) >= 0) {
                $value = Transaksi::insertData($data);
                if ($value) {
                    echo $value;
                } else {
                    echo 0;
                }
            } else {
                echo 'Stok produk ' . $checkProduk['nama'] . ' kurang.';
            }
        } else {
            echo 'Inputan tidak boleh kosong.';
        }

        exit;
    }

    // Update record
    public function updateCart(Request $request)
    {

        $jumlah = $request->input('jumlah');
        $editid = $request->input('editid');

        if ($jumlah != '' && $jumlah > 0) {
            $data = array('jumlah' => $jumlah);

            // Call updateData() method of Transaksi Model
            Transaksi::updateData($editid, $data);
            echo 'Sukses mengubah data';
        } else {
            echo 'Jumlah tidak boleh kosong';
        }
        exit;
    }

    public function deleteCart($id = 0)
    {
        // Call deleteData() method of Page Model
        Transaksi::deleteData($id);

        echo "Apakah Anda yakin menghapus data?";
        exit;
    }

    function bayar(Request $request)
    {
        $post = $request->except('_token');
        // return $post;
        $transaksi = Transaksi::bayar();

        $sale = DB::table('pesanan_pos')
            ->leftJoin('retailer_operator', 'pesanan_pos.id_retailer_operator', '=', 'retailer_operator.id_retailer_operator')
            ->where('kode_pesanan',  $transaksi)
            ->get();
        $sale_detail = DB::table('pesanan_pos_detail')
            ->where('kode_pesanan',  $transaksi)
            ->join('retailer_produk', 'pesanan_pos_detail.id_retailer_produk', '=', 'retailer_produk.id_retailer_produk')
            ->get();
        return view('invoice.print', compact('sale', 'sale_detail', 'post'));
    }

    function batal()
    {
        Transaksi::batal();

        return redirect()->route('transaksi.index');
    }

    function print($id)
    {
        // Auth::user()->id_retailer;
        $sale = DB::table('pesanan_pos')
            ->leftJoin('retailer_operator', 'pesanan_pos.id_retailer_operator', '=', 'retailer_operator.id_retailer_operator')
            ->where('kode_pesanan',  $id)
            ->get();
        $sale_detail = DB::table('pesanan_pos_detail')
            ->where('kode_pesanan',  $id)
            ->join('retailer_produk', 'pesanan_pos_detail.id_retailer_produk', '=', 'retailer_produk.id_retailer_produk')
            ->get();
        return view('invoice.print', compact('sale', 'sale_detail'));
    }
}
