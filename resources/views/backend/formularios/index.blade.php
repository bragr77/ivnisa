@extends('backend.layouts.app')

@section('content')

<div class="my-2">

    <div class="card shadow text-center">
        <h1>Solicitudes Recibidas</h1>
    </div>

        <div class="container-fluid mt-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>celular</th>
                        <th>Correo</th>
                        <th>Cantidad Solicitada</th>
                        <th>Cuotas de Pago</th>
                        <th>Enviado</th>
                        <th>Acciones</th>
                    </tr>
            </thead>
            <tbody>
                @foreach ($formularios as $formulario)

                        <tr class="@if ($formulario->visto == 0) ItemNuevo @else @endif">
                            <td>{{ $cont++ }}</td>
                            <td>{{$formulario->nombre }}</td>
                            <td>{{$formulario->apellido }}</td>
                            <td>{{$formulario->celular }}</td>
                            <td>{{$formulario->email }}</td>
                            <td>{{$formulario->cantidad }}</td>
                            <td>{{$formulario->cuotas }}</td>
                            <td>{{$formulario->created_at->diffForHumans() }}</td>
                            <td>
                                <div class="row">
                                    <a href="{{ route('formulario.show', $formulario) }}" class="mr-1 btn btn-success btn-sm">Ver Solcitud</a>
                                    <form action="{{ route('formulario.destroy', $formulario) }}" method="POST">
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
                {{ $formularios->links() }}
            </div>
        </div>

</div>

@endsection

