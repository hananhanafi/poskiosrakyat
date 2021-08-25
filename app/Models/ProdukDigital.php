<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProdukDigital
 * 
 * @property int $id_produk_digital
 * @property string $nama
 * @property float $harga_beli
 * @property float $harga_jual
 * @property int $stok
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class ProdukDigital extends Model
{
	use SoftDeletes;
	protected $table = 'produk_digital';
	protected $primaryKey = 'id_produk_digital';

	protected $casts = [
		'harga_beli' => 'float',
		'harga_jual' => 'float',
		'stok' => 'int'
	];

	protected $fillable = [
		'nama',
		'harga_beli',
		'harga_jual',
		'stok'
	];
}
