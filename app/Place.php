<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
	protected $table = "places";

	protected $fillable = ['name', 'diagram', 'map'];

	public function configs()
	{
		return $this->hasMany('App\Config');
	}
}
