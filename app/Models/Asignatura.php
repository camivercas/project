<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model {

	protected $table = 'asignaturas';
    protected $fillable = ['codigo','nombre','descripcion'];

    public function departamentos()
    {
        return $this->belongsTo('Departamento');
    }

    public function cursos()
    {
        return $this->hasMany('Curso');
    }


}
