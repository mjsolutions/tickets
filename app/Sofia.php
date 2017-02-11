<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sofia extends Model
{
    protected $table = 'sofia';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'confirmacion', 'forma_pago', 'folio', 'transaction_id','user'];
}
