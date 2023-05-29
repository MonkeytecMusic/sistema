<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCredDeportivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cred_deportivo', function (Blueprint $table) {
            $table->id();
            $table->string('nombreAlumno');
            $table->string('paternoAlumno');
            $table->string('maternoAlumno');
            $table->integer('NoDeControl');
            $table->string('nombreArchivo');
            $table->integer('hrsEvento');
            $table->string('carpetaOficina');
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
        Schema::dropIfExists('cred_deportivo');
    }
}
