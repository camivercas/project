<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {

	protected $table = 'cursos';
    protected $fillable = ['semestre','anio','seccion'];

    public function asignaturas()
    {
        return $this->belongsTo('Asignatura');
    }

    public function docentes()
    {
        return $this->belongsTo('Docente');
    }

    public function horarios()
    {
        return $this->hasMany('Horario');
    }

    public function estudiantes()
    {
        return $this->belongsToMany('Estudiante');
    }
}
