<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notifikasi
 * 
 * @property int $id_notifikasi
 * @property string $target
 * @property int|null $target_id
 * @property string $judul
 * @property string $deskripsi
 * @property Carbon|null $created_at
 *
 * @package App\Models
 */
class Notifikasi extends Model
{
	protected $table = 'notifikasi';
	protected $primaryKey = 'id_notifikasi';
	public $timestamps = false;

	protected $casts = [
		'target_id' => 'int'
	];

	protected $fillable = [
		'target',
		'target_id',
		'judul',
		'deskripsi'
	];
}
