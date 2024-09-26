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
        Schema::create('observaciones', function (Blueprint $table) {
            $table->increments('id_observacion');
            // Definir la clave foránea
            $table->unsignedInteger('id_ordenador');  // Debe coincidir con el tipo de clave primaria de la tabla 'salones'
            // Agregar la relación de clave foránea
            $table->foreign('id_ordenador')->references('id_ordenador')->on('ordenadores')->onDelete('cascade');
            $table->date('fecha');
            $table->String('observacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('observaciones');
    }
};
