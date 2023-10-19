<?php

namespace App\Managers;

use App\Models\PlaylistTrack;
use Carbon\Carbon;

class PlaylistTrackManager
{
    public function import(array $data)
    {
        $playlistTrack = PlaylistTrack::create([
            'playlist_id' => $data['playlist_id'],
            'track_id' => $data['track_id'],
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);
        return $playlistTrack;
    }
}