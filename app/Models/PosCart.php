<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PosCart
 * 
 * @property int $id_pos_cart
 * @property int $id_retailer
 * @property int $id_retailer_operator
 *
 * @package App\Models
 */
class PosCart extends Model
{
	protected $table = 'pos_cart';
	protected $primaryKey = 'id_pos_cart';
	public $timestamps = false;

	protected $casts = [
		'id_retailer' => 'int',
		'id_retailer_operator' => 'int'
	];

	protected $fillable = [
		'id_retailer',
		'id_retailer_operator'
	];

	public function poscart()
  {
      return $this->hasMany('App\PosCart', 'id_pos_cart');
	}
	
	public function retailer()
  {
      return $this->belongsTo('App\Retailer', 'id_retailer');
  }

  public function retailer_operator()
  {
      return $this->belongsTo('App\RetailerOperator', 'id_retailer_operator');
  }
}
