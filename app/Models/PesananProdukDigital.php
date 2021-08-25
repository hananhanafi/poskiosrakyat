<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PesananProdukDigital
 * 
 * @property string $kode_pesanan
 * @property int $id_consumer
 * @property int $id_voucher
 * @property string $penerima
 * @property int $id_produk_digital
 * @property float $harga_beli
 * @property float $harga_jual
 * @property float $potongan
 * @property float $total_bayar
 * @property Carbon|null $ordered_at
 * @property Carbon|null $confirmed_at
 * @property Carbon|null $processed_at
 * @property Carbon|null $completed_at
 * @property Carbon|null $cancelled_at
 * @property Carbon|null $cancelled_reason
 *
 * @package App\Models
 */
class PesananProdukDigital extends Model
{
	protected $table = 'pesanan_produk_digital';
	protected $primaryKey = 'kode_pesanan';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_consumer' => 'int',
		'id_voucher' => 'int',
		'id_produk_digital' => 'int',
		'harga_beli' => 'float',
		'harga_jual' => 'float',
		'potongan' => 'float',
		'total_bayar' => 'float'
	];

	protected $dates = [
		'ordered_at',
		'confirmed_at',
		'processed_at',
		'completed_at',
		'cancelled_at',
		'cancelled_reason'
	];

	protected $fillable = [
		'id_consumer',
		'id_voucher',
		'penerima',
		'id_produk_digital',
		'harga_beli',
		'harga_jual',
		'potongan',
		'total_bayar',
		'ordered_at',
		'confirmed_at',
		'processed_at',
		'completed_at',
		'cancelled_at',
		'cancelled_reason'
	];
}
