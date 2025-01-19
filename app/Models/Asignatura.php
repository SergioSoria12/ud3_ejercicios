<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    public function alumnos()
    {
        return $this->belongsToMany(
            Alumno::class,
            'nota', 
            'asignatura_id', 
            'alumno_id'
        )->withPivot('nota', 'created_at', 'update_at');
    }

}