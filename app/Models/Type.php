<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	protected $table = 'types';

	protected $fillable = [
		'label',
        'created_at',
        'updated_at'
	];

	public function tracks()
	{
		return $this->hasMany(Type::class);
	}
}