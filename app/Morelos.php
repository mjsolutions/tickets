<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Morelos extends Model
{
    protected $table = 'morelos';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'confirmacion', 'forma_pago', 'folio', 'transaction_id','user'];
}
