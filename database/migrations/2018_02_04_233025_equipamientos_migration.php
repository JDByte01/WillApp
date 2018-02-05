<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EquipamientosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamiento', function (Blueprint $table) {
            $table->increments('id_equipamiento');
            $table->string('nombre',50);
            $table->string('descripcion',150);
            $table->integer('id_modelo')->unsignet();
            $table->integer('puerto_1',2)->null();
            $table->integer('puerto_10',2)->null();
            $table->integer('puerto_20',2)->null();
            $table->integer('puerto_100',2)->null();
            $table->integer('puerto_cobre',2)->null();

            $table->foreign('id_modelo')->references('id_modelo')->on('modelo');

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
        Schema::drop('equipamiento');
    }
}
