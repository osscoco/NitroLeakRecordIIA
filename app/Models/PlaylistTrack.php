<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PlaylistTrack extends Model
{
	protected $table = 'playlists_tracks';

	protected $fillable = [
		'playlist_id',
        'track_id',
        'created_at',
        'updated_at'
	];

	public function playlist()
	{
		return $this->belongsTo('App\Models\Playlist', 'playlist_id', 'id');
	}

	public function track()
	{
		return $this->belongsTo('App\Models\Track', 'track_id', 'id');
	}
}