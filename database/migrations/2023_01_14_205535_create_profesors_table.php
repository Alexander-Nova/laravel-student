<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->bigIncrements('id_profesor');
            $table->string('nombres');
            $table->string('apellidos');
            $table->unsignedBigInteger('id_grado');
            $table->foreign('id_grado')->references('id_grado')->on('grados');
            $table->integer('edad');
            $table->string('sexo');
            $table->string('titulo');
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
        Schema::dropIfExists('profesors');
    }
}
