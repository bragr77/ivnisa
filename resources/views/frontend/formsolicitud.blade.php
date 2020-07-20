<!doctype html>
<html lang="es">

<head>
    <title>Inversiones Nisa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="{{  asset('img/favicon.png') }}"/>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{  asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{  asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{  asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{  asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{  asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{  asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{  asset('css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{  asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{  asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{  asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{  asset('css/style.css') }}">

    <link rel="stylesheet" href="{{  asset('css/floating-wpp.min.css') }}">

    <link href="{{  asset('css/botonflotante.css" rel="stylesheet') }}">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-rfs/bootstrap-rfs.css"> -->

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <!-- Inicio loading -->
    <div id="overlayer">
    </div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Fin loading -->

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <!-- inicio Header -->
        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6" >
                        <img src="img/navlogo2.png" alt="Logo Empresa">
                    </div>

                    <div class="col-6 d-flex justify-content-center">
                        <a class="btn btn-outline-primary" href="javascript:history.back(-1);" class="nav-link">Regresar</a>
                    </div>

                </div>
            </div>

        </header>
        <!-- Fin Header -->


    <form action="{{ route('formulario.store') }}" method="POST" class="p-4 bg-white card">
        @csrf

        <div class="container-fluid p-3">
        <!-- Inicio Sección Datos del prestamo -->
        <div class="site-section bg-light border-bottom my-5" id="datos-prestamo" data-aos="fade" data-aos-delay="400">

            <h2 class="text-center text-primary font-weight-bold">Formulario de Solicitud de Crédito</h2>
            <br>
            <br>
            <hr>
            <br>

               <h4 class="text-center">Datos del Préstamo</h4>
                <hr>
                <div class="row form-group">
                    <div class="col-md-6 my-1 ">
                        <label class="text-black " for="cantidad">Cantidad Solicitada en DOP:</label>
                        <input type="number" name="cantidad" id="cantidad " class="form-control" required>
                    </div>
                    <div class="form-group col-md-6 my-1">
                        <label for="cCuotas">Nro. de Cuotas:</label>
                        <select name="cuotas" id="cuotas" class="form-control" required>
                            <option selected disabled value="">Seleccionar...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                            <option value="10">10</option>
                            <option value="12">12</option>
                            <option value="14">14</option>
                            <option value="16">16</option>
                            <option value="18">18</option>
                            <option value="20">20</option>
                            <option value="22">22</option>
                            <option value="24">24</option>
                        </select>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="btn-group d-none d-xl-block d-lg-block">
                        <a class="btn btn-outline-danger" href="{{ url('/') }}">
                            <span class="icon-skip_previous font-weight-bold d-flex align-items-center d-flex justify-content-center" style="font-size: 23px">
                            </span>
                            Salir a la página de inicio
                        </a>
                        <a class="btn btn-outline-info" href="#datos-personales">
                            <span class="icon-skip_next font-weight-bold d-flex align-items-center d-flex justify-content-center" style="font-size: 23px">
                                </span>Continuar a Datos Personales
                            </a>
                    </div>
                    <div class="d-none d-xl-none d-lg-none d-md-block">
                        <a class="icon-skip_previous btn btn-outline-danger" href="{{ url('/') }}"></a>
                        <a class="icon-skip_next font-weight-bold btn btn-outline-info" href="#datos-personales"></span></a>
                    </div>
                </div>
        </div>
        <!-- Fin Sección datos del prestamo -->

        <!-- Inicio Sección Datos personales -->
        <div class="site-section bg-light border-bottom my-5" id="datos-personales" data-aos="fade" data-aos-delay="400">

            <h4 class="text-center">Información Personal</h4>
            <hr>
            <div class="row form-group">
                <div class="col-md-4 mb-1">
                    <label class="text-black " for="nombre">Nombre:</label>
                    <input type="text " name="nombre" id="nombre " class="form-control" required>
                </div>
                <div class="col-md-4 mb-1">
                    <label class="text-black " for="apellido">Apellido:</label>
                    <input type="text " name="apellido" id="apellido " class="form-control" required>
                </div>
                <div class="col-md-4 mb-1">
                    <label class="text-black " for="cedula">Nro. de Cédula:</label>
                    <input type="text " name="cedula" id="cedula " class="form-control" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 mb-1">
                    <label class="text-black " for="edocivil">Estado Civil:</label>
                    <select name="edocivil" id="edocivil" class="form-control" required>
                        <option selected disabled value="">Seleccionar...</option>
                        <option value="Soltero(a)">Soltero(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Divorciado(a)">Divorciado(a)</option>
                        <option value="Viudo(a)">Viudo(a)</option>
                    </select>
                </div>
                <div class="col-md-4 mb-1">
                    <label class="text-black " for="celular">Celular:</label>
                    <input type="text " name="celular" id="celular " class="form-control" required>
                </div>
                <div class="col-md-4 mb-1">
                    <label class="text-black " for="telefono">Teléfono Residencial:</label>
                    <input type="text " name="telefono" id="telefono " class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-8 mb-1">
                    <label class="text-black " for="email">Email:</label>
                    <input type="email" name="email" id="email " class="form-control" required>
                </div>
                <div class="col-md-4 mb-1">
                    <label class="text-black " for="nrohijos">Nro. de Hijos o Dependientes:</label>
                    <input type="number" name="nrohijos" id="nrohijos " class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6 mb-mb-1">
                    <label class="text-black " for="direccion">Dirección:</label>
                    <input type="text" name="direccion" id="direccion " class="form-control" required>
                </div>
                <div class="col-md-6 mb-1">
                    <label class="text-black " for="ptoerefe">Punto de Referencia:</label>
                    <input type="text" name="ptorefe" id="ptorefe " class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6 mb-1">
                    <label class="text-black " for="tiemporesidencia">Tiempo en la residencia:</label>
                    <input type="text" name="tiemporesidencia" id="tiemporesidencia " class="form-control" required>
                </div>
                <div class="col-md-6 mb-1">
                    <label class="text-black " for="tipovivienda">Propia o Alquilada:</label>
                    <input type="text" name="tipovivienda" id="tipovivienda " class="form-control" required>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="btn-group d-none d-xl-block d-lg-block">
                    <a class="btn btn-outline-danger" href="#datos-prestamo">
                        <span class="icon-skip_previous font-weight-bold d-flex align-items-center d-flex justify-content-center" style="font-size: 23px">
                        </span>
                        Regresar a Datos del Prestamo
                    </a>
                    <a class="btn btn-outline-info" href="#datos-laborales">
                        <span class="icon-skip_next font-weight-bold d-flex align-items-center d-flex justify-content-center" style="font-size: 23px">
                        </span>
                        Continuar a Datos Laborales
                    </a>
                </div>
                <div class="d-none d-xl-none d-lg-none d-md-block">
                    <a class="icon-skip_previous btn btn-outline-danger" href="#datos-prestamo"></a>
                    <a class="icon-skip_next font-weight-bold btn btn-outline-info" href="#datos-laborales"></span></a>
                </div>
            </div>

        </div>
        <!-- Fin Sección datos personales -->

        <!-- Inicio Sección Datos laborales -->
        <div class="site-section bg-light border-bottom my-5" id="datos-laborales" data-aos="fade" data-aos-delay="400">

            <h4 class="text-center">Información Laboral</h4>
            <br>
            <hr>
            <br>

            <div class="row form-group">
                <div class="col-md-4 mb-1">
                    <label class="text-black " for="slaboral">Situación Laboral:</label>
                    <select name="slaboral" id="slaboral" class="form-control" required>
                        <option selected disabled value="">Seleccionar...</option>
                        <option value="Empleado">Empleado</option>
                        <option value="Independiente">Independiente</option>
                    </select>
                </div>
                <div class="col-md-8 mb-1">
                    <label class="text-black " for="empresa">Empresa donde labora o Ocupación:</label>
                    <input type="text " name="empresa" id="empresa " class="form-control" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 mb-1">
                    <label for="tlaborando">Tiempo Laborando en la Empresa:</label>
                    <select name="tlaborando" id="tlaborando" class="form-control" required>
                        <option selected disabled value="">Seleccionar...</option>
                        <option value="Menos de 3 Meses ">Menos de 3 Meses</option>
                        <option value="0 a 3 Meses ">0 a 3 Meses</option>
                        <option value="3 a 6 Meses ">3 a 6 Meses</option>
                        <option value="6 a 11 Meses ">6 a 11 Meses</option>
                        <option value="de 1 a 2 Años ">de 1 a 2 Años</option>
                        <option value="de 2 a 3 Años ">de 2 a 3 Años</option>
                        <option value="de 3 a 4 Años ">de 3 a 4 Años</option>
                        <option value="de 4 a 5 Años ">de 4 a 5 Años</option>
                        <option value="Más de 5 Años ">Más 5 Años</option>
                    </select>
                </div>
                <div class="col-md-5 mb-1">
                    <label class="text-black " for="cargo">Cargo:</label>
                    <input type="text " name="cargo" id="cargo " class="form-control" required>
                </div>
                <div class="col-md-3 mb-1">
                    <label class="text-black " for="sueldo">Sueldo en DOP:</label>
                    <input type="number" name="sueldo" id="sueldo " class="form-control" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-5 mb-1">
                    <label class="text-black " for="jinmediato">Jefe Inmediato o Supervisor:</label>
                    <input type="text " name="jinmediato" id="jinmediato " class="form-control" required>
                </div>
                <div class="col-md-4 mb-1">
                    <label class="text-black " for="telefonojefe">Teléfono:</label>
                    <input type="text " name="telefonojefe" id="telefonojefe " class="form-control" required>
                </div>
                <div class="col-md-3 mb-1">
                    <label class="text-black " for="otrosingresos">Otros Ingresos:</label>
                    <input type="text" name="otrosingresos" id="otrosingresos " class="form-control">
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="btn-group d-none d-xl-block d-lg-block">
                    <a class="btn btn-outline-danger" href="#datos-personales">
                        <span class="icon-skip_previous font-weight-bold d-flex align-items-center d-flex justify-content-center" style="font-size: 23px">
                        </span>
                        Regresar a Datos Personales
                    </a>
                    <a class="btn btn-outline-info" href="#referencias-personales">
                        <span class="icon-skip_next font-weight-bold d-flex align-items-center d-flex justify-content-center" style="font-size: 23px">
                        </span>
                        Continuar a Referencias Personales
                    </a>
                </div>
                <div class="d-none d-xl-none d-lg-none d-md-block">
                    <a class="icon-skip_previous btn btn-outline-danger" href="#datos-prestamo"></a>
                    <a class="icon-skip_next font-weight-bold btn btn-outline-info" href="#datos-laborales"></span></a>
                </div>
            </div>

        </div>
        <!-- Fin Sección datos laborales -->

        <!-- Inicio Sección Referencia personales -->
        <div class="site-section bg-light border-bottom my-5" id="referencias-personales" data-aos="fade" data-aos-delay="400">

            <h4 class="text-center">Referencias Personales</h4>
            <hr>

            <h4>Primera referencia personal:</h4>
            <br>
            <div class="row form-group">
                <div class="col-md-6 mb-1">
                    <label class="text-black " for="nref1">Nombre y Apellido:</label>
                    <input type="text " name="nref1" id="nref1 " class="form-control" required>
                </div>
                <div class="col-md-6 mb-1">
                    <label class="text-black " for="teleref1">Teléfono:</label>
                    <input type="text " name="teleref1" id="teleref1 " class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3 mb-1">
                    <label class="text-black " for="prefe1">Parentesco:</label>
                    <input type="text " name="pref1" id="pref1 " class="form-control" required>
                </div>
                <div class="col-md-9 mb-1">
                    <label class="text-black " for="dirref1">Dirección:</label>
                    <input type="text " name="dirref1" id="dirref1 " class="form-control" required>
                </div>
            </div>

            <h4>Segunda referencia personal:</h4>
            <br>

            <div class="row form-group">
                <div class="col-md-6 mb-1">
                    <label class="text-black " for="nref2">Nombre y Apellido:</label>
                    <input type="text " name="nref2" id="nref2 " class="form-control" required>
                </div>
                <div class="col-md-6 mb-1">
                    <label class="text-black " for="teleref2">Teléfono:</label>
                    <input type="text " name="teleref2" id="teleref2 " class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3 mb-1">
                    <label class="text-black " for="prefe2">Parentesco:</label>
                    <input type="text " name="pref2" id="pref2 " class="form-control" required>
                </div>
                <div class="col-md-9 mb-1">
                    <label class="text-black " for="dirref2">Dirección:</label>
                    <input type="text " name="dirref2" id="dirref2 " class="form-control" required>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="btn-group d-none d-xl-block d-lg-block">
                    <a class="btn btn-outline-danger" href="#datos-laborales">
                        <span class="icon-skip_previous font-weight-bold d-flex align-items-center d-flex justify-content-center" style="font-size: 23px">
                        </span>
                        Regresar a Datos Laborales
                    </a>
                    <a class="btn btn-outline-info" href="#informacion-bancaria">
                        <span class="icon-skip_next font-weight-bold d-flex align-items-center d-flex justify-content-center" style="font-size: 23px">
                        </span>
                        Continuar a Información Bancaria
                    </a>
                </div>
                <div class="d-none d-xl-none d-lg-none d-md-block">
                    <a class="icon-skip_previous btn btn-outline-danger" href="#datos-laborales"></a>
                    <a class="icon-skip_next font-weight-bold btn btn-outline-info" href="#informacion-bancaria"></span></a>
                </div>
            </div>



        </div>
        <!-- Fin Sección Referencia personales -->

        <!-- Inicio Sección Información Bancaria -->
        <div class="site-section bg-light border-bottom my-5" id="informacion-bancaria" data-aos="fade" data-aos-delay="400">

            <h4 class="text-center">Información Bancaria</h4>
            <hr>

            <div class="row form-group">
                <div class="col-md-6 mb-1">
                    <label class="text-black " for="banconomina">¿Vía que Banco le pagan?</label>
                    <input type="text " name="banconomina" id="banconomina " class="form-control" required>
                </div>
            </div>
            <hr>
            <p>Proporcione una cuenta bancaria donde podamos depositarle el préstamo en caso de ser aprobado.</p>

            <div class="row form-group">
                <div class="col-md-6 mb-1">
                    <label class="text-black " for="nrocuenta">Nro. de Cuenta:</label>
                    <input type="text " name="nrocuenta" id="nrocuenta " class="form-control" required>
                </div>
                <div class="col-md-6 mb-1">
                    <label class="text-black " for="titular">Nombre del Titular:</label>
                    <input type="text " name="titular" id="titular " class="form-control" required>
                </div>
                <div class="col-md-6 mb-1">
                    <label class="text-black " for="bancocuenta">Nombre del Banco:</label>
                    <input type="text " name="bancocuenta" id="bancocuenta " class="form-control" required>
                </div>
            </div>
            <hr>

            <div class="row form-group">
                <div class="col-md-6 mb-1">
                    <label class="text-black " for="referido">Referido Por:</label>
                    <input type="text " name="referido" id="referido " class="form-control">
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="btn-group d-none d-xl-block d-lg-block">
                    <a class="btn btn-outline-danger" href="#referencias-personales">
                        <span class="icon-skip_previous font-weight-bold d-flex align-items-center d-flex justify-content-center" style="font-size: 23px">
                        </span>
                        Regresar a Referencias Personales
                    </a>
                    <button type="submit " value="Enviar " class="btn btn-primary">
                        <span class="icon-skip_next font-weight-bold d-flex align-items-center d-flex justify-content-center" style="font-size: 23px">
                        </span>
                        Enviar Formulario
                    </button>
                </div>
                <div class="d-xl-none d-lg-none">
                    <button type="submit " value="Enviar " class="btn btn-primary">
                        Enviar Formulario
                    </button>
                </div>
            </div>
        </div>
        <!-- Fin Sección Información Bancaria -->

        </div>

    </form>

        <!-- Inicio Sección footer -->
        <footer class="site-footer ">
            <div class="container-fluid px-5">
                <div class="row">


                    <div class="col-md-4 text-center ">
                        <img src="img/footerlogo.png " class="mb-3 " alt="Logo Empresa ">
                        <p class="text-justify ">Somos una empresa de servicios financieros enfocada en ser aliados estratégicos de cada cliente, ofreciéndole una alternativa de financiación fácil y rápida para el logro de sus objetivos o situaciones imprevista que requieren solución rápida.</p>
                    </div>

                    <div class="col-md-4 footer-social text-center ">
                        <h2 class="footer-heading mb-6 ">Redes Sociales</h2>
                        <div class="mt-5">
                            <a href="https://www.facebook.com/inversionesnisa" class="pl-0 pr-3 " style="font-size: 52px;" target="_blank"><span class="icon-facebook "></span></a>
                            <a href="# " class="pl-3 pr-3 " style="font-size: 52px; "><span class="icon-twitter "></span></a>
                            <a href="https://www.instagram.com/inversionesnisa/" class="pl-3 pr-3 " style="font-size: 52px;" target="_blank"><span class="icon-instagram "></span></a>
                        </div>
                    </div>


                    <div class="col-md-4 text-justify ">
                        <h2 class="footer-heading mb-4 text-center">Contacto</h2>
                        <span class="icon-room text-justify" style="font-size: 32px; color: #FD7E14"></span>
                        <span style="color: #fff;">Bávaro, La Altagracia. República Dominicana</span>
                        <br>
                        <br>
                        <span class="icon-phone_iphone" style="font-size: 32px; color: #FD7E14"></span>
                        <span style="color: #fff;">+1 (829) 3129274</span>
                        <br>
                        <br>
                        <span class="icon-mail_outline" style="font-size: 32px; color: #FD7E14"></span>
                        <span style="color: #fff;">info@inversionesnisa.com</span>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center ">
                    <div class="col-md-12 ">
                        <div class="border-top pt-5 ">
                            <p class="copyright ">
                                <small>
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Este sitio web fue creado Por: <a href="https://nitidezcreativa.com " target="_blank
                        " >NitidezCreativaRD</a> & <a href="https://rgonzalez.com.ve " target="_blank " >Raúl González</a>
                                </small>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        <!-- Fin Sección footer -->

        <!-- .site-wrap -->

    </div>


    <script src="{{  asset('js/calprestamo.min.js') }}') }}"></script>
    <script src="{{  asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{  asset('js/floating-wpp.min.js') }}"></script>
    <script src="{{  asset('js/jquery-ui.js') }}"></script>
    <script src="{{  asset('js/bootstrap.min.js') }}"></script>
    <script src="{{  asset('js/popper.min.js') }}"></script>
    <script src="{{  asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{  asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{  asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{  asset('js/aos.js') }}"></script>
    <script src="{{  asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{  asset('js/jquery.sticky.js') }}"></script>
    <script src="{{  asset('js/isotope.pkgd.min.js') }}"></script>


    <script src="{{  asset('js/main.js') }}"></script>



</body>


</html>
