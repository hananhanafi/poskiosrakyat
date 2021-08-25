<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * Class RetailerOperator
 * 
 * @property int $id_retailer_operator
 * @property int $id_retailer
 * @property string $username
 * @property string $password
 * @property string $nama
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class RetailerOperator extends Authenticatable
{
	 use Notifiable;

     protected $guard = 'retailer_operator';

	use SoftDeletes;
	protected $table = 'retailer_operator';
	protected $primaryKey = 'id_retailer_operator';

	protected $casts = [
		'id_retailer' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'id_retailer',
		'username',
		'password',
		'nama'
	];
	
	public function poscart()
  {
      return $this->belongsTo('App\PosCart');
  }
}
