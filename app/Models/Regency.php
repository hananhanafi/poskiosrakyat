<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Regency
 * 
 * @property string $regency_id
 * @property string $province_id
 * @property string $name
 *
 * @package App\Models
 */
class Regency extends Model
{
	protected $table = '_regency';
	protected $primaryKey = 'regency_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'province_id',
		'name'
	];
}
