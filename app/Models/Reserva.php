<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Habitaciones;
class Reserva extends Model
{
       use HasFactory;

    protected $table = 'reservas';

    protected $fillable = [
        'user_id',
        'habitacion_id',
        'fecha_inicio',
        'fecha_fin',
        'estado',
        'fecha_reserva',
    ];

    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
        'fecha_reserva' => 'datetime',
    ];

    // Relaciones
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function habitacion()
    {
        return $this->belongsTo(Habitaciones::class, 'habitacion_id');
    }
}
