<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Province
 * 
 * @property string $province_id
 * @property string $name
 *
 * @package App\Models
 */
class Province extends Model
{
	protected $table = '_province';
	protected $primaryKey = 'province_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
