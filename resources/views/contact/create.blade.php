@extends('layout.layout')

@section('content')
<form>
    <ul>
        <li>Nombre:</li>
        <input type="text" name="name">
        <li>Mail:</li>
        <input type="email" name="email">
    </ul>
@endsection
