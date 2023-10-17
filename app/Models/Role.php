<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $table = 'roles';

	protected $fillable = [
		'label',
        'created_at',
        'updated_at'
	];

	public function users()
	{
		return $this->hasMany(User::class);
	}
}