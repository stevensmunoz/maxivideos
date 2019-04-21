<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlquilersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquilers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pelicula')->unsigned()->nullable();
            $table->integer('id_cliente')->unsigned()->nullable();
            $table->date('fecha_alquiler');
            $table->date('fecha_devolucion');
            $table->timestamps();

            $table->foreign('id_pelicula')->references('id')->on('peliculas')->onDelete('cascade');
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alquilers');
    }
}
