<!doctype html>
<html lang="es">

<head>
    <title>Inversiones Nisa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="img/favicon.png" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/floating-wpp.min.css">

    <link href="css/botonflotante.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-rfs/bootstrap-rfs.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    {{--  Inicio loading --}}
    <div id="overlayer">
    </div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    {{--  Fin loading --}}

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        {{--  inicio Menu --}}
        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2">
                        <a href="{{ route('panel') }}">
                            <img src="img/navlogo2.png" alt="Logo Empresa">
                        </a>
                    </div>

                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="#home-section" class="nav-link">Inicio</a></li>
                                <li><a href="#about-section" class="nav-link">Nosotros</a></li>
                                <li><a href="#pricing-section" class="nav-link">Servicios</a></li>
                                <li><a href="#contact-section" class="nav-link">Contáctenos</a></li>
                                <li class="social"><a href="#" class="nav-link"><span class="icon-facebook"></span></a></li>
                                <li class="social"><a href="#" class="nav-link"><span class="icon-twitter"></span></a></li>
                                <li class="social"><a href="#" class="nav-link"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </nav>
                    </div>


                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

                </div>
            </div>

        </header>
        {{--  Fin Menu --}}

        {{--  Inicio Seccion Inicio Slider --}}
        <div class="site-blocks-cover overlay" style="background-image: url(img/hero1.jpg);" data-aos="fade" id="home-section">

            <div class="container">
                <div class="row align-items-center justify-content-center">

                    {{--  Aqui van los sliders --}}
                    <div class="col-md-10 mt-lg-5 text-center">
                        <div class="single-text owl-carousel">

                            <div class="slide">
                                <h1 class="text-uppercase" data-aos="fade-up">Préstamos Personales</h1>
                                <p class="mb-5 desc font-weight-bold" data-aos="fade-up" data-aos-delay="100">Aprobación inmediata a las mejores tasas, solicitud online y presencial.</p>
                            </div>
                            <div class="slide">
                                <h1 class="text-uppercase" data-aos="fade-up">Préstamos Comerciales</h1>
                                <p class="mb-5 desc font-weight-bold" data-aos="fade-up" data-aos-delay="100">Aprobación inmediata a las mejores tasas, solicitud online y presencial.</p>
                            </div>
                            <div class="slide">
                                <h1 class="text-uppercase" data-aos="fade-up">Préstamos Hipotecarios</h1>
                                <p class="mb-5 desc font-weight-bold" data-aos="fade-up" data-aos-delay="100">Aprobación inmediata a las mejores tasas, solicitud online y presencial.</p>
                            </div>
                            <div class="slide">
                                <h1 class="text-uppercase" data-aos="fade-up">Financiamientos de Vehículos o Inmuebles</h1>
                                <p class="mb-5 desc font-weight-bold" data-aos="fade-up" data-aos-delay="100">Aprobación inmediata a las mejores tasas, solicitud online y presencial.</p>
                            </div>
                            <div class="slide">
                                <h1 class="text-uppercase" data-aos="fade-up">Consolidación de deudas</h1>
                                <p class="mb-5 desc font-weight-bold" data-aos="fade-up" data-aos-delay="100">Aprobación inmediata a las mejores tasas, solicitud online y presencial.</p>
                            </div>
                            <div class="slide">
                                <h1 class="text-uppercase" data-aos="fade-up">Reparación de Historial Crediticio</h1>
                                <p class="mb-5 desc font-weight-bold" data-aos="fade-up" data-aos-delay="100">Aprobación inmediata a las mejores tasas, solicitud online y presencial.</p>
                            </div>

                        </div>
                        <div class="mt-4">
                            {{--  Button trigger modal --}}
                            <button type="button" class="btn btn-success m-2" data-toggle="modal" data-target="#exampleModal">
                                Calcular Préstamo
                            </button>
                            <button href="#" class="btn btn-primary m-2">Solicitar Préstamo</button>
                        </div>
                    </div>
                    {{--  Final de Aqui van los sliders --}}

                </div>

            </div>


            <a href="#about-section" class="mouse smoothscroll">
                <span class="mouse-icon">
                <span class="mouse-wheel"></span>
                </span>
            </a>
        </div>
        {{--  Fin Seccion Inicio Slider --}}

        {{--  Inicio Sección Quienes Somos --}}
        <div class="site-section bg-light border-bottom" id="about-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Inversiones Nisa</h2>
                        <p class="lead" data-aos="fade-up" data-aos-delay="100">Somos una empresa que desde el año xxxx hemos entregado a los dominicanos, soluciones financieras que los ayudan a impulsar sus negocios y a solventar de manera rápida emergencias inesperadas. </p>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                        <figure class="circle-bg">
                            <img src="img/n1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid img-thumbnail shadow-lg">
                        </figure>
                    </div>
                    <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">

                        <h1 class="text-primary mb-4">
                            <strong>Te ayudamos a crecer</strong>
                        </h1>

                        <span class="icon-check-square-o" style="font-size: 20px; color: #074C46"></span>
                        <span>Tasas atractivas y justas.</span>
                        <br/>

                        <span class="icon-check-square-o" style="font-size: 20px; color: #074C46"></span>
                        <span>Cuotas a tu medida</span>
                        <br/>

                        <span class="icon-check-square-o" style="font-size: 20px; color: #074C46"></span>
                        <span>Trámite sencillo.</span>
                        <br/>

                        <span class="icon-check-square-o" style="font-size: 20px; color: #074C46"></span>
                        <span>Sin gastos de cierre.</span>
                        <br/>

                        <span class="icon-check-square-o" style="font-size: 20px; color: #074C46"></span>
                        <span>Aprobación inmediata.</span>
                        <br/>

                        <span class="icon-check-square-o" style="font-size: 20px; color: #074C46"></span>
                        <span>Flexibilidad con los pagos.</span>
                        <br/>

                        <span class="icon-check-square-o" style="font-size: 20px; color: #074C46"></span>
                        <span>Sin bancos.</span>
                        <br/>

                        <span class="icon-check-square-o" style="font-size: 20px; color: #074C46"></span>
                        <span>No importa tu historial crediticio.</span>
                        <br/>

                        <span class="icon-check-square-o" style="font-size: 20px; color: #074C46"></span>
                        <span>Asesoria financiera incluida.</span>



                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">

                        <h1 class="text-primary mb-4">
                            <strong>Nuestros Valores</strong>
                        </h1>

                        <span class="icon-check-square-o" style="font-size: 20px; color: #074C46"></span>
                        <span class="font-weight-bold" style="font-size: 24px;">Honestidad:</span>
                        <p class="text-justify">Trabajamos día a día para brindarle un servicio seguro y transparente a nuestros clientes.</p>

                        <span class="icon-check-square-o" style="font-size: 20px; color: #074C46"></span>
                        <span class="font-weight-bold" style="font-size: 24px;">Eficiencia:</span>
                        <p class="text-justify">Nos enfocamos en hacer todas las solicitudes nuestra prioridad, y desarrollamos procesos eficientes para lograr de una manera rápida la aprobación de tu crédito.</p>

                        <span class="icon-check-square-o" style="font-size: 20px; color: #074C46"></span>
                        <span class="font-weight-bold" style="font-size: 24px;">Confianza</span>
                        <p class="text-justify">Apoyamos a nuestros clientes es por ello que creamos nuevas oportunidades para su emprendimiento, y hacemos que se sientan seguros del crédito que van a recibir.</p>

                    </div>

                    <div class="col-lg-6 mt-5" data-aos="fade-up" data-aos-delay="">
                        <figure class="circle-bg">
                            <img src="img/n2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid img-thumbnail shadow-lg">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        {{--  Fin Sección Quienes Somos --}}

        {{--  inicio seccion prestamos --}}
        <section class="site-section border-bottom" id="pricing-section">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-12 text-center" data-aos="fade-up">
                        <h2 class="section-title mb-3">Préstamos</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card resaltar my-2" data-aos=" fade-up " data-aos-delay=" ">
                            <img src="img/p_personal.jpg " class="card-img-top" alt="... ">
                            <div class="card-body text-center ">
                                <h5 class="card-title text-primary font-weight-bold ">Personales</h5>
                                <p class="card-text text-justify ">"Descripcion del préstamo personal ". Aprobación en menos de 24 horas</p>
                            </div>
                            <div class="card-footer btn-group ">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#card1">
                                    Requsitos
                                </button>
                                <a href="# " class="btn btn-primary btn-sm ">Solicitar</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card resaltar my-2" data-aos="fade-up " data-aos-delay="100 ">
                            <img src="img/p_comercial.jpg " class="card-img-top" alt="... ">
                            <div class="card-body text-center ">
                                <h5 class="card-title text-primary font-weight-bold ">Comerciales</h5>
                                <p class="card-text text-justify ">"Descripcion del préstamo comercial ". aprobación en menos de 24 horas.</p>
                            </div>
                            <div class="card-footer btn-group ">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#card2">
                                    Requsitos
                                </button>
                                <a href="# " class="btn btn-primary btn-sm ">Solicitar</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card resaltar my-2" data-aos="fade-up " data-aos-delay="200 ">
                            <img src="img/p_inmueble.jpg " class="card-img-top" alt="... ">
                            <div class="card-body text-center ">
                                <h5 class="card-title text-primary font-weight-bold ">Hipotecario</h5>
                                <p class="card-text text-justify ">"Descripcion del préstamo hipotecario ". Aprobación en menos de 24 horas.</p>
                            </div>
                            <div class="card-footer btn-group ">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#card3">
                                    Requsitos
                                </button>
                                <a href="# " class="btn btn-primary btn-sm ">Solicitar</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card resaltar my-2" data-aos="fade-up " data-aos-delay="300 ">
                            <img src="img/p_vehiculo.jpg " class="card-img-top" alt="... ">
                            <div class="card-body text-center ">
                                <h5 class="card-title text-primary font-weight-bold ">Con Garantía</h5>
                                <p class="card-text text-justify ">"Descripción del préstamo con garatía ", aprobación en menos de 24 horas.</p>
                            </div>
                            <div class="card-footer btn-group ">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#card4">
                                    Requsitos
                                </button>
                                <a href="# " class="btn btn-primary btn-sm ">Solicitar</a>
                            </div>
                        </div>
                    </div>

                    {{--  Modal de los requisitos de la cards --}}
                    <div class="modal fade" id="card1" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Requisitos para el préstamo personal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body ">
                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 1 Préstamo personal</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 2 Préstamo personal</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 3 Préstamo personal</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 4 Préstamo personal</span>
                                    <br>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 5 Préstamo personal</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 6 Préstamo personal</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 7 Préstamo personal</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 8 Préstamo personal</span>
                                </div>
                                <div class="modal-footer">
                                    <a href="# " class="btn btn-primary ">Solicitar</a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="card2" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Requisitos para el prestamo comercial</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body ">
                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 1 Préstamo Comercial</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 2 Préstamo Comercial</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 3 Préstamo Comercial</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 4 Préstamo Comercial</span>
                                    <br>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 5 Préstamo Comercial</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 6 Préstamo Comercial</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 7 Préstamo Comercial</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 8 Prestamo Comercial</span>
                                </div>
                                <div class="modal-footer">
                                    <a href="# " class="btn btn-primary ">Solicitar</a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="card3" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Requisitos para el prestamo hipotecario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body ">
                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 1 Prestamo Hipotecario</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 2 Prestamo Hipotecario</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 3 Prestamo Hipotecario</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 4 Prestamo Hipotecario</span>
                                    <br>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 5 Prestamo Hipotecario</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 6 Prestamo Hipotecario</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 7 Prestamo Hipotecario</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 8 Prestamo Hipotecario</span>
                                </div>
                                <div class="modal-footer">
                                    <a href="# " class="btn btn-primary ">Solicitar</a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="card4" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Requisitos para los prestamos con garantía</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body ">
                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 1 Préstamo con garantía</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 2 Préstamo con garantía</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 3 Préstamo con garantía</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 4 Préstamo con garantía</span>
                                    <br>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 5 Préstamo con garantía</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 6 Préstamo con garantía</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 7 Préstamo con garantía</span>
                                    <br/>

                                    <span class="icon-check-square-o " style="font-size: 20px; color: #FD7E14 "></span>
                                    <span>Requisito 8 Préstamo con garantía</span>
                                </div>
                                <div class="modal-footer">
                                    <a href="# " class="btn btn-primary ">Solicitar</a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  fin seccion prestamos --}}

        {{--  inicio sección pasos --}}
        <section class="site-section border-bottom " id="pasos-section ">
            <div class="container ">

                <div class="row mb-5 justify-content-center ">
                    <div class="col-md-7 text-center ">
                        <h2 class="section-title mb-3 " data-aos="fade-up" data-aos-delay=" ">Pasos para aplicar</h2>
                        <p class="lead " data-aos="fade-up " data-aos-delay="">Pasos que debes seguir para gestionar tu préstamo</p>
                    </div>
                </div>

                <div class="row align-items-lg-center ">
                    <div class="col-lg-6 mb-5 " data-aos="fade-up" data-aos-delay="100">

                        <div class="owl-carousel slide-one-item-alt ">
                            <img src="img/slide_4.jpg " alt="Image " class="img-fluid ">
                            <img src="img/slide_2.jpg " alt="Image " class="img-fluid ">
                            <img src="img/slide_3.jpg " alt="Image " class="img-fluid ">
                        </div>
                        <div class="custom-direction ">
                            <a href="# " class="custom-prev "><span><span class="icon-keyboard_backspace "></span></span></a><a href="# " class="custom-next "><span><span class="icon-keyboard_backspace "></span></span></a>
                        </div>

                    </div>
                    <div class="col-lg-5 ml-auto " data-aos="fade-up " data-aos-delay="200">

                        <div class="owl-carousel slide-one-item-alt-text ">
                            <div>
                                <h2 class="section-title mb-3 ">01. Formulario en linea</h2>
                                <p>Registrate mediante nuestro formulario online, y llena todos los datos requeridos en el mismo.</p>

                                <p><a href="# " class="btn btn-primary mr-2 mb-2 ">Solicitar</a></p>
                            </div>
                            <div>
                                <h2 class="section-title mb-3 ">02. Estudio de tu caso</h2>
                                <p>Nuestro equipo analizaran la información registrada, en un lapso de XX horas.</p>
                                <p><a href="# " class="btn btn-primary mr-2 mb-2 ">Solicitar</a></p>
                            </div>
                            <div>
                                <h2 class="section-title mb-3 ">03. Aprobación y Contacto</h2>
                                <p>Una vez aprobado su préstamo, lo contactaremos.</p>

                                <p><a href="# " class="btn btn-primary mr-2 mb-2 ">Solicitar</a></p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        {{--  fin sección pasos --}}

        {{--  Inicio Seccion contacto --}}
        <section class="site-section bg-light border-bottom " id="contact-section">
            <div class="container ">
                <div class="row mb-5 ">
                    <div class="col-12 text-center ">
                        <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay=" ">Contáctanos</h2>
                    </div>
                </div>
                <div class="row mb-5 ">
                    <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
                        <p class="mb-4 ">
                            <span class="icon-room d-block h2 text-primary" style="font-size: 52px;"></span>
                            <span class="font-weight-bold">Bávaro, La Altagracia. República Dominicana</span>
                        </p>
                    </div>
                    <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
                        <p class="mb-4 ">
                            <span class="icon-phone_iphone d-block h2 text-primary" style="font-size: 52px;"></span>
                            <span class="font-weight-bold">+1 (829) 3129274</span>
                        </p>
                    </div>
                    <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="300">
                        <p class="mb-0 ">
                            <span class="icon-mail_outline d-block h2 text-primary" style="font-size: 52px;"></span>
                            <span class="font-weight-bold">info@inversionesnisa.com</span>
                        </p>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12 mb-5 ">
                        <form action="{{ route('mensaje.store') }}" method="POST" class="p-5 bg-white ">

                            <h2 class="h4 text-black mb-5 ">Envienos un Mensaje</h2>

                            @csrf

                            <div class="row form-group ">
                                <div class="col-md-6 mb-3 mb-md-0 ">
                                    <label class="text-black " for="fname ">Nombre</label>
                                    <input type="text " name="nombre" id="fname " class="form-control ">
                                </div>
                                <div class="col-md-6 ">
                                    <label class="text-black " for="lname ">Apellido</label>
                                    <input type="text" name="apellido" id="lname " class="form-control ">
                                </div>
                            </div>

                            <div class="row form-group ">
                                <div class="col-md-6 mb-3 mb-md-0 ">
                                    <label class="text-black " for="email ">Email</label>
                                    <input type="email" name="email" id="email " class="form-control ">
                                </div>
                                <div class="col-md-6 mb-3 mb-md-0 ">
                                    <label class="text-black " for="subject ">Asunto</label>
                                    <input type="subject" name="asunto" id="subject " class="form-control ">
                                </div>
                            </div>

                            <div class="row form-group ">
                                <div class="col-md-12 ">
                                    <label class="text-black " for="message ">Mensaje</label>
                                    <textarea name="mensaje" id="message " cols="30 " rows="4" class="form-control " placeholder="Escriba su mensaje aqui... "></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <button type="submit " value="Enviar " class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        {{--  Fin Seccion contacto --}}


        {{--   Incio sección feed Instagram Monitores grandes --}}
        <section class="d-none d-xl-block d-lg-block">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-md-7 text-center ">
                        <h2 class="section-title mb-3 " data-aos="fade-up" data-aos-delay=" ">Instagram</h2>
                        <p class="lead " data-aos="fade-up " data-aos-delay="">Sigue nuestros Post y mantente actualizado sobre nuestros servicios.</p>
                    </div>
                </div>
            </div>
            {{--  LightWidget WIDGET --}}
            <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/0f112bee5f395f3c83b973c51a914820.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
        </section>
        {{--  fin sección feed Instagram Monitores grandes --}}
        {{--   Incio sección feed Instagram dispostivos moviles --}}
        <section class="d-xl-none d-lg-none">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-md-7 text-center ">
                        <h2 class="section-title mb-3 " data-aos="fade-up" data-aos-delay=" ">Instagram</h2>
                        <p class="lead " data-aos="fade-up " data-aos-delay="">Sigue nuestros Post y mantente actualizado sobre nuestros servicios.</p>
                    </div>
                </div>
            </div>
            {{--  LightWidget WIDGET --}}
            <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/5d41ffd97fcb579f9f3102dd930a1606.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
        </section>
        {{--  fin sección Instagram dispostivos moviles --}}

        {{--  Inicio Sección footer --}}
        <footer class="site-footer ">
            <div class="container-fluid px-5">
                <div class="row">


                    <div class="col-md-4 text-center ">
                        <img src="img/footerlogo.png " class="mb-3 " alt="Logo Empresa ">
                        <p class="text-justify ">Somos una empresa que apoyamos a los dominicanos, ofrecemos soluciones financieras que los ayudan a impulsar sus negocios y a solventar de manera rápida emergencias inesperadas.</p>
                    </div>

                    <div class="col-md-4 footer-social text-center ">
                        <h2 class="footer-heading mb-6 ">Redes Sociales</h2>
                        <div class="mt-5">
                            <a href="# " class="pl-0 pr-3 " style="font-size: 52px; "><span class="icon-facebook "></span></a>
                            <a href="# " class="pl-3 pr-3 " style="font-size: 52px; "><span class="icon-twitter "></span></a>
                            <a href="# " class="pl-3 pr-3 " style="font-size: 52px; "><span class="icon-instagram "></span></a>
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
                        <span style="color: #fff;">nisacreditos@gmail.com</span>
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
        {{--  Fin Sección footer --}}

        {{--  .site-wrap --}}

        {{--  Botones flotantes de whatsapp --}}
        <div class="d-none d-xl-block d-lg-block" id="myButton"></div>
        <div class="btn-whatsapp d-xl-none d-lg-none">
            <a href="https://api.whatsapp.com/send?phone=+18293129274" target="_blank">
                <img src="img/whatspp.png" alt="logo whatsapp" style="width: 52px; height: 52px;">
            </a>
        </div>
        {{--  Fin Botones flotantes de whatsapp --}}

    </div>

    {{--  Modal Formulario Calculo de prestamo --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="img/navlogo2.png" alt="Logo Empresa">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="container text-center mb-4">
                        <h5 class="modal-title text-primary font-weight-bold" id="exampleModalLabel">Calcula tu Prestamo Personal.</h5>
                    </div>
                    <div class="container">
                        <form name="formCalPres">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="montoPrestamo">Monto a solicitar en DOP</label>
                                    <input type="number" class="form-control" name="montoPrestamo" id="montoPrestamo" value="0" onchange="cal()" onkeyup="cal()">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="nroCuotas">Nro. de Cuotas Quincenales</label>
                                    <select name="nroCuotas" id="nroCuotas" class="form-control" value="0" onchange="cal()" onkeyup="cal()">
                                        <option selected disabled value="0">Seleccionar...</option>
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

                            <div class="form-row">

                                <div class="form-group col-md-6" hidden>
                                    <label for="montoPagar">Monto de la Deuda en DOP</label>
                                    <input type="text" class="form-control" id="montoPagar" readonly>
                                </div>

                                <div class="form-group" hidden>
                                    <label for="montoCuota">Monto de la Cuota Oculto</label>
                                    <input type="number" class="form-control" name="montoCuota" id="montoCuota" readonly>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="montoCuotaV">Monto de la Cuota en DOP</label>
                                    <input type="text" class="form-control" id="montoCuotaV" readonly>
                                </div>

                            </div>

                            {{--  <button type="submit" class="btn btn-primary">Sign in</button> --}}
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                </div>
            </div>
        </div>
    </div>


    <script src="js/calprestamo.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/floating-wpp.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>


    <script src="js/main.js"></script>



</body>
<script type="text/javascript">
    $(function() {
        $('#myButton').floatingWhatsApp({
            phone: '+18293129274',
            popupMessage: '¿Cómo podemos Ayudarte?',
            message: "Ingresa tu mensaje aquí...",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Chatea con nosotros.',
            headerColor: '#128C7E',
            backgroundColor: '#fff',
            buttonImage: '<img src="img/whatsapp.svg" />'
        });
    });
</script>

</html>
