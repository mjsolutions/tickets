<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPrice extends Model
{
    protected $table = "aux_distribucion";

    protected $fillable = ['id_evento', 'tipo', 'nombre', 'precio', 'cxs'];

    public function event(){
    	return $this->belongsTo('App\Event', 'id_evento');
    }
}
