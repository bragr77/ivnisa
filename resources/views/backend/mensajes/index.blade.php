@extends('backend.layouts.app')

@section('content')

    <div class="my-2">

        <div class="card shadow text-center">
            <h1>Mensajes Nuevos</h1>
        </div>

            <div class="container-fluid mt-4">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">telefono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Asunto</th>
                            <th scope="col">Mensaje</th>
                            <th scope="col">Enviado el:</th>
                            <th scope="col">Acciones</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($mensajes as $mensaje)

                        @if ($mensaje->visto == 0)
                            <tr>
                                <th scope="row">{{ $contn++ }}</th>
                                <td>{{$mensaje->nombre }}</td>
                                <td>{{$mensaje->apellido }}</td>
                                <td>{{$mensaje->telefono }}</td>
                                <td>{{$mensaje->email }}</td>
                                <td>{{ Str::limit($mensaje->asunto, 5) }}</td>
                                <td>{{ Str::limit($mensaje->mensaje, 4) }}</td>
                                <td>{{$mensaje->created_at->diffForHumans() }}</td>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('mensaje.show', $mensaje) }}" class="mr-1 btn btn-success btn-sm">Ver Mensaje</a>
                                        <form action="{{ route('mensaje.destroy', $mensaje) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-1 btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endif

                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>

        <div class="card shadow text-center mt-2">
            <h1>Mensajes Recibidos</h1>
        </div>

        <div class="container-fluid mt-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Asunto</th>
                        <th scope="col">Mensaje</th>
                        <th scope="col">Enviado el:</th>
                        <th scope="col">Acciones</th>
                    </tr>
            </thead>
            <tbody>
                @foreach ($mensajes as $mensaje)

                    @if ($mensaje->visto == 1)
                        <tr>
                            <th scope="row">{{ $contn++ }}</th>
                            <td>{{$mensaje->nombre }}</td>
                            <td>{{$mensaje->apellido }}</td>
                            <td>{{$mensaje->telefono }}</td>
                            <td>{{$mensaje->email }}</td>
                            <td>{{ Str::limit($mensaje->asunto, 5) }}</td>
                            <td>{{ Str::limit($mensaje->mensaje, 4) }}</td>
                            <td>{{$mensaje->created_at->diffForHumans() }}</td>
                            <td>
                                <div class="row">
                                    <a href="{{ route('mensaje.show', $mensaje) }}" class="mr-1 btn btn-primary btn-sm">Ver Mensaje</a>
                                    <form action="{{ route('mensaje.destroy', $mensaje) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="ml-1 btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endif

                @endforeach
                </tbody>
              </table>
            </div>
        </div>



    </div>


@endsection
