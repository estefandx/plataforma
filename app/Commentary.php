<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
    protected $table = 'Comentario';
    protected $primaryKey = "comentario_id";

    /*para saber el producto al que pertenece el comentario*/
    public function Producto()
    {
        return  $this->belongsTo(Product::class);
    }

     /*para saber el usuario  que hizo el comentario*/
    public function Usuario()
    {
        return  $this->belongsTo(Usuario::class);
    }
}
