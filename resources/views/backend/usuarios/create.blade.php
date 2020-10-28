@extends('backend.layouts.app')

@section('content')

    <div class="my-2">

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-primary text-center font-weight-bold">Registrar Usuarios</div>

                        <div class="card-body">

                            <form action="{{ route('usuario.store') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group">
                                    <label for="name" class="font-weight-bold">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="font-weight-bold">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="font-weight-bold">Contraseña:</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>



                                <button type="submit" class="btn btn-primary">Crear</button>
                                <a href="{{ route('usuario.index') }}" class="btn btn-danger">Cancelar</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>


@endsection
