<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id_alumno');
            $table->string('nombres')->nullable();
            $table->string('apellidos');
            $table->string('carnet');
            $table->unsignedBigInteger('id_grado');
            $table->foreign('id_grado')->references('id_grado')->on('grados')->onDelete('cascade');
            $table->string('nombre_de_madre');
            $table->string('nombre_de_padre');
            $table->integer('edad');
            $table->double('nota_final',2,1);
            $table->integer('estado')->default(1);
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
        Schema::dropIfExists('alumnos');
    }
}
