<?php

namespace App\Managers;

use App\Models\Album;
use Carbon\Carbon;

class AlbumManager
{
    public function import(array $data)
    {
        if (isset($data['created_at'])) {

            $album = Album::create([
                'label' => $data['label'],
                'imageUrl' => $data['imageUrl'],
                'duration' => $data['duration'],
                'artist_id' => $data['artist_id'],
                'created_at' => $data['created_at'],
                'updated_at' => NULL
            ]);

        } else {

            $album = Album::create([
                'label' => $data['label'],
                'imageUrl' => $data['imageUrl'],
                'duration' => $data['duration'],
                'artist_id' => $data['artist_id'],
                'created_at' => Carbon::now(),
                'updated_at' => NULL
            ]);
        }
        return $album;
    }
}