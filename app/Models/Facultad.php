<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model {

	protected $table = 'facultades';
    protected $fillable = ['nombre','descripcion'];

    public function campus()
    {
        return $this->belongsTo('Campus');
    }

    public function departamentos()
    {
        return $this->hasMany('Departamento');
    }
}
