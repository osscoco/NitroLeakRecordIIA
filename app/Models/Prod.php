<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Prod extends Model
{
	protected $table = 'prods';

	protected $casts = [
        'beatmaker_id' => 'int',
        'pack_id' => 'int',
		'countListening' => 'int'
	];

	protected $fillable = [
		'label',
		'imageUrl',
        'duration',
		'countListening',
        'beatmaker_id',
        'pack_id',
        'created_at',
        'updated_at'
	];

    public function beatmaker()
	{
		return $this->belongsTo('App\Models\Beatmaker', 'beatmaker_id', 'id');
	}

    public function pack()
	{
		return $this->belongsTo('App\Models\Pack', 'pack_id', 'id');
	}
}