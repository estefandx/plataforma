<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Producto';
    protected $primaryKey = "producto_id";


    /*para saber los comentarios que tiene un producto*/
    public function Comentario()	 

    {
    	return  $this->hasMany(Commentary::class,'producto_id');
    }
	 
	  /*para saber las fotos que tiene un producto*/			
     public function Fotos()
    {
    	return  $this->hasMany(Photo::class,'producto_id');
    }

    public function Categorias(){
            return $this->belongsToMany(Category::class,'Categoria_Producto')
            ->withPivot('categoria_id');
   }


}
