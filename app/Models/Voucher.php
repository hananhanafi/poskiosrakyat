<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Voucher
 * 
 * @property int $id_voucher
 * @property Carbon|null $available_at
 * @property Carbon|null $expired_at
 * @property Carbon|null $used_at
 * @property string $label
 * @property int $nominal
 * @property float $percent
 * @property string|null $type
 * @property int|null $poin
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Voucher extends Model
{
	use SoftDeletes;
	protected $table = 'voucher';
	protected $primaryKey = 'id_voucher';

	protected $casts = [
		'nominal' => 'int',
		'percent' => 'float',
		'poin' => 'int'
	];

	protected $dates = [
		'available_at',
		'expired_at',
		'used_at'
	];

	protected $fillable = [
		'available_at',
		'expired_at',
		'used_at',
		'label',
		'nominal',
		'percent',
		'type',
		'poin'
	];
}
