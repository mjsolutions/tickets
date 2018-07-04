<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franco31 extends Model
{
    protected $table = 'franco31';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'impreso', 'forma_pago', 'folio', 'codigo_barras', 'transaction_id','user', 'fecha_venta'];
}
