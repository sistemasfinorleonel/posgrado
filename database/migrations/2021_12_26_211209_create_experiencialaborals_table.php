<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencialaboralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencialaborals', function (Blueprint $table) {
            $table->id();
            $table->string('empresa');
            $table->string('cargo');
            $table->date('fecha_inicial');
            $table->date('fecha_final');
            $table->unsignedBigInteger('docente_id');
            $table->timestamps();
            $table->foreign('docente_id')
            ->references('id')->on('docentes')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiencialaborals');
    }
}
