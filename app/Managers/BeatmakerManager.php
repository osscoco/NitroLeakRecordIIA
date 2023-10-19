<?php

namespace App\Managers;

use App\Models\Beatmaker;
use Carbon\Carbon;

class BeatmakerManager
{
    public function import(array $data)
    {
        $beatmaker = Beatmaker::create([
            'label' => $data['label'],
            'imageUrl' => $data['imageUrl'],
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);
        return $beatmaker;
    }
}