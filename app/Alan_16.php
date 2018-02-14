<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alan_16 extends Model
{
    protected $table = 'alan_16';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'impreso', 'forma_pago', 'folio', 'transaction_id','user', 'fecha_venta'];
}
