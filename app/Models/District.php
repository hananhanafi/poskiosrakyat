<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class District
 * 
 * @property string $district_id
 * @property string $regency_id
 * @property string $name
 *
 * @package App\Models
 */
class District extends Model
{
	protected $table = '_district';
	protected $primaryKey = 'district_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'regency_id',
		'name'
	];
}
