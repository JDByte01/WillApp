<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HistorialesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial', function (Blueprint $table) {
            $table->increments('id_historial');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_accion')->unsigned();
            $table->time('hora');
            $table->date('fecha');
            $talbe->integer('id_equipo')->unsigned();

            $table->foreing('id_usuario')->references('')->on('');
            $table->foreing('id_accion')->references('')->on('');
            $table->foreing('id_equipo')->references('')->on('');

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
        Schema::drop('historial');
    }
}
