<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table ="configs";

    protected $fillable = ['num_config','name','place_id'];

    public function place()
    {
    	return $this->belongsTo('App\Place');
    }

    public function sections()
    {
    	return $this->belongsToMany('App\Section')->withTimestamps();
    }
}
