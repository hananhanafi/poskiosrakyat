<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\RetailerProduk;
use App\Models\RetailerProdukStok;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $produk = DB::table('retailer_produk')->where('id_retailer', Auth::user()->id_retailer)->get();

        // if ($request->expectsJson()) {
        //     return response()->json($produk);
        // }
        // $produk = DB::table('retailer_produk')->get();

        if ($request->expectsJson()) {
            return response()->json($produk);
        }

        // menghitung stok produk
        // $jumlahstok = DB::table('pesanan_pos_detail')->join('retailer_produk','pesanan_pos_detail.jumlah','=','retailer_produk.stok')
        // ->where('id_retailer', Auth::user()->id_retailer)
        // ->get();

        // $totalstok = 0;

        // $jum = count($produk);
        // for ($i=0; $i<$jum; $i++){
        //     $totalstok-=$jumlahstok[$i]->stok;
        // }

        // if ($jum>0){
        //     $stok= $totalstok-$jum;
        // }else{
        //     $stok = 0;
        // }

        return view('product.product_index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $produk = DB::table('retailer_produk')->get();

        // if ($request->expectsJson()) {
        //     return response()->json($produk);
        // }
        // return view('product.produk-edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    public function update(Request $request)
    {
        $this->validate($request, [
            'id_retailer_produk' => 'required',
            'stok' => 'required',
        ]);
        // return $request;

        DB::beginTransaction();
        try {
            RetailerProduk::where('id_retailer_produk', $request->id_retailer_produk)
                ->update([
                    'stok' => $request->stok,
                ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'Update Tabel Produk Fail', 'messages' => $e->getMessage()]);
        }
        // return $request;
        DB::commit();

        return redirect()->intended('/product')->with('success', 'Berhasil mengubah stok produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showStock($id_retailer_produk)
    {
        $produk = DB::table('retailer_produk')->where('id_retailer_produk', $id_retailer_produk)->first();

        $stok = DB::table('retailer_produk_stok')->where('id_retailer_produk', $id_retailer_produk)->get();

        return view('product.product_stock_index', compact('produk', 'stok'));
    }

    public function addStock(Request $request, $id_retailer_produk)
    {
        $this->validate($request, [
            'stok' => 'required',
            'harga_beli' => 'required',
        ]);

        DB::beginTransaction();
        try {
            RetailerProduk::where('id_retailer_produk', $id_retailer_produk)
                ->increment('stok', $request->stok);
            RetailerProdukStok::create([
                'id_retailer_produk'    => $id_retailer_produk,
                'harga_beli'            => $request->harga_beli,
                'jumlah'                => $request->stok,
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'Update Tabel Produk Fail', 'messages' => $e->getMessage()]);
        }
        // return $request;
        DB::commit();

        return redirect()->intended('/product')->with('success', 'Berhasil menambah stok produk');
    }

    public function updateStock(Request $request, $id_retailer_produk, $id_retailer_produk_stok)
    {
        $this->validate($request, [
            'stok' => 'required'
        ]);

        DB::beginTransaction();
        try {
            $getJumlahBefore = RetailerProdukStok::where('id_retailer_produk_stok', $id_retailer_produk_stok)->first();

            if ($getJumlahBefore->jumlah < (int) $request->stok) {
                $selisih = $request->stok - $getJumlahBefore->jumlah;
                RetailerProduk::where('id_retailer_produk', $id_retailer_produk)
                    ->increment('stok', $selisih);
            } elseif ($getJumlahBefore->jumlah > (int) $request->stok) {
                $selisih = $getJumlahBefore->jumlah - $request->stok;
                RetailerProduk::where('id_retailer_produk', $id_retailer_produk)
                    ->decrement('stok', $selisih);
            }
            RetailerProdukStok::where('id_retailer_produk_stok', $id_retailer_produk_stok)->update([
                'jumlah'                => $request->stok,
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'Update Tabel Produk Fail', 'messages' => $e->getMessage()]);
        }
        // return $request;
        DB::commit();

        return redirect()->intended('/product')->with('success', 'Berhasil menambah stok produk');
    }
}
