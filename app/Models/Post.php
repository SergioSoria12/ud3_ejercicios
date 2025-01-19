<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts'; // Nombre de la tabla
    protected $fillable = ['alumno_id', 'titulo', 'contenido']; // Campos asignables

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'alumno_id'); // Relación inversa 1:N
    }
}
