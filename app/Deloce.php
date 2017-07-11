<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deloce extends Model
{
    protected $table = 'delgadillo_oceransky';

    protected $fillable = ['seccion', 'fila', 'asiento', 'status', 'impreso', 'forma_pago', 'folio', 'transaction_id','user'];
}
