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
            $table->string('mooc')->nullable();
            $table->string('nombreArchivo')->nullable();
            $table->string('carpetaOficina')->nullable();
            $table->unsignedBigInteger('estudiante_id');
            $table->date('fechaRegistro');
            $table->timestamps();
            $table->foreign('estudiante_id')->references("id")->on('estudiante');
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
