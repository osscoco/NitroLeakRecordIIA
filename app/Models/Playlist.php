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
		'user_id',
        'created_at',
        'updated_at'
	];

	public function tracks()
	{
		return $this->belongsToMany('App\Models\Track');
	}

	public function user()
	{
		return $this->belongsTo('App\Models\User', 'user_id', 'id');
	}
}