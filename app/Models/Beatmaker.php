<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Beatmaker extends Model
{
	protected $table = 'beatmakers';

	protected $fillable = [
		'label',
		'imageUrl',
        'created_at',
        'updated_at'
	];

	public function prods()
	{
		return $this->hasMany('App\Models\Prod');
	}

    public function packs()
	{
		return $this->hasMany('App\Models\Pack');
	}
}