<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id('id_persona');
            $table->string('id_equipo');
            $table->foreign('id_equipo')->references('id_equipo')->on('equipos');
            $table->String('nombre');
            $table->String('apellido');
            $table->String('rol');
            $table->String('ci');
            $table->String('genero');
            $table->String('fechaNac');
            $table->String('pais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
