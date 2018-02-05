<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LogsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            $table->increments('id_log');
            $table->integer('id_usuario')->unsigned();
            $table->date('fecha');
            $table->string('ip',20);//Ip 15 + 5 del pueto

            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('log');
    }
}
