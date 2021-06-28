<?php
include_once('lib/enviar_solicitud.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sigatours">
    <meta name="keywords" content="sigatours, travel, viajar, viajes, agencias">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>::Franquicias::</title>
    <!--Icon-->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./dashboard/assets/css/style.css" type="text/css">
    <!-- <link rel="stylesheet" href="./dashboard/assets/css/adminlte.css" type="text/css"> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <!-- <i class="icon_search"></i> -->
        </div>
        <div class="header-configure-area">

        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li ><a href="./index.php"><i class="fa fa-home partext2"></i>&nbsp;Inicio</a></li>
                <li class="active"><a href="./franquicias.php"><i class="fa fa-building-o partext2"></i>&nbsp;Franquicias</a></li>
                <li><a href="./index.php#destinos"><i class="fa fa-plane partext2"></i>&nbsp;Destinos</a></li>

            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (52) 417-172-4441</li>
            <li><i class="fa fa-envelope"></i> reservaciones@sigatours.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> (52) 417-172-4441</li>
                            <li><i class="fa fa-envelope"></i> reservaciones@sigatours.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
             
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.php">
                                <img src="img/logo.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li ><a href="./index.php"><i class="fa fa-home partext2"></i>&nbsp;Inicio</a></li>
                                    <li class="active"><a href="./franquicias.php"><i class="fa fa-building-o partext2"></i>&nbsp;Franquicias</a></li>
                                    <li><a href="./index.php#destinos"><i class="fa fa-plane partext2"></i>&nbsp;Destinos</a></li>
                                 
                                </ul>
                            </nav>
                            <div class="nav-right">
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar aquí" aria-label="Search">
                                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

<!-- Services Section End -->
<section class="services-section spad" id="franquicias">

<div class="container">
    <!-- <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
                <span>FRANQUICIAS</span>
                <hr>
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="section-title">
                <h3 class="negrita">Ventajas de tener una Franquicia Sigatours</h3>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
            <div class="section-title">
                <p class="text-justify partext ml-4"> <strong> EN LA INDUSTRIA DEL TURISMO</strong></p>
                <ul class=" text-justify quitpoint">       
                    <li> <p><i class="far fa-check-circle partext2 "></i>&nbsp; Estamos reconocidos entre las 10 mejores agencias de viajes en el Bajío. </p></li>
                    <li> <p><i class="far fa-check-circle partext2 mt-2 "></i>&nbsp; Contamos con el REGISTRO NACIONAL Y ESTATAL DE TURISMO.</p></li>
                    <li> <p><i class="far fa-check-circle partext2 mt-2 "></i>&nbsp; Hemos sido reconocidos con el distintivo MARCA GUANAJUATO.</p> </li>
                    <li><p> <i class="far fa-check-circle partext2 mt-2 "></i>&nbsp; Contamos con el reconocimiento de AMAV CDMX, por medio de nuestra empresa hermana y operadora mayorista: Holiday Travel S.A de C.V. </p></li>

                </ul>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-12 ">
            <div class="section-title">
                <p class="text-justify partext ml-5"> <strong> EN OTROS GIROS</strong></p>
                <ul class="text-justify quitpoint">

                <li> <p><i class="far fa-check-circle partext2"></i>&nbsp; La principal ventaja de franquiciar una agencia de viajes es que puedes tener un negocio de renombre a un costo muy pequeño.</p> </li>
                <li> <p><i class="far fa-check-circle partext2 mt-2"></i>&nbsp;Las franquicias de agencias de viajes siempre tienen clientes y nunca se quedan sin "stock", ya que siempre existen viajes disponibles y no hay perdidas de inventario. </p></li>
                <li> <p><i class="far fa-check-circle partext2 mt-2"></i>&nbsp; Es un giro que sigue creciendo, ya que México es un país con vocación netamente turística y siempre existe demanda en el sector.</p> </li>
                <li> <p><i class="far fa-check-circle partext2 mt-2"></i>&nbsp; Este tipo de negocios son muy rentables porque la inversión no es muy alta y se pueden obtener muchos beneficios en el corto plazo. </p> </li>

                </ul>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
            <div class="section-title">
                <p class="text-justify partext ml-4"> <strong> VENTAJAS DE SIGATOURS</strong></p>
                <ul class="text-justify quitpoint">
                <li><p> <i class="far fa-check-circle partext2"></i>&nbsp;Contamos con nuestra propia Operadora Mayorista:  Holiday Travel Operadora Mayorista S.A de C.V.</p> </li>
                <li> <p><i class="far fa-check-circle partext2  mt-2 "></i>&nbsp;Gran influencia comercial en la región. </p> </li>
                <li> <p> <i class="far fa-check-circle partext2  mt-2"></i>&nbsp;Contamos con oficinas en León, Gto., Morelia, Mich., Maravatío, Mich., Acámbaro, Gto. Y próximamente Querétaro, Qro. </p></li>
                <li> <p> <i class="far fa-check-circle partext2  mt-2"></i>&nbsp;Nuestra Filosofía ATM AireTierraMar, nos coloca como punta de lanza en la innovación y crecimiento de nuestra marca. </p></li>

                </ul>
            </div>
        </div>
    </div>
</div>
</section>


<section class="testimonial-section spad" id="promociones">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title">

                <h3 class="negrita">Opciones de Franquicia</h3>
            </div>
        </div>
    </div>
    <br>
    <div class="row">


        <?php
        include_once './dashboard/class/Promocion.php';
        $promo = Promocion::recuperarTodos();

        if (count($promo) > 0) :
        ?>
            <?php foreach ($promo as $item) : ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="card" style="width: 18rem;">
                       
                        <div class="card-body">

                        <a href="#formulario"><img class="img-fluid" src="./dashboard/modules/promos/<?php echo $item['url_imagen1']; ?>"></a>
                            
                   

                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="">
                <p class="alert alert-info justify-content-center"> No hay franquicias para mostrar </p>
            </div>
        <?php endif; ?>

    </div>
</div>
</section>

<!-- Formulario -->
<section class="services-section spad" id="franquicias">

<div class="container">

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="section-title">
                <h3 class="negrita" id="formulario">Forma parte de nuestra red de Franquicias</h3>
            </div>
        </div>
    </div>
   
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 ">
            <form action="franquicias.php" method="post"   id="formu">
            <div class="form-group" >
                    <label for="nombre_completo" class="partext negri">Nombre Completo:</label>
                    <input type="text" class="form-control" name="nombre_completo" id="nombre_completo" placeholder="Tu Nombre Completo" required>
                </div>
              
                    <div class="form-group">
                        <label for="email"  class="partext negri">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" required>
                    </div>

        
                <div class="form-group">
                    <label for="ciudad"  class="partext negri">Ciudad:</label>
                    <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad" required>
                </div>

                <div class="form-group">
                    <label for="telefono"  class="partext negri">Teléfono:</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono (con lada)" required>
                </div>

                <div class="form-group">
                    <label for="comentarios"  class="partext negri">Comentarios:</label>
                    <textarea class="form-control" rows="10" name="comentarios" id="comentarios" placeholder="Comentarios" required></textarea>
                </div>
        
            
                <button type="submit" class="btn btn-danger">ENVIAR SOLICITUD</button>
            </form>
        </div>

    </div>
    
</div>
</section>


    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="" height="61px">
                                </a>
                            </div>
                            <p>Visitanos en nuestras redes sociales</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contáctanos</h6>
                            <ul>
                            <li><i class="fa fa-phone icolor"></i>&nbsp; (52) 417-172-4441 </li>
                                <li><i class="fa fa-phone icolor"></i>&nbsp; (52) 417-172-6927 </li>
                                <li><i class="fa fa-envelope icolor"></i>&nbsp; reservaciones@sigatours.com</li>
                                <li><i class="fa fa-address-book-o icolor"></i>&nbsp;  Calle Sinaloa # 16 Colonia San Isidro II<br> C.P. 38670. Acámbaro, Gto.</li>


                            </ul>
                        </div>
                    </div>
           
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <!-- <li><a href="#">Terms of use</a></li> -->
                            <li><a href="aviso_privacidad.php">Aviso de privacidad</a></li>
                            <!-- <li><a href="#">Environmental Policy</a></li> -->
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> Derechos reservados | Corporativo Sigatours
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(document).ready(function() {
            $.validator.addMethod("formAlphanumeric", function(value, element) {
                var pattern1 = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;
                return this.optional(element) || pattern1.test(value);
            }, "El campo debe tener un valor alfanumérico");

            $.validator.addMethod("email", function(value, element) {
                var pattern2 = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/;
                return this.optional(element) || pattern2.test(value);
            }, "Debe ingresar un email válido");


            $("#formu").validate({

                wrapper: 'span',
                errorPlacement: function(error, element) {
                    error.css({
                        'padding-left': '10px',
                        'margin-right': '20px',
                        'padding-bottom': '2px',
                        'color': 'red',
                        'font-size': 'small'
                    });
                    error.addClass("arrow")
                    error.insertAfter(element);
                },


                rules: {
                    nombre_completo: {
                        required: true,
                        minlength: 4,
                        maxlength: 100,
                        formAlphanumeric: true
                    },
                    email: {
                        required: true,
                        maxlength: 50,
                        email: true
                    },
                    ciudad: {
                        required: true,
                        minlength: 4,
                        maxlength: 30,
                       
                    },
                    telefono: {
                        required: true,
                        minlength: 10,
                        maxlength: 10
                    },
                
                    comentarios: {
                        required: true,
                        maxlength: 500
                    }
                },
    

                messages: {

                    nombre_completo: {
                        required: 'Por favor introduzca su nombre',
                        formAlphanumeric: "El nombre solo puede contener letras",
                        minlength: "Debe tener al menos 5 caracteres",
                        maxlength: "Solo se admite un máximo de 100 caracteres"
                    },
                    email: {
                        required: "Por favor introduzca su email",
                        maxlength: "Solo se admite un máximo de 50 caracteres",
                        email: "Debe ingresar un email válido"
                    },
                    ciudad: {
                        required: "Por favor introduzca su ciudad",
                        minlength: "Debe contener al menos 4 caracteres",
                        maxlength: "Solo se admite un máximo de 30 caracteres"

                    },

                    telefono: {
                        required: "Por favor introduzca un teléfono de contacto",
                        minlength: "Ingrese un teléfono válido de 10 dígitos",
                        maxlength: "Ingrese un teléfono válido de 10 dígitos"

                    },
                    comentarios: {
                        required: "Porfavor introduzca una breve descripción",
                        maxlength: "Solo se admite un máximo de 500 caracteres"
                    },

                },



            });

        });
    </script>

</body>

</html>