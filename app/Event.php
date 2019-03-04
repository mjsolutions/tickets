<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "eventos_manual";

    protected $fillable = ['tabla', 'artista', 'lugar', 'dirección', 'municipio','fecha','url_diagrama','url_imagen','url', 'online', 'status'];

    public function prices() {
        return $this->hasMany('App\EventPrice', 'id_evento');
    }

}
