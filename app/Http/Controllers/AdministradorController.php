<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Campus;

use Illuminate\Http\Request;

class AdministradorController extends Controller {

	public function opciones()
    {
        $campus = Campus::all();

        return view('administrador.opciones', compact('campus'));
    }

    public function crear_campus()
    {
        return view('administrador.crear_campus');
    }

}
