<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
	protected $table = 'playlists';

	protected $fillable = [
		'label',
        'duration',
        'created_at',
        'updated_at'
	];

	public function tracks()
	{
		return $this->hasMany(Track::class);
	}
}