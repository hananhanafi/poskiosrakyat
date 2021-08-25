<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PesananRule
 * 
 * @property int $id_pesanan_rules
 * @property string $nama
 * @property int $max_response_time
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class PesananRule extends Model
{
	use SoftDeletes;
	protected $table = 'pesanan_rules';
	protected $primaryKey = 'id_pesanan_rules';

	protected $casts = [
		'max_response_time' => 'int'
	];

	protected $fillable = [
		'nama',
		'max_response_time'
	];
}
