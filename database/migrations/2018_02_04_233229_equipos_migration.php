<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EquiposMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo', function (Blueprint $table) {
            $table->increments('id_equipo');
            $table->integer('id_marca')->unsigned();
            $table->integer('id_modelo')->unsigned();
            $table->string('neomonico',50);
            $table->string('serie',50);
            $table->integer('id_sala')->unsigned();

            $table->foreign('id_marca')->references('id_marca')->on('marca');
            $table->foreign('id_modelo')->references('id_modelo')->on('modelo');
            $table->foreign('id_sala')->references('id_sala')->on('sala');

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
        Schema::drop('equipo');
    }
}
