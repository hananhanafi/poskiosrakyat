<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pengiriman
 * 
 * @property int $id_pengiriman
 * @property string|null $type
 * @property string $nama
 * @property int $countdown
 * @property Carbon $service_start
 * @property Carbon $service_end
 * @property int $biaya
 * @property string $satuan
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Pengiriman extends Model
{
	use SoftDeletes;
	protected $table = 'pengiriman';
	protected $primaryKey = 'id_pengiriman';

	protected $casts = [
		'countdown' => 'int',
		'biaya' => 'int'
	];

	protected $dates = [
		'service_start',
		'service_end'
	];

	protected $fillable = [
		'type',
		'nama',
		'countdown',
		'service_start',
		'service_end',
		'biaya',
		'satuan'
	];
}
