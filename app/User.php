<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\CustomResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type','last_name','second_lname', 'birthdate', 'sex', 'city', 'state', 'country', 'address', 'colony', 'zip', 'tel', 'status', 'photo'
    ];    /**


     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Funciones para middlewares
    public function isSuper() {
        return $this->type === 'Super';
    }

    public function isPuntoDeVenta() {
        return $this->type === 'Punto de venta';
    }

    public function isCliente() {
        return $this->type === 'Cliente';
    }

    /*Overide*/
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPasswordNotification($token));
    }
}
