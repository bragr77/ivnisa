@extends('layouts.app')

@section('content')

    <div class="container my-3">
        <div class="card shadow text-center">
            <h1>Mensajes Recibidos</h1>
        </div>

        <div class="container mt-4">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Asunto</th>
                    <th scope="col">Mensaje</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>

                @foreach ($mensajes as $mensaje)
                    <tr>
                        <th scope="row">{{ $cont++ }}</th>
                        <td>{{$mensaje->nombre }}</td>
                        <td>{{$mensaje->apellido }}</td>
                        <td>{{$mensaje->email }}</td>
                        <td>{{$mensaje->asunto }}</td>
                        <td>{{ Str::limit($mensaje->mensaje, 10) }}</td>
                        <td>
                            <div class="row">
                                <a href="{{ route('mensaje.edit', $mensaje) }}" class="mr-1 btn btn-success btn-sm">Ver Mensaje</a>
                                <form action="{{ route('mensaje.destroy', $mensaje) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-1 btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
              </table>
        </div>

    </div>


@endsection
