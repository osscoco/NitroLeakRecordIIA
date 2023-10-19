<?php

namespace App\Managers;

use App\Models\Artist;
use Carbon\Carbon;

class ArtistManager
{
    public function import(array $data)
    {
        $artist = Artist::create([
            'label' => $data['label'],
            'imageUrl' => $data['imageUrl'],
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);
        return $artist;
    }
}