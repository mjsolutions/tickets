<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franco7 extends Model
{
    protected $table = 'franco7';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'impreso', 'forma_pago', 'folio', 'transaction_id','user'];
}
