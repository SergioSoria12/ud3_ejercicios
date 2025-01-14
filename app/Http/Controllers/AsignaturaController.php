<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    //Mostrar todas las asignaturas
    public function index()
    {
        return Asignatura::all(); //Devuelve todas las asignaturas
    }

    //Mostrar una asignatura por su ID
    public function show($id)
    {
        return Asignatura::findOrFail($id); //Devuelve la nota con el ID proporcionado
    }

    //Crear una nueva asignatura
    public function store(Request $request)
    {
        //Validacion de los datos recibidos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:500',
        ]);

        return Asignatura::create($request->all());
    }

    //Actualizar una asignatura existente
    public function update(Request $request, $id)
    {
        //Buscamos la asignatura a actualizar
        $asignatura = Asignatura::findOrFail($id);

        $asignatura->update($request->all());
        return $asignatura;
    }

    //Eliminar una asignatura
    public function destroy($id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $asignatura->delete(); //Elimina la asignatura con la ID proporcionada

        return response()->noContent();
    }
}