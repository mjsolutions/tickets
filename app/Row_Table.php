<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Row_Table extends Model
{
    protected $table = "rows_tables";

    protected $fillable = ['init_num', 'final_num','name','section_id'];

    public function section()
    {
    	return $this->belongsTo('App\Section');
    }
}
