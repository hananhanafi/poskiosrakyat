<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class PesananPosDetail
 * 
 * @property int $id_pesanan_pos_detail
 * @property int $kode_pesanan
 * @property int $id_retailer_produk
 * @property float $harga
 * @property int $jumlah
 * @property float $subtotal
 *
 * @package App\Models
 */
class PesananPosDetail extends Model
{
	protected $table = 'pesanan_pos_detail';
	protected $primaryKey = 'id_pesanan_pos_detail';
	public $timestamps = false;

	protected $casts = [
		'kode_pesanan' => 'int',
		'id_retailer_produk' => 'int',
		'harga' => 'float',
		'jumlah' => 'int',
		'subtotal' => 'float'
	];

	protected $fillable = [
		'kode_pesanan',
		'id_retailer_produk',
		'harga',
		'jumlah',
		'subtotal'
	];

}
