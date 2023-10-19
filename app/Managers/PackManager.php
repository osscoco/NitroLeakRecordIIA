<?php

namespace App\Managers;

use App\Models\Pack;
use Carbon\Carbon;

class PackManager
{
    public function import(array $data)
    {
        $pack = Pack::create([
            'label' => $data['label'],
            'imageUrl' => $data['imageUrl'],
            'duration' => $data['duration'],
            'beatmaker_id' => $data['beatmaker_id'],
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);
        return $pack;
    }
}