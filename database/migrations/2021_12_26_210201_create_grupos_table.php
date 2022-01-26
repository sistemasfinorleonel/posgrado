<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_ini')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->unsignedBigInteger('docente_id');
            $table->unsignedBigInteger('programa_modulo_id')->constrained();
            $table->foreign('programa_modulo_id')->references('id')->on('programa_modulos')->onDelete('cascade');

            $table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');
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
        Schema::dropIfExists('grupos');
    }
}
