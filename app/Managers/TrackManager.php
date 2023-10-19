<?php

namespace App\Managers;

use App\Models\Track;
use Carbon\Carbon;

class TrackManager
{
    public function import(array $data)
    {
        $track = Track::create([
            'label' => $data['label'],
            'imageUrl' => $data['imageUrl'],
            'duration' => $data['duration'],
            'artist_id' => $data['artist_id'],
            'album_id' => $data['album_id'],
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);
        return $track;
    }
}