<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista', function (Blueprint $table) {
            $table->increments('id_lista');
            $table->integer('id_equipo')->unsigned();
            $table->integer('id_equipamiento')->unsigned();

            $table->foreign('id_equipo')->references('id_equipo')->on('equipo');
            $talbe->foreign('id_equipamiento')->references('id_equipamiento')->on('equipamiento');
            
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
        Schema::drop('lista');
    }
}
