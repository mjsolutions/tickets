<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franco_sma7 extends Model
{
    protected $table = 'franco_sma7';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'impreso', 'forma_pago', 'folio', 'transaction_id','user'];
}
