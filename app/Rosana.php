<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rosana extends Model
{
    protected $table = 'rosana';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'impreso', 'forma_pago', 'folio', 'transaction_id','user', 'fecha_venta'];
}
