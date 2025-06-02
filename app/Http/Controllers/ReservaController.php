<?php

namespace App\Http\Controllers;
use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
       public function index()
    {
        $reservas = Reserva::with(['usuario', 'habitacion'])->get();
        return response()->json($reservas);
    }

    // Registrar una nueva reserva
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'habitacion_id' => 'required|exists:habitaciones,id',
            'fecha_inicio' => 'required|date|after_or_equal:today',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'estado' => 'in:pendiente,confirmada,cancelada',
        ]);

        $reserva = Reserva::create([
            'user_id' => $request->user_id,
            'habitacion_id' => $request->habitacion_id,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'estado' => $request->estado ?? 'pendiente',
        ]);

        return response()->json($reserva, 201);
    }

    // Mostrar una reserva específica
    public function show($id)
    {
        $reserva = Reserva::with(['usuario', 'habitacion'])->findOrFail($id);
        return response()->json($reserva);
    }

    // Actualizar una reserva
    public function update(Request $request, $id)
    {
        $reserva = Reserva::findOrFail($id);

        $request->validate([
            'user_id' => 'sometimes|exists:users,id',
            'habitacion_id' => 'sometimes|exists:habitaciones,id',
            'fecha_inicio' => 'sometimes|date',
            'fecha_fin' => 'sometimes|date|after_or_equal:fecha_inicio',
            'estado' => 'in:pendiente,confirmada,cancelada',
        ]);

        $reserva->update($request->all());

        return response()->json($reserva);
    }

    // Eliminar una reserva
    public function destroy($id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->delete();

        return response()->json(['message' => 'Reserva eliminada']);
    }
}
