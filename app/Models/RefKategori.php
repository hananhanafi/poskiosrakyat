<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RefKategori
 * 
 * @property int $id_ref_kategori
 * @property string $nama
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class RefKategori extends Model
{
	use SoftDeletes;
	protected $table = 'ref_kategori';
	protected $primaryKey = 'id_ref_kategori';

	protected $fillable = [
		'nama'
	];
}
