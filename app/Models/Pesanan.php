<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pesanan
 * 
 * @property string $kode_pesanan
 * @property int $id_consumer
 * @property int|null $id_voucher
 * @property int $id_pengiriman
 * @property string|null $no_resi
 * @property string $village_id
 * @property string $alamat
 * @property string $penerima
 * @property string $no_hp
 * @property string|null $latitude
 * @property string|null $longitude
 * @property float $total_harga
 * @property float $ongkir
 * @property float $potongan
 * @property float $total_bayar
 * @property Carbon|null $ordered_at
 * @property Carbon|null $confirmed_at
 * @property Carbon|null $ondelivery_at
 * @property Carbon|null $delivered_at
 * @property Carbon|null $completed_at
 * @property Carbon|null $cancelled_at
 * @property string|null $cancelled_reason
 * @property int|null $rating
 * @property string|null $komentar
 *
 * @package App\Models
 */
class Pesanan extends Model
{
	protected $table = 'pesanan';
	protected $primaryKey = 'kode_pesanan';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_consumer' => 'int',
		'id_voucher' => 'int',
		'id_pengiriman' => 'int',
		'total_harga' => 'float',
		'ongkir' => 'float',
		'potongan' => 'float',
		'total_bayar' => 'float',
		'rating' => 'int'
	];

	protected $dates = [
		'ordered_at',
		'confirmed_at',
		'ondelivery_at',
		'delivered_at',
		'completed_at',
		'cancelled_at'
	];

	protected $fillable = [
		'id_consumer',
		'id_voucher',
		'id_pengiriman',
		'no_resi',
		'village_id',
		'alamat',
		'penerima',
		'no_hp',
		'latitude',
		'longitude',
		'total_harga',
		'ongkir',
		'potongan',
		'total_bayar',
		'ordered_at',
		'confirmed_at',
		'ondelivery_at',
		'delivered_at',
		'completed_at',
		'cancelled_at',
		'cancelled_reason',
		'rating',
		'komentar'
	];
}
