<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precios', function (Blueprint $table) {
            
            $table->string('tutordefensa');
            $table->integer('precioPrograma');
            $table->unsignedBigInteger('programa_id');
            $table->unsignedBigInteger('precio_id');
            $table->primary(['programa_id','precio_id']);
            $table->foreign('programa_id')->references('id')->on('programas')->onDelete('cascade');
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
        Schema::dropIfExists('precios');
    }
}
