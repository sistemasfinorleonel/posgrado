<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('tipo');
            $table->string('version');
            $table->integer('duracionMeses');
            $table->integer('totalModulos');
            $table->unsignedBigInteger('matricula_id');
            $table->unsignedBigInteger('precio_id');
            $table->unsignedBigInteger('defensa_id');
            $table->foreign('matricula_id')->reference('id')->on('matriculas')->onDelete('cascade');
            $table->foreign('precio_id')->reference('id')->on('precios')->onDelete('cascade');
            $table->foreign('defensa_id')->reference('id')->on('pagodefensas')->onDelete('cascade');
            
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
        Schema::dropIfExists('programas');
    }
}
