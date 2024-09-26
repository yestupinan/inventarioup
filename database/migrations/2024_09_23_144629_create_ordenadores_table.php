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
        Schema::create('ordenadores', function (Blueprint $table) {
            $table->increments('id_ordenador');
            // Definir la clave foránea
            $table->unsignedInteger('id_salon');  // Debe coincidir con el tipo de clave primaria de la tabla 'salones'
            // Agregar la relación de clave foránea 
            $table->foreign('id_salon')->references('id_salon')->on('salones')->onDelete('cascade');
            $table->integer('numero_en_salon');
            $table->String('mac');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordenadores');
    }
};
