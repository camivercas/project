<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model {

	protected $table = 'docentes';
    protected $fillable = ['rut','nombres','apellidos'];

    public function departamentos()
    {
        return $this->belongsTo('Departamento');
    }

    public function cursos()
    {
        return $this->hasMany('Curso');
    }
}
