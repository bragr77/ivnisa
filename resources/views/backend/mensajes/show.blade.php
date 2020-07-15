@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <h2>Mensaje de:</h2>

        <h3>{{ $mensaje->nombre }}  {{ $mensaje->apellido }}</h3>

        <h4>Asunto: {{ $mensaje->asunto }}</h4>

        <h4>Mensaje:</h4>
        <p>{{ $mensaje->mensaje }}</p>

    </div>


@endsection
