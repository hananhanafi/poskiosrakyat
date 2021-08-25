<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RetailerProduk
 * 
 * @property int $id_retailer_produk
 * @property int $id_ref_produk
 * @property int $id_retailer
 * @property string $kode_produk
 * @property string $nama
 * @property string $deskripsi_produk
 * @property string|null $foto
 * @property float $harga_jual
 * @property float|null $harga_diskon
 * @property int $stok
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class RetailerProduk extends Model
{
	use SoftDeletes;
	protected $table = 'retailer_produk';
	protected $primaryKey = 'id_retailer_produk';

	protected $casts = [
		'id_ref_produk' => 'int',
		'id_retailer' => 'int',
		'harga_jual' => 'float',
		'harga_diskon' => 'float',
		'stok' => 'int'
	];

	protected $fillable = [
		'id_ref_produk',
		'id_retailer',
		'kode_produk',
		'nama',
		'deskripsi_produk',
		'foto',
		'harga_jual',
		'harga_diskon',
		'stok'
	];
}
