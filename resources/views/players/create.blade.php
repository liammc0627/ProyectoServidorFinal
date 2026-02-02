@extends('layout.layout');

@section('content')
        @if ($errors->any())
        Hay errores en el formulario: <br>
        @foreach ($errors->all() as $error)
            {{$error}} <br>
        @endforeach
    @endif
    <form action="{{route('players.store')}}" method="post" enctype="multipart/form-data" >
    @csrf
    Nombre: <input type="text" name="name"><hr>
    Edad: <input type="text" name="age"><hr>
    Posicion: <input type="text" name="position"><hr>
    Descripción: <input type="text" name="description"><hr>
    {{-- Foto: < type="file" name="picture"><hr> --}}
    <input type="file" name="picture" id="picture"><br>

    <input type="submit" name="Guardar">
</form>
@endsection
