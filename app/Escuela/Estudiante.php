<?php

namespace RED\Escuela;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
	protected $fillable = ['nombre_estudiante', 'nombre_estudiante', 'fecha_nacimiento','direccion','correo','genero_id'];

    public function telefonos()
    {
        return $this->hasMany('App\Escuela\Telefono');
    }
}