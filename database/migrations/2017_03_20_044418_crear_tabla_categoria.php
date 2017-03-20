<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("Categoria", function(Blueprint $table){
          $table->increments("categoria_id");
          $table->string("nombre");
          $table->integer("subcategoria_de")->unsigned()->nullable();

          $table->foreign("subcategoria_de")
                ->references("categoria_id")
                ->on("Categoria")
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
        Schema::dropIfExists("Categoria");
    }
}
