<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PesananPo
 * 
 * @property string $kode_pesanan
 * @property int $id_retailer
 * @property int $id_retailer_operator
 * @property Carbon|null $tanggal
 *
 * @package App\Models
 */
class PesananPo extends Model
{
	protected $table = 'pesanan_pos';
	protected $primaryKey = 'kode_pesanan';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_retailer' => 'int',
		'id_retailer_operator' => 'int'
	];

	protected $dates = [
		'tanggal'
	];

	protected $fillable = [
		'id_retailer',
		'id_retailer_operator',
		'tanggal'
	];
}
