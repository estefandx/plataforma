<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'Foto';
    protected $primaryKey = "foto_id";
    public     $timestamps = false;

    /*para saber el producto al que pertenece la foto*/
     public function Producto()
    {
        return  $this->belongsTo(Product::class);
    }
}
