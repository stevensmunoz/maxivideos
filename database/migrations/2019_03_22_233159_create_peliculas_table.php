<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50)->nullable();
            $table->string('nacionalidad', 50)->nullable();
            $table->string('productora', 50)->nullable();
            $table->date('fecha_creacion');
            $table->integer('ejemplares');
            $table->integer('id_director')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('id_director')->references('id')->on('directors')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
