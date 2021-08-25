<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RefProduk
 * 
 * @property int $id_ref_produk
 * @property int $id_ref_kategori
 * @property int $id_ref_merk
 * @property string $nama
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class RefProduk extends Model
{
	use SoftDeletes;
	protected $table = 'ref_produk';
	protected $primaryKey = 'id_ref_produk';

	protected $casts = [
		'id_ref_kategori' => 'int',
		'id_ref_merk' => 'int'
	];

	protected $fillable = [
		'id_ref_kategori',
		'id_ref_merk',
		'nama'
	];
}
