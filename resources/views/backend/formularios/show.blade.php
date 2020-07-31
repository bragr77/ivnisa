<!doctype html>
<html lang="es">

<head>
    <title>Inversiones Nisa - Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
<div class="text-center">
    <img src="{{ asset('img/navlogo2.png') }}" alt="">
</div>

<h3 class="text-center text-dark font-weight-bold">Formulario Solicitud de Credito</h3>
<br>

{{--  Inicio Datos del Prestamo  --}}
 <div>
    <p class="text-dark font-weight-bold">DATOS DEL PRÉSTAMO:</p>
    <hr>
    <p class="text-dark font-weight-bold">CANTIDAD SOLICITADA: <span class="font-weight-normal">{{$formulario->cantidad }} DOP</span></p>
    <p class="text-dark font-weight-bold">CANTIDAD DE CUOTAS: <span class="font-weight-normal">{{$formulario->cuotas }}</span></p>
</div>
<hr>
<br>
{{--  Fin Datos del Prestamo  --}}

{{--  Inicio Datos Personales  --}}
<div>
    <p class="text-dark font-weight-bold">INFORMACIÓN PERSONAL:</p>
    <hr>
    <p class="text-dark font-weight-bold">NOMBRE: <span class="font-weight-normal">{{$formulario->nombre }} </span></p>
    <p class="text-dark font-weight-bold">APELLIDO: <span class="font-weight-normal">{{$formulario->apellido }} </span></p>
    <p class="text-dark font-weight-bold">CÉDULA: <span class="font-weight-normal">{{$formulario->cedula }} </span></p>
    <p class="text-dark font-weight-bold">ESTADO CIVIL: <span class="font-weight-normal">{{$formulario->edocivil }} </span></p>        <p class="text-dark font-weight-bold">CELULAR: <span class="font-weight-normal">{{$formulario->celular }}</span></p>
    <p class="text-dark font-weight-bold">TELÉFONO RESIDENCIAL: <span class="font-weight-normal">{{$formulario->telefono }}</span></p>
    <p class="text-dark font-weight-bold">CORREO ELECTRÓNICO : <span class="font-weight-normal">{{$formulario->email }}</span></p>
    <p class="text-dark font-weight-bold">DIRECCION VIVIENDA: <span class="font-weight-normal">{{$formulario->direccion }}</span></p>
    <p class="text-dark font-weight-bold">PUNTO DE REFERENCIA PARA LLEGAR: <span class="font-weight-normal">{{$formulario->ptorefe }}</span></p>
    <p class="text-dark font-weight-bold">TIEMPO EN LA RESIDENCIA: <span class="font-weight-normal">{{$formulario->tiemporesidencia }}</span></p>
    <p class="text-dark font-weight-bold">PROPIA O ALQUILADA: <span class="font-weight-normal">{{$formulario->tipovivienda }}</span></p>
    <p class="text-dark font-weight-bold">CANTIDAD DE HIJOS O DEPENDIENTES: <span class="font-weight-normal">{{$formulario->nrohijos }}</span></p>
</div>
<hr>
<br>
<br>
{{--  Fin Datos personales  --}}

<div class="text-center">
    <img src="{{ asset('img/navlogo2.png') }}" alt="">
</div>
{{--  Inicio Datos LAborales  --}}
<div>
    <p class="text-dark font-weight-bold">INFORMACIÓN LABORAL:</p>
    <hr>
    <p class="text-dark font-weight-bold">EMPLEADO O INDEPENDIENTE: <span class="font-weight-normal">{{$formulario->slaboral }}</span></p>
    <p class="text-dark font-weight-bold">EMPRESA DONDE LABORA O OCUPACIÓN: <span class="font-weight-normal">{{$formulario->empresa }}</span></p>
    <p class="text-dark font-weight-bold">TIEMPO LABORANDO EN LA EMPRESA: <span class="font-weight-normal">{{$formulario->tlaborando }}</span></p>
    <p class="text-dark font-weight-bold">CARGO QUE OCUPA: <span class="font-weight-normal">{{$formulario->cargo }}</span></p>
    <p class="text-dark font-weight-bold">SUELDO: <span class="font-weight-normal">{{$formulario->sueldo }}</span></p>
    <p class="text-dark font-weight-bold">JEFE INMEDIATO O SUPERVISOR: <span class="font-weight-normal">{{$formulario->jinmediato }}</span></p>
    <p class="text-dark font-weight-bold">TELÉFONO: <span class="font-weight-normal">{{$formulario->telefonojefe }}</span></p>
    <p class="text-dark font-weight-bold">OTROS INGRESOS: <span class="font-weight-normal">{{$formulario->otrosingresos }} DOP</span></p>
</div>
<hr>
{{--  Fin Datos LAborales  --}}

{{--  Inicio Referencias Personales  --}}
<div>
    <p class="text-dark font-weight-bold">REFERENCIAS PERSONALES:</p>
    <hr>
    <p class="text-dark font-weight-bold">NOMBRE Y APELLIDO: <span class="font-weight-normal">{{$formulario->nref1 }}</span></p>
    <p class="text-dark font-weight-bold">TELÉFONO: <span class="font-weight-normal">{{$formulario->teleref1 }}</span></p>
    <p class="text-dark font-weight-bold">PARENTESCO : <span class="font-weight-normal">{{$formulario->pref1 }}</span></p>
    <p class="text-dark font-weight-bold">DIRECCIÓN: <span class="font-weight-normal">{{$formulario->dirref1 }}</span></p>
    <br>
    <br>
    <p class="text-dark font-weight-bold">NOMBRE Y APELLIDO: <span class="font-weight-normal">{{$formulario->nref2 }}</span></p>
    <p class="text-dark font-weight-bold">TELÉFONO: <span class="font-weight-normal">{{$formulario->teleref2 }}</span></p>
    <p class="text-dark font-weight-bold">PARENTESCO : <span class="font-weight-normal">{{$formulario->pref2 }}</span></p>
    <p class="text-dark font-weight-bold">DIRECCIÓN: <span class="font-weight-normal">{{$formulario->dirref2 }}</span></p>
</div>
<hr>
{{--  Fin Referencias Personales  --}}

<div class="text-center">
    <img src="{{ asset('img/navlogo2.png') }}" alt="">
</div>
{{--  Inicio Informacion Bancaria  --}}
<div>
    <p class="text-dark font-weight-bold">INFORMACIÓN BANCARIA:</p>
    <hr>
    <p class="text-dark font-weight-bold">¿Vía cual Banco le pagan? <span class="font-weight-normal">{{$formulario->banconomina }}</span></p>
    <p>Proporcione una cuenta bancaria donde podamos depositarle el préstamo en caso de ser aprobado.</p>
    <p class="text-dark font-weight-bold">NÚM. CUENTA: <span class="font-weight-normal">{{$formulario->nrocuenta}}</span></p>
    <p class="text-dark font-weight-bold">NOMBRE DEL TITULAR : <span class="font-weight-normal">{{$formulario->titular }}</span></p>
    <p class="text-dark font-weight-bold">¿NOMBRE DEL BANCO: <span class="font-weight-normal">{{$formulario->bancocuenta }}</span></p>
    <p class="text-dark font-weight-bold">REFERIDO POR: <span class="font-weight-normal">{{$formulario->referido }}</span></p>
</div>
<hr>
{{--  Fin Informacion Bancaria  --}}

<p class="text-dark text-justify">Por medio del presente documento se autoriza, expresa e irrevocablemente a Inversiones Nisa, a consultar la base de datos de los Burós de Información Crediticia con la finalidad de verificar toda la información suministrada con respecto a esta solicitud de crédito. Asimismo, en caso de que la presente solicitud sea acogida, autorizo suministrar información respecto de esta solicitud y durante toda la negociación a cualquier buró de Información Crediticia.</p>
<br>
<br>
<p class="text-dark text-justify">La presente solicitud y autorización es realizada en el Distrito Municipal Turístico de Verón - Punta Cana, sector Friusa, Bávaro, Provincia La Altagracia, República Dominicana, a los ______________ (____) días del mes de _______________ del año dos mil veinte (2020).</p>
<br>
<br>
<br>
<div class="text-center">
    <p class="text-dark">_____________________________</p>
    <p class="text-dark">Firma</p>
</div>













</body>
</html>


