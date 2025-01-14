<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    // Mostrar todas las notas
    public function index()
    {
        return Nota::all();  // Devuelve todas las notas registradas
    }

    // Mostrar una nota por su ID
    public function show($id)
    {
        return Nota::findOrFail($id);  // Devuelve la nota con el ID proporcionado
    }

    // Crear una nueva nota
    public function store(Request $request)
    {
        // Validación de los datos recibidos
        $request->validate([
            'alumno_id' => 'required|exists:alumnos,id',
            'asignatura_id' => 'required|exists:asignaturas,id',
            'nota' => 'required|integer|min:0|max:10',
        ]);

        // Crear la nueva nota
        $nota = Nota::create([
            'alumno_id' => $request->alumno_id,
            'asignatura_id' => $request->asignatura_id,
            'nota' => $request->nota,
        ]);

        return response()->json($nota, 201);  // Devuelve la nueva nota creada
    }

    // Actualizar una nota existente
    public function update(Request $request, $id)
    {
        // Buscar la nota a actualizar
        $nota = Nota::findOrFail($id);

        // Validar los datos
        $request->validate([
            'alumno_id' => 'sometimes|required|exists:alumnos,id',
            'asignatura_id' => 'sometimes|required|exists:asignaturas,id',
            'nota' => 'sometimes|required|integer|min:0|max:10',
        ]);

        // Actualizar la nota
        $nota->update($request->all());

        return response()->json($nota, 200);  // Retorna la nota actualizada
    }

    // Eliminar una nota
    public function destroy($id)
    {
        $nota = Nota::findOrFail($id);
        $nota->delete();  // Elimina la nota con el ID proporcionado

        return response()->json(null, 204);  // Retorna una respuesta vacía (204 No Content)
    }
}