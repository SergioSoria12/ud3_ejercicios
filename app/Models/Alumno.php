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
        return $this->belongsToMany(
            Asignatura::class, 
            'nota', 
            'alumno_id', 
            'asignatura_id'
        )->withPivot('nota', 'created_at', 'updated_at');
    }

    public function perfil()
    {
        return $this->hasOne(Perfil::class, 'alumno_id'); // Relación 1:1
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'alumno_id'); // Relación 1:N
    }

}