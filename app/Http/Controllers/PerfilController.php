<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function store(Request $request, $alumnoId)
    {
        $alumno = Alumno::findOrFail($alumnoId);

        $validated = $request->validate([
            'biografia' => 'required|string|max:500',
        ]);

        $perfil = $alumno->perfil()->create($validated);

        return response()->json($perfil, 201);
    }

    public function show($alumnoId)
    {
        $alumno = Alumno::with('perfil')->findOrFail($alumnoId);
        return response()->json($alumno->perfil);
    }

    public function update(Request $request, $alumnoId)
    {
        $alumno = Alumno::findOrFail($alumnoId);

        $validated = $request->validate([
            'biografia' => 'required|string|max:500',
        ]);

        $alumno->perfil->update($validated);

        return response()->json($alumno->perfil);
    }

    public function destroy($alumnoId)
    {
        $alumno = Alumno::findOrFail($alumnoId);

        $alumno->perfil->delete();

        return response()->noContent();
    }
}
