<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franco_guanajuato extends Model
{
    protected $table = 'franco_guanajuato';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'impreso', 'forma_pago', 'folio', 'transaction_id','user'];
}
