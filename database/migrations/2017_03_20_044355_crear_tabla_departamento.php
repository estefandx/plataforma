<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDepartamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("Departamento", function(Blueprint $table){
          $table->increments("departamento_id");
          $table->string("nombre");
          $table->integer("pais_id")->unsigned();

          $table->foreign("pais_id")
                ->references("pais_id")
                ->on("Pais")
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
        Schema::dropIfExists("Departamento");
    }
}
