<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         // Creacion de tabla producto sin relaciones
         Schema::create("Usuario", function(Blueprint $table){
           $table->increments("usuario_id");
           //$table->string("nombre_usuario");
           $table->string("nombre");
           $table->string("apellido");
           $table->string("email")->unique();
           $table->string('password');
           $table->string("telefono", 45);
           //$table->integer("ciudad_id")->unsigned()->nullable();
           //$table->integer("perfil_id")->unsigned()->nullable();
           $table->rememberToken();
           $table->timestamps();

           //$table->foreign("ciudad_id")->references('ciudad_id')->on('Ciudad');
           //$table->foreign("perfil_id")->references('perfil_id')->on('Perfil');
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
         Schema::dropIfExists("Usuario");
     }
}
