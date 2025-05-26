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
        Schema::create('habitaciones', function (Blueprint $table) {
        $table->id();
        $table->string('numero', 10);
        $table->enum('tipo', ['simple', 'doble', 'matrimonial']);
        $table->text('descripcion')->nullable();
        $table->decimal('precio_noche', 10, 2);
        $table->enum('estado', ['disponible', 'ocupada', 'mantenimiento'])->default('disponible');
        $table->unsignedInteger('capacidad');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitaciones');
    }
};
