<?php

namespace RED\Escuela;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes;

    protected $table = 'Curso';

    protected $fillable = [
    'codigo',
    'nombre_curso',
    'descripcion',
    'fecha_inicio',
    'fecha_fin',
    'max_estudiantes',
    'num_estudiantes',
    'activo'];

    protected $dates = ['deleted_at'];

    public function estudiantes()
    {
        return $this->belongsToMany('RED\Escuela\Estudiante');
    }

    public function maestros()
    {
        return $this->belongsToMany('RED\Escuela\Maestro');
    }

    public function horarios()
    {
        return $this->hasMany('RED\Escuela\horarios');
    }

    public function scopeName($query, $name){

        if (trim($name) != "")
        {
            return $query->where("nombre_curso","LIKE","%$name%");    
        }
    }

    public function scopeCode($query, $code){

        if (trim($code) != "")
        {
            return $query->where("codigo","LIKE","%$code%");    
        }
    }
}
