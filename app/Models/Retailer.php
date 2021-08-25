<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Retailer
 * 
 * @property int $id_retailer
 * @property string $nama_toko
 * @property string $nama_pemilik
 * @property string|null $username
 * @property string|null $password
 * @property string $no_hp
 * @property string $village_id
 * @property string $alamat
 * @property string $latitude
 * @property string $longitude
 * @property string $file_foto_depan
 * @property string $file_foto_ktp
 * @property int|null $id_ref_bank
 * @property string|null $no_rekening
 * @property Carbon|null $open_at
 * @property Carbon|null $closed_at
 * @property bool $is_open
 * @property int $warning_count
 * @property Carbon|null $suspend_start
 * @property Carbon|null $suspend_end
 * @property int $suspend_count
 * @property float $saldo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $reviewed_at
 *
 * @package App\Models
 */
class Retailer extends Authenticatable
{
	use Notifiable;

	protected $guard = 'retailer';

	protected $table = 'retailer';
	protected $primaryKey = 'id_retailer';

	protected $casts = [
		'id_ref_bank' => 'int',
		'is_open' => 'bool',
		'warning_count' => 'int',
		'suspend_count' => 'int',
		'saldo' => 'float'
	];

	protected $dates = [
		'open_at',
		'closed_at',
		'suspend_start',
		'suspend_end',
		'reviewed_at'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nama_toko',
		'nama_pemilik',
		'username',
		'password',
		'no_hp',
		'village_id',
		'alamat',
		'latitude',
		'longitude',
		'file_foto_depan',
		'file_foto_ktp',
		'id_ref_bank',
		'no_rekening',
		'open_at',
		'closed_at',
		'is_open',
		'warning_count',
		'suspend_start',
		'suspend_end',
		'suspend_count',
		'saldo',
		'reviewed_at'
	];

	public function poscart()
  {
      return $this->belongsTo('App\PosCart');
  }
}
