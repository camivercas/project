@extends('app')

@section('content')

    <h1>{{ $estudiante->nombres }}</h1>

    <article>
        {{ $estudiante }}
    </article>


@stop