<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PosCartDetail
 * 
 * @property int $id_pos_cart_detail
 * @property int $id_pos_cart
 * @property int $id_retailer_produk
 * @property int $jumlah
 *
 * @package App\Models
 */
class PosCartDetail extends Model
{
	protected $table = 'pos_cart_detail';
	protected $primaryKey = 'id_pos_cart_detail';
	public $timestamps = false;

	protected $casts = [
		'id_pos_cart' => 'int',
		'id_retailer_produk' => 'int',
		'jumlah' => 'int'
	];

	protected $fillable = [
		'id_pos_cart',
		'id_retailer_produk',
		'jumlah'
	];
}
