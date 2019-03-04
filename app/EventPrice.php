<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPrice extends Model
{
    protected $table = "aux_distribucion";

    protected $fillable = ['id_evento', 'nombre', 'nombre_impresion', 'precio', 'cxs'];

    public function event(){
    	return $this->belongsTo('App\Event', 'id_evento');
    }
}
