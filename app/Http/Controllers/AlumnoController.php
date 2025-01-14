<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // Mostrar todos los alumnos
    public function index()
    {
        return Alumno::all();  // Devuelve todos los registros de la tabla 'alumno'
    }

    // Mostrar un solo alumno por ID
    public function show($id)
    {
        return Alumno::findOrFail($id);  // Devuelve el alumno con el ID proporcionado
    }

    // Crear un nuevo alumno
    public function store(Request $request)
    {
        // Validación de los datos recibidos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:alumnos,email',
        ]);

        // Crear el nuevo alumno
        $alumno = Alumno::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
        ]);

        return response()->json($alumno, 201);  // Retorna el nuevo alumno
    }

    // Actualizar un alumno existente
    public function update(Request $request, $id)
    {
        // Buscar el alumno a actualizar
        $alumno = Alumno::findOrFail($id);

        // Validar los datos
        $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:alumnos,email,' . $id,
        ]);

        // Actualizar el alumno
        $alumno->update($request->all());

        return response()->json($alumno, 200);  // Retorna el alumno actualizado
    }

    // Eliminar un alumno
    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();  // Elimina el alumno con el ID proporcionado

        return response()->json(null, 204);  // Retorna una respuesta vacia (204 No Content)
    }
}