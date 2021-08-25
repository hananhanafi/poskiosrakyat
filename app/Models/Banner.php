<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Banner
 * 
 * @property int $id_banner
 * @property string $deskripsi
 * @property string $filename
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Banner extends Model
{
	use SoftDeletes;
	protected $table = 'banner';
	protected $primaryKey = 'id_banner';

	protected $fillable = [
		'deskripsi',
		'filename'
	];
}
