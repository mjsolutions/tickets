<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = "artists";

    protected $fillable = ['biography','img'];

    public function events()
    {
    	return $this->belongsToMany('App\Event')->withTimestamps();
    }
}
