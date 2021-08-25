<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Village
 * 
 * @property string $village_id
 * @property string $district_id
 * @property string $name
 *
 * @package App\Models
 */
class Village extends Model
{
	protected $table = '_village';
	protected $primaryKey = 'village_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'district_id',
		'name'
	];
}
