@extends('backend.layouts.app')

@section('content')

    <div class="my-2">

        <div class="card shadow text-center">
            <h1>Mensajes Recibidos</h1>
        </div>

            <div class="container-fluid mt-4">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>telefono</th>
                            <th>Correo</th>
                            <th>Asunto</th>
                            <th>Mensaje</th>
                            <th>Enviado</th>
                            <th>Acciones</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($mensajes as $mensaje)

                            <tr class="@if ($mensaje->visto == 0) ItemNuevo @else @endif">
                                <th>{{ $cont++ }}</th>
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


                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="container">
                <div class="pagination justify-content-center">
                    {{ $mensajes->links() }}
                </div>
            </div>

    </div>


@endsection

