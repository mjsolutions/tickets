<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	protected $table = 'galleries';

	protected $fillable = ['type', 'route'];

	public function event()
	{
		return $this->belongsTo('App\Event');
	}
}
