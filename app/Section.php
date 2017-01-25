<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = "sections";

    protected $fillable = ['name','places'];

    public function configs()
    {
    	return $this->belongsToMany('App\Config')->withTimestamps();
    }

    public function rows_tables()
    {
    	return $this->hasMany('App\Row_Table');
    }

}
