<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model {

	protected $table = 'campus';
    protected $fillable = ['nombre','direccion','latitud','longitud','descripcion','rut_encargado'];

    public function facultades()
    {
        return $this->hasMany('Facultad');
    }

    public function salas()
    {
        return $this->hasMany('Sala');
    }

}
