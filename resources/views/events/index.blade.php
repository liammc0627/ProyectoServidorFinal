@extends('layout.layout')


@section('content')
<a href="{{route('events.create')}}">Crear Evento</a><br>
Aqui iran los eventos de la pagina
@foreach ($event as $events)
    {{($events->name)}} Se producira en el dia {{($events->date)}}<hr><h3><b>Más info</b></h3><br>{{($events->description)}}<hr>
@endforeach

@endsection
