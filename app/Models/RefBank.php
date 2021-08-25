<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RefBank
 * 
 * @property int $id_ref_bank
 * @property string $kode_bank
 * @property string $nama
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class RefBank extends Model
{
	use SoftDeletes;
	protected $table = 'ref_bank';
	protected $primaryKey = 'id_ref_bank';

	protected $fillable = [
		'kode_bank',
		'nama'
	];
}
