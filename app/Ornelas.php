<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ornelas extends Model
{
    protected $table = 'ornelas';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'impreso', 'forma_pago', 'folio', 'transaction_id','user', 'fecha_venta'];
}
