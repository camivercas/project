@extends('app')

@section('content')

    <h1>Estudiantes</h1>


        @foreach($estudiantes as $estudiante)
            <article>

                <h3>
                    <a href="/estudiantes/{{ $estudiante->id }}"> {{ $estudiante->nombres }} {{ $estudiante->apellidos }}</a>
                </h3>

                <div class="body">{{ $estudiante->rut}}, {{$estudiante->email}}</div>

            </article>

        @endforeach

@stop