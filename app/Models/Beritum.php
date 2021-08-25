<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Beritum
 * 
 * @property int $id_berita
 * @property string $judul
 * @property string $deskripsi
 * @property string|null $target
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Beritum extends Model
{
	use SoftDeletes;
	protected $table = 'berita';
	protected $primaryKey = 'id_berita';

	protected $fillable = [
		'judul',
		'deskripsi',
		'target'
	];
}
