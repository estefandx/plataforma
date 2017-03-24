<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'Mensaje';
    protected $primaryKey = "mensaje_id";


    //referencia de la foranea del usuaro origen y el usuario destino	
     public function Usuario()
    {
        return  $this->belongsTo(Profile::class);
    }

}
