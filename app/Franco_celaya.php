<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franco_celaya extends Model
{
    protected $table = 'franco_celaya';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'impreso', 'forma_pago', 'folio', 'transaction_id','user'];
}
