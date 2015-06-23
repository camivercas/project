<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol_Usuario extends Model {

	protected $table = 'roles_usuarios';
    protected $fillable = ['rut'];

    public function roles()
    {
        return $this->belongsTo('Rol');
    }

}
