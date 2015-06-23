@extends('app')


@section('content')


    <h1>About Me: {!! $first !!} {!! $last !!}</h1>

    @if ($first == 'Camila')

        <h3>People I like:</h3>
        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @else

        <h3>Nothing to show</h3>

    @endif

<p>
    kshfjsdfsdfjshdfjds.
</p>

@stop