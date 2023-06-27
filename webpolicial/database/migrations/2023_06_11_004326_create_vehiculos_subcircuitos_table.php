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
        Schema::create('vehiculos_subcircuitos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_vehiculo')->unsigned();
            $table->foreign('id_vehiculo')->references('id')->on('vehiculos');
            $table->integer('id_subcircuito')->unsigned();
            $table->foreign('id_subcircuito')->references('id')->on('subcircuitos');
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
        Schema::dropIfExists('vehiculos_subcircuitos');
    }
};
