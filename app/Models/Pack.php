<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
	protected $table = 'packs';

	protected $fillable = [
		'label',
		'imageUrl',
        'duration',
		'beatmaker_id',
        'created_at',
        'updated_at'
	];

	public function prods()
	{
		return $this->hasMany('App\Models\Prod');
	}

    public function beatmaker()
	{
		return $this->belongsTo('App\Models\Beatmaker', 'beatmaker_id', 'id');
	}
}