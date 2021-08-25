<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RetailerProdukStok
 * 
 * @property int $id_retailer_produk_stok
 * @property int $id_retailer_produk
 * @property float $harga_beli
 * @property int $jumlah
 * @property int $terjual
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class RetailerProdukStok extends Model
{
	protected $table = 'retailer_produk_stok';
	protected $primaryKey = 'id_retailer_produk_stok';

	protected $casts = [
		'id_retailer_produk' => 'int',
		'harga_beli' => 'float',
		'jumlah' => 'int',
		'terjual' => 'int'
	];

	protected $fillable = [
		'id_retailer_produk',
		'harga_beli',
		'jumlah',
		'terjual'
	];
}
