<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMensaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("Mensaje", function(Blueprint $table){
          $table->increments("mensaje_id");
          $table->timestamp("fecha");
          $table->integer("usuario_origen")->unsigned();
          $table->integer("usuario_destino")->unsigned();
          $table->text("mensaje");
          $table->char("estado", 1);

          /*$table->foreign("usuario_origen")
                ->references("usuario_id")
                ->on("Usuarios")
                ->onDelete("cascade"); */
          /*$table->foreign("usuario_destino")
                ->references("usuario_id")
                ->on("Usuarios")
                ->onDelete("cascade"); */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists("Mensaje");
    }
}
