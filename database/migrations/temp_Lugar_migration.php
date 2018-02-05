<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LugaresMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugares', function (Blueprint $table) {
            $table->increments('id_lugar');
            $table->string('nombre');

            //Añadir clave foránea con Categoria. id_categoria
            $table->integer('categoria_id')->unsigned();
            //Indicamos cual es la clave foránea de esta tabla;
            $table->foreign('categoria_id')->references('id_categoria')->on('categorias');

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
        Schema::drop('lugares');
    }
}