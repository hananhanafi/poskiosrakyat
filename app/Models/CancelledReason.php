<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CancelledReason
 * 
 * @property int $id_cancelled_reason
 * @property string $deskripsi
 * @property string|null $type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class CancelledReason extends Model
{
	use SoftDeletes;
	protected $table = 'cancelled_reason';
	protected $primaryKey = 'id_cancelled_reason';

	protected $fillable = [
		'deskripsi',
		'type'
	];
}
