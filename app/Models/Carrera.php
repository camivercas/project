<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model {

	protected $table = 'carreras';
    protected $fillable = ['codigo','nombre','descripcion'];

    public function escuelas()
    {
        return $this->belongsTo('Escuela');
    }

    public function estudiantes()
    {
        return $this->hasMany('Estudiante');
    }

}
