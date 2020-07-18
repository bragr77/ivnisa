@extends('backend.layouts.app')

@section('content')

<div class="container my-2">
    <a href="javascript:history.back(-1);" class="btn btn-danger">Regresar</a>
</div>

<div class="container">

    <div class="card text-center">

        <div class="card-header">
            <h3 class=" text-primary font-weight-bold">Formulario Solicitud de Credito</h3>
        </div>


        <div class="card-body text-justify">

            {{--  Inicio Datos del Prestamo  --}}
            <div class="row">
                <div class="col-12">
                    <p class="text-dark font-weight-bold">DATOS DEL PRÉSTAMO:</p>
                    <hr>
                </div>
                <div class="col-md-6">
                    <p class="text-dark font-weight-bold">CANTIDAD SOLICITADA: <span class="font-weight-normal">{{$formulario->cantidad }} DOP</span></p>
                </div>
                <div class="col-md-6">
                    <p class="text-dark font-weight-bold">CANTIDAD DE CUOTAS: <span class="font-weight-normal">{{$formulario->cuotas }}</span></p>
                </div>
            </div>
            <hr>
            {{--  Fin Datos del Prestamo  --}}

            {{--  Inicio Datos Personales  --}}
            <div class="row">
                <div class="col-12">
                    <p class="text-dark font-weight-bold">INFORMACIÓN PERSONAL:</p>
                    <hr>
                </div>
                <div class="col-md-4">
                    <p class="text-dark font-weight-bold">NOMBRE: <span class="font-weight-normal">{{$formulario->nombre }} </span></p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark font-weight-bold">APELLIDO: <span class="font-weight-normal">{{$formulario->apellido }} </span></p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark font-weight-bold">ESTADO CIVIL: <span class="font-weight-normal">{{$formulario->edocivil }} </span></p>
                </div>

                <div class="col-md-6">
                    <p class="text-dark font-weight-bold">CELULAR: <span class="font-weight-normal">{{$formulario->celular }}</span></p>
                </div>
                <div class="col-md-6">
                    <p class="text-dark font-weight-bold">TELÉFONO RESIDENCIAL: <span class="font-weight-normal">{{$formulario->telefono }}</span></p>
                </div>

                <div class="col-12">
                    <p class="text-dark font-weight-bold">CORREO ELECTRÓNICO : <span class="font-weight-normal">{{$formulario->email }}</span></p>
                </div>

                <div class="col-md-12">
                    <p class="text-dark font-weight-bold">DIRECCION VIVIENDA: <span class="font-weight-normal">{{$formulario->direccion }} DOP</span></p>
                </div>
                <div class="col-md-12">
                    <p class="text-dark font-weight-bold">PUNTO DE REFERENCIA PARA LLEGAR: <span class="font-weight-normal">{{$formulario->ptorefe }}</span></p>
                </div>

                <div class="col-md-4">
                    <p class="text-dark font-weight-bold">TIEMPO EN LA RESIDENCIA: <span class="font-weight-normal">{{$formulario->tiemporesidencia }}</span></p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark font-weight-bold">PROPIA O ALQUILADA: <span class="font-weight-normal">{{$formulario->tipovivienda }}</span></p>
                </div>
                <div class="col-md-4">
                    <p class="text-dark font-weight-bold">CANTIDAD DE HIJOS O DEPENDIENTES: <span class="font-weight-normal">{{$formulario->nrohijos }}</span></p>
                </div>
            </div>
            <hr>
            {{--  Fin Datos personales  --}}

            {{--  Inicio Datos LAborales  --}}
            <div class="row">
                <div class="col-12">
                    <p class="text-dark font-weight-bold">INFORMACIÓN LABORAL:</p>
                    <hr>
                </div>

                <div class="col-6">
                    <p class="text-dark font-weight-bold">EMPLEADO O INDEPENDIENTE: <span class="font-weight-normal">{{$formulario->slaboral }}</span></p>
                </div>

                <div class="col-6">
                    <p class="text-dark font-weight-bold">EMPRESA DONDE LABORA O OCUPACIÓN: <span class="font-weight-normal">{{$formulario->empresa }}</span></p>
                </div>

                <div class="col-12">
                    <p class="text-dark font-weight-bold">TIEMPO LABORANDO EN LA EMPRESA: <span class="font-weight-normal">{{$formulario->tlaborando }}</span></p>
                </div>

                <div class="col-6">
                    <p class="text-dark font-weight-bold">CARGO QUE OCUPA: <span class="font-weight-normal">{{$formulario->cargo }}</span></p>
                </div>

                <div class="col-6">
                    <p class="text-dark font-weight-bold">SUELDO: <span class="font-weight-normal">{{$formulario->sueldo }}</span></p>
                </div>

                <div class="col-6">
                    <p class="text-dark font-weight-bold">JEFE INMEDIATO O SUPERVISOR: <span class="font-weight-normal">{{$formulario->jinmediato }}</span></p>
                </div>

                <div class="col-6">
                    <p class="text-dark font-weight-bold">TELÉFONO: <span class="font-weight-normal">{{$formulario->telefonojefe }}</span></p>
                </div>

                <div class="col-12">
                    <p class="text-dark font-weight-bold">OTROS INGRESOS: <span class="font-weight-normal">{{$formulario->otrosingresos }} DOP</span></p>
                </div>

            </div>
            <hr>
            {{--  Fin Datos LAborales  --}}

            {{--  Inicio Referencias Personales  --}}
            <div class="row">
                <div class="col-12">
                    <p class="text-dark font-weight-bold">REFERENCIAS PERSONALES:</p>
                    <hr>
                </div>

                <div class="col-6">
                    <p class="text-dark font-weight-bold">NOMBRE Y APELLIDO: <span class="font-weight-normal">{{$formulario->nref1 }}</span></p>
                </div>

                <div class="col-6">
                    <p class="text-dark font-weight-bold">TELÉFONO: <span class="font-weight-normal">{{$formulario->teleref1 }}</span></p>
                </div>

                <div class="col-3">
                    <p class="text-dark font-weight-bold">PARENTESCO : <span class="font-weight-normal">{{$formulario->pref1 }}</span></p>
                </div>

                <div class="col-9">
                    <p class="text-dark font-weight-bold">DIRECCIÓN: <span class="font-weight-normal">{{$formulario->dirref1 }}</span></p>
                </div>

                <div class="col-6">
                    <p class="text-dark font-weight-bold">NOMBRE Y APELLIDO: <span class="font-weight-normal">{{$formulario->nref2 }}</span></p>
                </div>

                <div class="col-6">
                    <p class="text-dark font-weight-bold">TELÉFONO: <span class="font-weight-normal">{{$formulario->teleref2 }}</span></p>
                </div>

                <div class="col-3">
                    <p class="text-dark font-weight-bold">PARENTESCO : <span class="font-weight-normal">{{$formulario->pref2 }}</span></p>
                </div>

                <div class="col-9">
                    <p class="text-dark font-weight-bold">DIRECCIÓN: <span class="font-weight-normal">{{$formulario->dirref2 }}</span></p>
                </div>
            </div>
            <hr>
            {{--  Fin Referencias Personales  --}}

            {{--  Inicio Informacion Bancaria  --}}
            <div class="row">
                <div class="col-12">
                    <p class="text-dark font-weight-bold">INFORMACIÓN BANCARIA:</p>
                    <hr>
                </div>

                <div class="col-12">
                    <p class="text-dark font-weight-bold">¿Vía cual Banco le pagan? <span class="font-weight-normal">{{$formulario->banconomina }}</span></p>
                </div>

                <div class="col-12">
                    <p>Proporcione una cuenta bancaria donde podamos depositarle el préstamo en caso de ser aprobado.</p>
                </div>

                <div class="col-6">
                    <p class="text-dark font-weight-bold">NÚM. CUENTA: <span class="font-weight-normal">{{$formulario->nrocuenta}}</span></p>
                </div>

                <div class="col-6">
                    <p class="text-dark font-weight-bold">NOMBRE DEL TITULAR : <span class="font-weight-normal">{{$formulario->titular }}</span></p>
                </div>

                <div class="col-12">
                    <p class="text-dark font-weight-bold">¿NOMBRE DEL BANCO: <span class="font-weight-normal">{{$formulario->bancocuenta }}</span></p>
                </div>

                <div class="col-12">
                    <p class="text-dark font-weight-bold">REFERIDO POR: <span class="font-weight-normal">{{$formulario->referido }}</span></p>
                </div>
            </div>
            <hr>
            {{--  Fin Informacion Bancaria  --}}

        </div>




    </div>
</div>

<div class="container my-2">
    <a href="javascript:history.back(-1);" class="btn btn-danger">Regresar</a>
</div>


@endsection
