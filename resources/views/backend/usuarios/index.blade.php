@extends('backend.layouts.app')

@section('content')

    <div class="my-2">

        <div class="card shadow text-center">
            <h1>Usuarios</h1>
        </div>

            <div class="container mt-2">
                <a href="{{ route('usuario.create') }}" class="btn btn-info">Agregar Usuario</a>
            </div>

            <div class="container-fluid mt-4">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>email</th>
                            <th>Creado</th>
                            <th>Acciones</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)

                            <tr class="@if ($usuario->visto == 0) ItemNuevo @else @endif">
                                <th>{{ $cont++ }}</th>
                                <td>{{$usuario->name }}</td>
                                <td>{{$usuario->email }}</td>
                                <td>{{$usuario->created_at->diffForHumans() }}</td>
                                <td>
                                    <div class="row">
                                        {{--  <a href="{{ route('usuario.show', $usuario) }}" class="mr-1 btn btn-success btn-sm">Ver Mensaje</a>  --}}
                                        <form action="{{ route('usuario.destroy', $usuario) }}" method="POST">
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
                    {{ $usuarios->links() }}
                </div>
            </div>

    </div>


@endsection
