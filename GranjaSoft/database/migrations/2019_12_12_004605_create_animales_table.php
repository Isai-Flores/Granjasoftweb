<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnimalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animales', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('raza')->nullable();
            $table->string('tipo')->nullable();
            $table->integer('lote')->nullable();
            $table->string('cantidad')->nullable();
            $table->integer('nave_id')->unsigned();
            $table->foreign('nave_id')->references('id')->on('naves')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('animales');
    }
}
