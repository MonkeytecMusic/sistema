<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->integer('noDeControl');
            $table->integer('telefono');
            $table->string('carrera');
            $table->date('fechaNacimiento');
            $table->string('preparatoria');
            $table->date('ingresoITMA2');
            $table->string('deportivos');
            $table->integer('hrsDeportivos');
            $table->string('civicos');
            $table->integer('hrsCivicos');
            $table->string('culturales');
            $table->integer('hrsCulturales');
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
        Schema::dropIfExists('estudiante');
    }
}
