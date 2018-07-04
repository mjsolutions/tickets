<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franco01 extends Model
{
    protected $table = 'franco01';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'impreso', 'forma_pago', 'folio', 'codigo_barras', 'transaction_id','user', 'fecha_venta'];
}
