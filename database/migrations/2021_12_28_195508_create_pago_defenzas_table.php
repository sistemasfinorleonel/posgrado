<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoDefenzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_defenzas', function (Blueprint $table) {
            
            $table->string('nombre');
            $table->integer('monto');
            
            $table->unsignedBigInteger('programa_id');
            $table->unsignedBigInteger('pago_defenza_id');
            $table->primary(['programa_id','pago_defenza_id']);
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
        Schema::dropIfExists('pago_defenzas');
    }
}
