<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class Transaksi extends Model
{
    use HasFactory;

    public static function getData($id = null)
    {
        if (Auth::guard('retailer')->check()) {
            $value = DB::table('pos_cart')->join('pos_cart_detail', 'pos_cart.id_pos_cart', '=', 'pos_cart_detail.id_pos_cart')
                ->join('retailer_produk', 'pos_cart_detail.id_retailer_produk', '=', 'retailer_produk.id_retailer_produk')
                ->where('pos_cart.id_retailer_operator', '=', NULL)
                ->where('pos_cart.id_retailer', Auth::user()->id_retailer)
                ->orderBy('id_pos_cart_detail', 'asc')
                ->select('pos_cart.id_pos_cart', 'id_pos_cart_detail', 'pos_cart_detail.id_retailer_produk', 'kode_produk', 'nama', 'harga_jual', 'harga_diskon', 'jumlah',)
                ->get();
        } elseif (Auth::guard('retailer_operator')->check()) {
            $value = DB::table('pos_cart')->join('pos_cart_detail', 'pos_cart.id_pos_cart', '=', 'pos_cart_detail.id_pos_cart')
                ->join('retailer_produk', 'pos_cart_detail.id_retailer_produk', '=', 'retailer_produk.id_retailer_produk')
                ->where('pos_cart.id_retailer_operator', Auth::user()->id_retailer_operator)
                ->where('pos_cart.id_retailer', Auth::user()->id_retailer)
                ->orderBy('id_pos_cart_detail', 'asc')
                ->select('pos_cart.id_pos_cart', 'id_pos_cart_detail', 'pos_cart_detail.id_retailer_produk', 'kode_produk', 'nama', 'harga_jual', 'harga_diskon', 'jumlah',)
                ->get();
        }

        return $value;
    }

    public static function insertData($data)
    {
        if (Auth::guard('retailer')->check()) {
            $pos_cart = DB::table('pos_cart')->where('id_retailer_operator', '=', NULL)
                ->where('id_retailer', Auth::user()->id_retailer)
                ->get();

            if ($pos_cart->count() == 0) {
                DB::beginTransaction();
                try {
                    $insertPosCart = DB::table('pos_cart')->insertGetId([
                        'id_retailer' => Auth::user()->id_retailer
                    ]);
                } catch (\Exception $e) {
                    DB::rollback();
                    return response()->json(['status' => 'Create Tabel pos_cart Fail', 'messages' => $e->getMessage()]);
                }

                DB::commit();

                $id_pos_cart = DB::table('pos_cart')->where('id_retailer_operator', '=', NULL)
                    ->where('id_retailer', Auth::user()->id_retailer)
                    ->select('id_pos_cart')
                    ->get();

                foreach ($id_pos_cart as $key => $row) {
                    $idPosCart = $row['id_pos_cart'];
                }

                DB::beginTransaction();
                try {
                    $insertPosCartDetail = DB::table('pos_cart_detail')->insertGetId([
                        'id_pos_cart' => $idPosCart,
                        'id_retailer_produk' => $data['idretailerproduk'],
                        'jumlah' => $data['jumlah'],
                    ]);
                } catch (\Exception $e) {
                    DB::rollback();
                    return response()->json(['status' => 'Create Tabel pos_cart_detail Fail', 'messages' => $e->getMessage()]);
                }

                DB::commit();

                return $insertPosCartDetail;
            } else {
                $id_pos_cart = DB::table('pos_cart')->where('id_retailer_operator', '=', NULL)
                    ->where('id_retailer', Auth::user()->id_retailer)
                    ->get();

                foreach ($id_pos_cart as $key) {
                    $idPosCart = $key->id_pos_cart;
                }

                $pos_cart_detail = DB::table('pos_cart_detail')->where('id_retailer_produk', $data['idretailerproduk'])
                    ->where('id_pos_cart', $idPosCart)
                    ->get();

                if ($pos_cart_detail->count() == 0) {
                    DB::beginTransaction();
                    try {
                        $insertPosCartDetail = DB::table('pos_cart_detail')->insertGetId([
                            'id_pos_cart' => $idPosCart,
                            'id_retailer_produk' => $data['idretailerproduk'],
                            'jumlah' => $data['jumlah'],
                        ]);
                    } catch (\Exception $e) {
                        DB::rollback();
                        return response()->json(['status' => 'Create Tabel pos_cart_detail Fail', 'messages' => $e->getMessage()]);
                    }

                    DB::commit();

                    return $insertPosCartDetail;
                } else {
                    return 0;
                }
            }

            // RETAILER OPERATOR
        } elseif (Auth::guard('retailer_operator')->check()) {
            $pos_cart = DB::table('pos_cart')->where('id_retailer_operator', Auth::user()->id_retailer_operator)
                ->where('id_retailer', Auth::user()->id_retailer)
                ->get();

            if ($pos_cart->count() == 0) {
                DB::beginTransaction();
                try {
                    $insertPosCart = DB::table('pos_cart')->insertGetId([
                        'id_retailer' => Auth::user()->id_retailer,
                        'id_retailer_operator' => Auth::user()->id_retailer_operator
                    ]);
                } catch (\Exception $e) {
                    DB::rollback();
                    return response()->json(['status' => 'Create Tabel pos_cart Fail', 'messages' => $e->getMessage()]);
                }

                DB::commit();

                $id_pos_cart = DB::table('pos_cart')->where('id_retailer_operator', Auth::user()->id_retailer_operator)
                    ->where('id_retailer', Auth::user()->id_retailer)
                    ->select('id_pos_cart')
                    ->get();

                foreach ($id_pos_cart as $key => $row) {
                    $idPosCart = $row['id_pos_cart'];
                }

                DB::beginTransaction();
                try {
                    $insertPosCartDetail = DB::table('pos_cart_detail')->insertGetId([
                        'id_pos_cart' => $idPosCart,
                        'id_retailer_produk' => $data['idretailerproduk'],
                        'jumlah' => $data['jumlah'],
                    ]);
                } catch (\Exception $e) {
                    DB::rollback();
                    return response()->json(['status' => 'Create Tabel pos_cart_detail Fail', 'messages' => $e->getMessage()]);
                }

                DB::commit();

                return $insertPosCartDetail;
            } else {
                $id_pos_cart = DB::table('pos_cart')->where('id_retailer_operator', Auth::user()->id_retailer_operator)
                    ->where('id_retailer', Auth::user()->id_retailer)
                    ->get();

                foreach ($id_pos_cart as $key) {
                    $idPosCart = $key->id_pos_cart;
                }

                $pos_cart_detail = DB::table('pos_cart_detail')->where('id_retailer_produk', $data['idretailerproduk'])
                    ->where('id_pos_cart', $idPosCart)
                    ->get();

                if ($pos_cart_detail->count() == 0) {
                    DB::beginTransaction();
                    try {
                        $insertPosCartDetail = DB::table('pos_cart_detail')->insertGetId([
                            'id_pos_cart' => $idPosCart,
                            'id_retailer_produk' => $data['idretailerproduk'],
                            'jumlah' => $data['jumlah'],
                        ]);
                    } catch (\Exception $e) {
                        DB::rollback();
                        return response()->json(['status' => 'Create Tabel pos_cart_detail Fail', 'messages' => $e->getMessage()]);
                    }

                    DB::commit();

                    return $insertPosCartDetail;
                } else {
                    return 0;
                }
            }
        }
    }

    public static function updateData($id, $data)
    {
        DB::table('pos_cart_detail')->where('id_pos_cart_detail', '=', $id)->update($data);
    }

    public static function deleteData($id = 0)
    {
        DB::table('pos_cart_detail')->where('id_pos_cart_detail', '=', $id)->delete();
    }

    public static function bayar()
    {
        if (Auth::guard('retailer')->check()) {
            $insertPesananPos = DB::table('pesanan_pos')->insertGetId([
                'id_retailer' => Auth::user()->id_retailer,
            ]);

            $pos_cart_detail = DB::table('pos_cart_detail')->join('pos_cart', 'pos_cart_detail.id_pos_cart', '=', 'pos_cart.id_pos_cart')
                ->join('retailer_produk', 'pos_cart_detail.id_retailer_produk', '=', 'retailer_produk.id_retailer_produk')
                ->where('id_retailer_operator', '=', NULL)
                ->where('pos_cart.id_retailer', Auth::user()->id_retailer)
                ->get();

            // dd($pos_cart_detail);
            $kode_pesanan = DB::table('pesanan_pos')
                ->where('id_retailer', Auth::user()->id_retailer)
                ->get()
                ->last();

            // dd($kode_pesanan);
            for ($i = 0; $i < count($pos_cart_detail); $i++) {
                if ($pos_cart_detail[$i]->harga_diskon != NULL) {
                    $harga = $pos_cart_detail[$i]->harga_diskon;
                } else {
                    $harga = $pos_cart_detail[$i]->harga_jual;
                }

                $sisaStok = $pos_cart_detail[$i]->jumlah;
                $stok = RetailerProdukStok::where([
                    'id_retailer_produk' => $pos_cart_detail[$i]->id_retailer_produk
                ])->orderBy('created_at')->get()->toArray();

                foreach ($stok as $pcd) {
                    if (($pcd['jumlah'] - $pcd['terjual']) > 0) {
                        if (($sisaStok - ($pcd['jumlah'] - $pcd['terjual'])) >= 0) {
                            RetailerProdukStok::where([
                                'id_retailer_produk_stok' => $pcd['id_retailer_produk_stok']
                            ])->update([
                                'terjual' => $pcd['jumlah']
                            ]);
                            RetailerProdukStokDetail::create([
                                'id_retailer_produk_stok'   => $pcd['id_retailer_produk_stok'],
                                'harga'                     => $pcd['harga_beli'],
                                'jumlah'                    => $pcd['jumlah'] - $pcd['terjual']
                            ]);
                            $sisaStok = $sisaStok - ($pcd['jumlah'] - $pcd['terjual']);
                        } else {
                            RetailerProdukStok::where([
                                'id_retailer_produk_stok' => $pcd['id_retailer_produk_stok']
                            ])->update([
                                'terjual' => abs($sisaStok)
                            ]);
                            RetailerProdukStokDetail::create([
                                'id_retailer_produk_stok'   => $pcd['id_retailer_produk_stok'],
                                'harga'                     => $pcd['harga_beli'],
                                'jumlah'                    => abs($sisaStok)
                            ]);
                            break;
                        }
                    }
                }

                DB::table('retailer_produk')->where([
                    'id_retailer_produk' => $pos_cart_detail[$i]->id_retailer_produk
                ])->decrement('stok', $pos_cart_detail[$i]->jumlah);
                DB::table('pesanan_pos_detail')->insert([
                    'kode_pesanan' => $kode_pesanan->kode_pesanan,
                    'id_retailer_produk' => $pos_cart_detail[$i]->id_retailer_produk,
                    'harga' => $harga,
                    'jumlah' => $pos_cart_detail[$i]->jumlah,
                    'subtotal' => $harga * $pos_cart_detail[$i]->jumlah,
                ]);
            }

            $list_cart = DB::table('pos_cart')->join('pos_cart_detail', 'pos_cart.id_pos_cart', '=', 'pos_cart_detail.id_pos_cart')
                ->where('id_retailer_operator', '=', NULL)
                ->where('pos_cart.id_retailer', Auth::user()->id_retailer)
                ->get();

            for ($k = 0; $k < count($list_cart); $k++) {
                DB::table('pos_cart_detail')->where('id_pos_cart_detail', $list_cart[$k]->id_pos_cart_detail)
                    ->delete();
            }

            // RETAILER OPERATOR
        } elseif (Auth::guard('retailer_operator')->check()) {
            $insertPesananPos = DB::table('pesanan_pos')->insertGetId([
                'id_retailer' => Auth::user()->id_retailer,
                'id_retailer_operator' => Auth::user()->id_retailer_operator,
            ]);

            $pos_cart_detail = DB::table('pos_cart_detail')->join('pos_cart', 'pos_cart_detail.id_pos_cart', '=', 'pos_cart.id_pos_cart')
                ->join('retailer_produk', 'pos_cart_detail.id_retailer_produk', '=', 'retailer_produk.id_retailer_produk')
                ->where('id_retailer_operator', Auth::user()->id_retailer_operator)
                ->where('pos_cart.id_retailer', Auth::user()->id_retailer)
                ->get();

            //dd($pos_cart_detail[0]);
            $kode_pesanan = DB::table('pesanan_pos')
                ->where('id_retailer', Auth::user()->id_retailer)
                ->get()
                ->last();

            //dd($kode_pesanan);
            for ($i = 0; $i < count($pos_cart_detail); $i++) {
                if ($pos_cart_detail[$i]->harga_diskon != NULL) {
                    $harga = $pos_cart_detail[$i]->harga_diskon;
                } else {
                    $harga = $pos_cart_detail[$i]->harga_jual;
                }

                $sisaStok = $pos_cart_detail[$i]->jumlah;
                $stok = RetailerProdukStok::where([
                    'id_retailer_produk' => $pos_cart_detail[$i]->id_retailer_produk
                ])->orderBy('created_at')->get()->toArray();

                foreach ($stok as $pcd) {
                    if (($pcd['jumlah'] - $pcd['terjual']) > 0) {
                        if (($sisaStok - ($pcd['jumlah'] - $pcd['terjual'])) >= 0) {
                            RetailerProdukStok::where([
                                'id_retailer_produk_stok' => $pcd['id_retailer_produk_stok']
                            ])->update([
                                'terjual' => $pcd['jumlah']
                            ]);
                            RetailerProdukStokDetail::create([
                                'id_retailer_produk_stok'   => $pcd['id_retailer_produk_stok'],
                                'harga'                     => $pcd['harga_beli'],
                                'jumlah'                    => $pcd['jumlah'] - $pcd['terjual']
                            ]);
                            $sisaStok = $sisaStok - ($pcd['jumlah'] - $pcd['terjual']);
                        } else {
                            RetailerProdukStok::where([
                                'id_retailer_produk_stok' => $pcd['id_retailer_produk_stok']
                            ])->update([
                                'terjual' => abs($sisaStok)
                            ]);
                            RetailerProdukStokDetail::create([
                                'id_retailer_produk_stok'   => $pcd['id_retailer_produk_stok'],
                                'harga'                     => $pcd['harga_beli'],
                                'jumlah'                    => abs($sisaStok)
                            ]);
                            break;
                        }
                    }
                }

                DB::table('retailer_produk')->where([
                    'id_retailer_produk' => $pos_cart_detail[$i]->id_retailer_produk
                ])->decrement('stok', $pos_cart_detail[$i]->jumlah);
                DB::table('pesanan_pos_detail')->insert([
                    'kode_pesanan' => $kode_pesanan->kode_pesanan,
                    'id_retailer_produk' => $pos_cart_detail[$i]->id_retailer_produk,
                    'harga' => $harga,
                    'jumlah' => $pos_cart_detail[$i]->jumlah,
                    'subtotal' => $harga * $pos_cart_detail[$i]->jumlah,
                ]);
            }

            $list_cart = DB::table('pos_cart')->join('pos_cart_detail', 'pos_cart.id_pos_cart', '=', 'pos_cart_detail.id_pos_cart')
                ->where('id_retailer_operator', Auth::user()->id_retailer_operator)
                ->where('pos_cart.id_retailer', Auth::user()->id_retailer)
                ->get();

            for ($k = 0; $k < count($list_cart); $k++) {
                DB::table('pos_cart_detail')->where('id_pos_cart_detail', $list_cart[$k]->id_pos_cart_detail)
                    ->delete();
            }
        }

        return $kode_pesanan->kode_pesanan;
    }

    public static function batal()
    {
        if (Auth::guard('retailer')->check()) {
            $list_cart = DB::table('pos_cart')->join('pos_cart_detail', 'pos_cart.id_pos_cart', '=', 'pos_cart_detail.id_pos_cart')
                ->where('id_retailer_operator', '=', NULL)
                ->where('pos_cart.id_retailer', Auth::user()->id_retailer)
                ->get();

            for ($k = 0; $k < count($list_cart); $k++) {
                DB::table('pos_cart_detail')->where('id_pos_cart_detail', $list_cart[$k]->id_pos_cart_detail)
                    ->delete();
            }

            // RETAILER OPERATOR
        } elseif (Auth::guard('retailer_operator')->check()) {
            $list_cart = DB::table('pos_cart')->join('pos_cart_detail', 'pos_cart.id_pos_cart', '=', 'pos_cart_detail.id_pos_cart')
                ->where('id_retailer_operator', Auth::user()->id_retailer_operator)
                ->where('pos_cart.id_retailer', Auth::user()->id_retailer)
                ->get();

            for ($k = 0; $k < count($list_cart); $k++) {
                DB::table('pos_cart_detail')->where('id_pos_cart_detail', $list_cart[$k]->id_pos_cart_detail)
                    ->delete();
            }
        }
    }
}
