<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
	protected $table = 'tracks';

	protected $casts = [
		'typeId' => 'int',
        'artistId' => 'int',
        'albumId' => 'int'
	];

	protected $fillable = [
		'label',
		'imageUrl',
        'duration',
        'typeId',
        'artistId',
        'albumId',
        'created_at',
        'updated_at'
	];

	public function type()
	{
		return $this->belongsTo(Type::class);
	}

    public function artist()
	{
		return $this->belongsTo(Artist::class);
	}

    public function album()
	{
		return $this->belongsTo(Album::class);
	}
}