<?php

namespace App\Managers;

use App\Models\Playlist;
use Carbon\Carbon;

class PlaylistManager
{
    public function import(array $data)
    {
        $playlist = Playlist::create([
            'label' => $data['label'],
            'duration' => $data['duration'],
            'user_id' => $data['user_id'],
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);
        return $playlist;
    }
}