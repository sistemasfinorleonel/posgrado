<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramaModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_modulos', function (Blueprint $table) {
            $table->id();
            $table->string('edicion')->nullable();
            $table->bigInteger('programa_id')->unsigned();
            $table->bigInteger('modulo_id')->unsigned();
            $table->foreign('programa_id')->references('id')->on('programas')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign('modulo_id')->references('id')->on('modulos')->onUpdate('restrict')->onDelete('cascade');
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
        Schema::dropIfExists('programa_modulos');
    }
}
