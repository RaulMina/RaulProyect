<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_vehiculo');
            $table->string('placa');
            $table->string('chasis');
            $table->string('marca');
            $table->string('modelo');
            $table->string('motor');
            $table->string('kilometraje');
            $table->string('cilindraje');
            $table->string('capacidad_carga');
            $table->string('capacidad_pasajeros');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
