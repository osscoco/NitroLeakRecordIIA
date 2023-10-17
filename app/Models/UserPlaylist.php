<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class UserPlaylist extends Model
{
	protected $table = 'users_playlists';

	protected $casts = [
		'user_id' => 'int',
		'playlist_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'playlist_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function playlist()
	{
		return $this->belongsTo(Playlist::class);
	}
}