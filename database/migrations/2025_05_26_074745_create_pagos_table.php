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
        Schema::create('pagos', function (Blueprint $table) {
        $table->id();
        $table->foreignId('reserva_id')->constrained('reservas')->onDelete('cascade');
        $table->decimal('monto_total', 10, 2);
        $table->string('metodo_pago', 50);
        $table->timestamp('fecha_pago')->nullable();
        $table->enum('estado_pago', ['pendiente', 'pagado', 'cancelado'])->default('pendiente');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
