<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitos', function (Blueprint $table) {
            $table->id();
            $table->string('folderAmarillo');
            $table->string('fotocopiaCarnet');
            $table->string('fotografia');
            $table->string('firmacompromisoPago');
            $table->string('cbtePagoMatricula');
            $table->string('cbtePagoPrimeraCuota');
            $table->string('ejemplarHojaVida');
            $table->string('llenanoFormInscripcion');
            $table->string('fotocopiaLegalTitulo');
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
          
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
        Schema::dropIfExists('requisitos');
    }
}
