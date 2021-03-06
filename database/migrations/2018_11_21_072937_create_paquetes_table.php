<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->unsignedInteger('telefonia_id');
            $table->foreign('telefonia_id')->references('id')->on('telefonias');
            $table->unsignedInteger('cable_id');
            $table->foreign('cable_id')->references('id')->on('cables');
            $table->unsignedInteger('internet_id');
            $table->foreign('internet_id')->references('id')->on('internets');
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
        Schema::dropIfExists('paquetes');
    }
}
