<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Consumer
 * 
 * @property int $id_consumer
 * @property string $no_hp
 * @property string|null $email
 * @property string $nama
 * @property string|null $foto
 * @property string|null $jenis_kelamin
 * @property Carbon|null $tanggal_lahir
 * @property Carbon|null $suspended_until
 * @property string $referral_code
 * @property string|null $reset_code
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Consumer extends Model
{
	use SoftDeletes;
	protected $table = 'consumer';
	protected $primaryKey = 'id_consumer';

	protected $dates = [
		'tanggal_lahir',
		'suspended_until'
	];

	protected $fillable = [
		'no_hp',
		'email',
		'nama',
		'foto',
		'jenis_kelamin',
		'tanggal_lahir',
		'suspended_until',
		'referral_code',
		'reset_code'
	];
}
