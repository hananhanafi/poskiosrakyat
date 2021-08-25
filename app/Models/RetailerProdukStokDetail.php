<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RetailerProdukStokDetail
 * 
 * @property int $id_retailer_produk_stok_detail
 * @property int $id_retailer_produk_stok
 * @property float $harga
 * @property int $jumlah
 *
 * @package App\Models
 */
class RetailerProdukStokDetail extends Model
{
	protected $table = 'retailer_produk_stok_detail';
	protected $primaryKey = 'id_retailer_produk_stok_detail';
	public $timestamps = false;

	protected $casts = [
		'id_retailer_produk_stok' => 'int',
		'harga' => 'float',
		'jumlah' => 'int'
	];

	protected $fillable = [
		'id_retailer_produk_stok',
		'harga',
		'jumlah'
	];
}
