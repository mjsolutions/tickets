<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RTM extends Model
{
    protected $table = 'roberto_palacio';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'impreso', 'forma_pago', 'folio', 'transaction_id','user'];
}
