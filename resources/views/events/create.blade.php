@extends('layout.layout')

@section('content')
    @if ($errors->any())
        Hay errores en el formulario: <br>
        @foreach ($errors->all() as $error)
            {{$error}} <br>
        @endforeach
    @endif
<form action="{{route('events.store')}}" method="post">
    @csrf
    Nombre del evento: <input type="text" name="name"><br>
    Fecha: <input type="date" name="date"><br>
    Descripción: <input type="text" name="description"><br>
    <input type="submit" name="Guardar"><br>
</form>
@endsection

