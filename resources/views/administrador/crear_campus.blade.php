@extends('app')

@section('content')

    <h1>Crear un nuevo Campus</h1>

    <hr/>

    {!! Form::open() !!}

        <div class="form-group">
            {!! Form::label('nombre', 'Nombre: ') !!}
            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre de Campus']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('direccion', 'Dirección: ') !!}
            {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Dirección de Campus']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('latitud', 'Latitud: ') !!}
            {!! Form::text('latitud', null, ['class' => 'form-control', 'placeholder' => 'Latitud de Campus']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('longitud', 'Longitud: ') !!}
            {!! Form::text('longitud', null, ['class' => 'form-control', 'placeholder' => 'Longitud de Campus']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descripcion', 'Descripción: ') !!}
            {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripción de Campus']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('rut', 'Rut Encargado: ') !!}
            {!! Form::text('rut', null, ['class' => 'form-control', 'placeholder' => 'Rut Encargado de Campus']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Crear Campus', ['class' => ']) !!}
        </div>


    {!! Form::close() !!}


@stop