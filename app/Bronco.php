<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bronco extends Model
{
    protected $table = 'bronco';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'impreso', 'forma_pago', 'folio', 'transaction_id','user', 'fecha_venta'];
}
