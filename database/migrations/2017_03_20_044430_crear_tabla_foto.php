<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaFoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("Foto", function(Blueprint $table){
          $table->increments("foto_id");
          $table->integer("producto_id")->unsigned();
          $table->string("nombre");
          $table->string("url");

          $table->foreign("producto_id")->references("producto_id")
                ->on("Producto")->onDelete("cascade");
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
        Schema::dropIfExists("Foto");
    }
}
