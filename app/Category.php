<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Categoria';
    protected $primaryKey = "categoria_id";


      /*para obtener la categoria padre de una subcategoria*/
    public function Categoria()
    {
        return  $this->belongsTo(Category::class);
    }

     /*para saber las subcategorias de una categoria padre*/			
     public function SubCategorias()
    {
    	return  $this->hasMany(Category::class,'subcategoria_de');
    }

    /*para obtener los productos de la categoria*/
    public function Producto(){
            return $this->belongsToMany(Category::class,'Categoria_Producto')
            ->withPivot('producto_id');
   }
}
