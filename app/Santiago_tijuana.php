<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santiago_tijuana extends Model
{
    protected $table = 'santiago_tijuana';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'impreso', 'forma_pago', 'folio', 'transaction_id','user'];
}
