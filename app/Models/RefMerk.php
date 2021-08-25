<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RefMerk
 * 
 * @property int $id_ref_merk
 * @property string $nama
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class RefMerk extends Model
{
	use SoftDeletes;
	protected $table = 'ref_merk';
	protected $primaryKey = 'id_ref_merk';

	protected $fillable = [
		'nama'
	];
}
