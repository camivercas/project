<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;

class EstudiantesController extends Controller {

    public function index()
    {
        $estudiantes = Estudiante::all();

        return view('estudiantes.index',compact('estudiantes'));
    }

    public function show($id)
    {
        $estudiante = Estudiante::find($id);

        return view('estudiantes.show',compact('estudiante'));
    }


    public function getIndex()
    {
        $result = \DB::table('estudiantes')
            ->select(
                'estudiantes.id',
                'estudiantes.carrera_id as carrera_id',
                'rut',
                'nombres',
                'apellidos',
                'email'
                //'asignaturas_cursadas.id as asignaturas_cursadas_id'
            )
            //->join('asignaturas_cursadas','estudiantes.id','=','asignaturas_cursadas.estudiante_id')
            ->orderBy('id','ASC')
            ->get();

        foreach ($result as $row)
        {
            $row->full_name = $row->nombres . ' ' . $row->apellidos;
        }

        dd($result);

        return ('$result');
    }

}