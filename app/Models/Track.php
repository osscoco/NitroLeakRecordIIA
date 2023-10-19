<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
	protected $table = 'tracks';

	protected $casts = [
        'artist_id' => 'int',
        'album_id' => 'int',
		'created_at' => 'date'
	];

	protected $fillable = [
		'label',
		'imageUrl',
        'duration',
        'artist_id',
        'album_id',
        'created_at',
        'updated_at'
	];

    public function artist()
	{
		return $this->belongsTo('App\Models\Artist', 'artist_id', 'id');
	}

    public function album()
	{
		return $this->belongsTo('App\Models\Album', 'album_id', 'id');
	}

	public function playlists()
	{
		return $this->belongsToMany('App\Models\Playlist');
	}
}