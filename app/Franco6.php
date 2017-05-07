<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franco6 extends Model
{
    protected $table = 'franco6';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'impreso', 'forma_pago', 'folio', 'transaction_id','user'];
}
