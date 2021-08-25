<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConsumerCart
 * 
 * @property int $id_consumer
 * @property int $id_retailer_produk
 * @property int $jumlah
 *
 * @package App\Models
 */
class ConsumerCart extends Model
{
	protected $table = 'consumer_cart';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_consumer' => 'int',
		'id_retailer_produk' => 'int',
		'jumlah' => 'int'
	];

	protected $fillable = [
		'id_consumer',
		'id_retailer_produk',
		'jumlah'
	];
}
