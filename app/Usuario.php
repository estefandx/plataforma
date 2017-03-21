<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;
    protected $table = 'Usuario';
    protected $primaryKey = "usuario_id";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     // Se deben llenar estos tambien "ciudad_id", "perfil_id"
    protected $fillable = [
        "nombre", "apellido", "email",
        "password", "telefono",
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',"ciudad_id", "perfil_id",
    ];
}
