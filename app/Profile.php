<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'Perfil';
    protected $primaryKey = "perfil_id";

    /*para saber los usuarios de un tipo de perfil*/
    public function Usuarios()
    {
    	return  $this->hasMany(Usuario::class,'perfil_id');
    }

}
