<?php

namespace App\Managers;

use App\Models\Prod;
use Carbon\Carbon;

class ProdManager
{
    public function import(array $data)
    {
        $prod = Prod::create([
            'label' => $data['label'],
            'imageUrl' => $data['imageUrl'],
            'duration' => $data['duration'],
            'beatmaker_id' => $data['beatmaker_id'],
            'pack_id' => $data['pack_id'],
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);
        return $prod;
    }
}