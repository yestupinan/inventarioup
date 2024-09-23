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
        Schema::create('caracteristicas', function (Blueprint $table) {
            $table->increments('id_caracteristica');
            // Definir la clave foránea
            $table->unsignedInteger('id_ordenador');  // Debe coincidir con el tipo de clave primaria de la tabla 'salones'
            // Agregar la relación de clave foránea
            $table->foreign('id_ordenador')->references('id_ordenador')->on('ordenadores')->onDelete('cascade');
            $table->string('office');
            $table->string('so');
            $table->string('serial_cpu');
            $table->string('serial_monitor');
            $table->string('serial_teclado');
            $table->string('serial_mouse');
            $table->string('serial_disco_duro_mecanico');
            $table->string('serial_disco_solido');
            $table->string('camara_web');
            $table->string('estabilizadores');
            $table->string('cpu');
            $table->string('ram');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caracteristicas');
    }
};
