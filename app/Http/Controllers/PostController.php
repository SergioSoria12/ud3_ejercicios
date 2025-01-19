<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Alumno;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($alumnoId)
    {
        $alumno = Alumno::with('posts')->findOrFail($alumnoId);
        return response()->json($alumno->posts);
    }

    public function store(Request $request, $alumnoId)
    {
        $alumno = Alumno::findOrFail($alumnoId);

        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
        ]);

        $post = $alumno->posts()->create($validated);

        return response()->json($post, 201);
    }

    public function show($alumnoId, $postId)
    {
        $post = Post::where('alumno_id', $alumnoId)->findOrFail($postId);
        return response()->json($post);
    }

    public function update(Request $request, $alumnoId, $postId)
    {
        $post = Post::where('alumno_id', $alumnoId)->findOrFail($postId);

        $validated = $request->validate([
            'titulo' => 'sometimes|string|max:255',
            'contenido' => 'sometimes|string',
        ]);

        $post->update($validated);

        return response()->json($post);
    }

    public function destroy($alumnoId, $postId)
    {
        $post = Post::where('alumno_id', $alumnoId)->findOrFail($postId);

        $post->delete();

        return response()->noContent();
    }
}
