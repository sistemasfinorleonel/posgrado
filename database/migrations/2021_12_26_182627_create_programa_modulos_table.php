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
          
            $table->unsignedBigInteger('programa_id')->constrained();
            $table->unsignedBigInteger('modulo_id')->constrained();
            $table->primary(['programa_id','modulo_id']);
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
