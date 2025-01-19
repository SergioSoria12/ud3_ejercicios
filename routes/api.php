<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PostController;

// Rutas para Alumnos
Route::get('/alumnos', [AlumnoController::class, 'index']);
Route::get('/alumnos/{id}', [AlumnoController::class, 'show']);
Route::post('/alumnos', [AlumnoController::class, 'store']);
Route::put('/alumnos/{id}', [AlumnoController::class, 'update']);
Route::delete('/alumnos/{id}', [AlumnoController::class, 'destroy']);

// Rutas para Notas
Route::get('/notas', [NotaController::class, 'index']);
Route::get('/notas/{id}', [NotaController::class, 'show']);
Route::post('/notas', [NotaController::class, 'store']);
Route::put('/notas/{id}', [NotaController::class, 'update']);
Route::delete('/notas/{id}', [NotaController::class, 'destroy']);

// Rutas para Asignaturas
Route::get('/asignaturas', [AsignaturaController::class, 'index']);
Route::get('/asignaturas/{id}', [AsignaturaController::class, 'show']);
Route::post('/asignaturas', [AsignaturaController::class, 'store']);
Route::put('/asignaturas/{id}', [AsignaturaController::class, 'update']);
Route::delete('/asignaturas/{id}', [AsignaturaController::class, 'detroy']);

//Rutas para probar relaciones
Route::get('alumnos/{id}/asignaturas', [AlumnoController::class, 'asignaturas']);
Route::get('asignaturas/{id}/alumnos', [AsignaturaController::class, 'alumnos']);
Route::prefix('alumnos/{alumnoId}')->group(function () {
    Route::post('perfil', [PerfilController::class, 'store']);
    Route::get('perfil', [PerfilController::class, 'show']);
    Route::put('perfil', [PerfilController::class, 'update']);
    Route::delete('perfil', [PerfilController::class, 'destroy']);
});
Route::prefix('alumnos/{alumnoId}/posts')->group(function () {
    Route::get('/', [PostController::class, 'index']);
    Route::post('/', [PostController::class, 'store']);
    Route::get('{postId}', [PostController::class, 'show']);
    Route::put('{postId}', [PostController::class, 'update']);
    Route::delete('{postId}', [PostController::class, 'destroy']);
});
