<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ConsumerAlamat
 * 
 * @property int $id_consumer_alamat
 * @property int $id_consumer
 * @property string $village_id
 * @property string $alamat
 * @property string $penerima
 * @property string $no_hp
 * @property string|null $latitude
 * @property string|null $longitude
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class ConsumerAlamat extends Model
{
	use SoftDeletes;
	protected $table = 'consumer_alamat';
	protected $primaryKey = 'id_consumer_alamat';

	protected $casts = [
		'id_consumer' => 'int'
	];

	protected $fillable = [
		'id_consumer',
		'village_id',
		'alamat',
		'penerima',
		'no_hp',
		'latitude',
		'longitude'
	];
}
