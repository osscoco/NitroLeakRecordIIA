<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
	protected $table = 'artists';

	protected $fillable = [
		'label',
		'imageUrl',
        'created_at',
        'updated_at'
	];

	public function tracks()
	{
		return $this->hasMany('App\Models\Track');
	}

    public function albums()
	{
		return $this->hasMany('App\Models\Album');
	}
}