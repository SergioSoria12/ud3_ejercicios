<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfiles'; // Nombre de la tabla
    protected $fillable = ['alumno_id', 'biografia']; // Campos asignables

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'alumno_id'); // Relación 1:1 inversa
    }
}
