<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";

    protected $fillable = ['name', 'date', 'online_sell', 'date_online_sell', 'description','tel','website','email'];

    public function gallery()
    {
    	return $this->hasMany('App\Gallery');
    }

    public function place()
    {
    	return $this->belongsTo('App\Place');
    }

    public function artists()
    {
    	return $this->belongsToMany('App\Artist')->withTimestamps();
    }
}
