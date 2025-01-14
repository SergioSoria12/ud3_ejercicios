<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
   

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class, 'nota', 'alumno_id', 'asignatura_id');
    }

}