<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         // Creacion de tabla producto sin relaciones
         Schema::create("Producto", function(Blueprint $table){
           $table->increments("producto_id");
           $table->integer("usuario_id")->unsigned();
           $table->string("titulo", 255);
           $table->text("descripcion");
           $table->decimal("precio", 15, 2);
           $table->timestamps();

           //$table->foreign('usuario_id')->references('usuario_id')->on('users');
         });

     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         // Eliminación de la tabla producto
         Schema::dropIfExists("Producto");
     }
}
