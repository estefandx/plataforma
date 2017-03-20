<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCiudad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //Creacion de tabla Ciudad
         Schema::create("Ciudad", function(Blueprint $table){
           $table->increments("ciudad_id");
           $table->string("nombre", 60);
           $table->integer("departamento_id")->unsigned();

           $table->foreign("departamento_id")
                 ->references("departamento_id")
                 ->on("Departamento")
                 ->onDelete("cascade");
         });

     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         //Eliminacion tabla Ciudad
         Schema::dropIfExists("Ciudad");
     }
}
