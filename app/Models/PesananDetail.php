<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PesananDetail
 * 
 * @property int $id_pesanan_detail
 * @property string $kode_pesanan
 * @property int $id_retailer_produk
 * @property string $nama_produk
 * @property float $harga
 * @property int $jumlah
 * @property float $subtotal
 * @property int|null $rating
 *
 * @package App\Models
 */
class PesananDetail extends Model
{
	protected $table = 'pesanan_detail';
	protected $primaryKey = 'id_pesanan_detail';
	public $timestamps = false;

	protected $casts = [
		'id_retailer_produk' => 'int',
		'harga' => 'float',
		'jumlah' => 'int',
		'subtotal' => 'float',
		'rating' => 'int'
	];

	protected $fillable = [
		'kode_pesanan',
		'id_retailer_produk',
		'nama_produk',
		'harga',
		'jumlah',
		'subtotal',
		'rating'
	];
}
