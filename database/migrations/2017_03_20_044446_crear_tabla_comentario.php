<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaComentario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("Comentario", function(Blueprint $table){
          $table->increments("comentario_id");
          $table->text("descripcion");
          $table->integer("usuario_id")->unsigned();
          $table->integer("producto_id")->unsigned();
          $table->timestamp("fecha");

          /*$table->foreign("usuario_id")
                ->references("usuario_id")
                ->on("Usuarios")
                ->onDelete("cascade"); */

          $table->foreign("producto_id")
                ->references("producto_id")
                ->on("Producto")
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
        //
        Schema::dropIfExists("Comentario");
    }
}
