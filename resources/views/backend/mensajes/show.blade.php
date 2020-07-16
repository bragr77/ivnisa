@extends('backend.layouts.app')

@section('content')

    <div class="container mt-4 col-lg-8">
        <div class="card text-center">
            <div class="card-header">
                <h3 class=" text-primary font-weight-bold">{{ $mensaje->nombre }}  {{ $mensaje->apellido }}</h3>
            </div>
            <div class="card-body">
                <p class="card-text text-justify">Correo: {{ $mensaje->email }}</p>
                <p class="card-text text-justify">Asunto: {{ $mensaje->asunto }}</p>
                <hr>
                <p class="text-dark text-justify font-weight-bold">Mensaje:</p>
                <p class="card-text text-dark text-justify">{{ $mensaje->mensaje }}</p>
                <hr>
              <a href="{{ route('mensaje.index') }}" class="btn btn-outline-primary btn-block">Volver</a>
            </div>
            <div class="card-footer">
              Enviado el: {{ $mensaje->created_at }}
            </div>
          </div>
    </div>

@endsection
