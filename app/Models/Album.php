<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	protected $table = 'albums';

	protected $fillable = [
		'label',
		'imageUrl',
        'duration',
        'created_at',
        'updated_at'
	];

	public function tracks()
	{
		return $this->hasMany(Track::class);
	}

    public function artist()
	{
		return $this->belongsTo(Artist::class);
	}
}