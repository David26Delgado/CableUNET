<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivotes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cable_id');
            $table->foreign('cable_id')->references('id')->on('cables');
            $table->unsignedInteger('canal_id');
            $table->foreign('canal_id')->references('id')->on('canals');
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
        Schema::dropIfExists('pivotes');
    }
}
