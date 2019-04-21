<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50)->nullable();
            $table->string('nacionalidad', 50)->nullable();
            $table->tinyInteger('sexo')->default(0)->nullable();
            $table->tinyInteger('tipo_actor')->default(0)->nullable();
            $table->integer('id_pelicula')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('id_pelicula')->references('id')->on('peliculas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actors');
    }
}
