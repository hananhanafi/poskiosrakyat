<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RetailerPengiriman
 * 
 * @property int $id_retailer
 * @property int $id_pengiriman
 * @property bool $is_available
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class RetailerPengiriman extends Model
{
	protected $table = 'retailer_pengiriman';
	protected $primaryKey = 'id_retailer';

	protected $casts = [
		'id_pengiriman' => 'int',
		'is_available' => 'bool'
	];

	protected $fillable = [
		'id_pengiriman',
		'is_available'
	];
}
