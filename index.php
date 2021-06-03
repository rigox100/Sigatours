<?php
require_once './dashboard/class/Franquicia.php';

$idFranquicia = (isset($_REQUEST['idFranquicia'])) ? $_REQUEST['idFranquicia'] : null;

if ($idFranquicia) {
    $franquicia = Franquicia::buscarPorId($idFranquicia);
} else {
    $franquicia = new Franquicia();
}

//Request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $franquicia->setNombreCompleto($_POST['nombre_completo']);
    $franquicia->setEmail($_POST['email']);
    $franquicia->setCiudad($_POST['ciudad']);
    $franquicia->setTelefono($_POST['telefono']);
    $franquicia->setComentarios($_POST['comentarios']);
    $franquicia->setFechaCreacion(date('Y-m-d'));

    $franquicia->guardar();

    if ($idFranquicia != "") {
        echo '<script>
        alert("Ha surgido un error");
        
        window.location.href="index.php";
        </script>';
    } else {

        //header('Location: index.php?status_code=1');
        echo '<script>
            alert("Se Guardó Correctamente");
            
            window.location.href="index.php";
            </script>';
    }
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sigatours">
    <meta name="keywords" content="sigatours, travel, viajar, viajes, agencia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>::Sigatours::</title>
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
    <link rel="stylesheet" href="./dashboard/assets/plugins/sweetAlert2/sweetalert2.min.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <link rel="stylesheet" href="./dashboard/assets/css/style.css" type="text/css">
    <!-- <link rel="stylesheet" href="./dashboard/assets/css/adminlte.css" type="text/css"> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

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
            <!-- <div class="language-option">
                <img src="img/flag.jpg" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div> -->
            <!-- <a href="#" class="bk-btn">Booking Now</a> -->
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Inicio</a></li>
                <li><a href="#franquicias">Franquicias</a></li>
                <li><a href="#destinos">Destinos</a></li>
                <!-- <li><a href="#d" data-toggle="modal" data-target="#exampleModal">Registrate</a></li>
                <li><a href="#d">Internacional</a>
                    <ul class="dropdown">
                        <li><a href="#d">Circuitos</a></li>
                    </ul>
                </li> -->
                <!-- <li><a href="./blog.html">Servicios</a></li> -->
                <!-- <li><a href="./contact.html">Contact</a></li> -->
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
            <li><i class="fa fa-phone"></i> (52) 443-688-9901</li>
            <li><i class="fa fa-envelope"></i> agencias@sigatours.com.mx</li>
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
                            <li><i class="fa fa-phone"></i> (52) 443-688-9901 </li>
                            <li><i class="fa fa-envelope"></i> agencias@sigatours.com.mx</li>
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
                            <!-- <a href="#" class="bk-btn">Booking Now</a>
                            <div class="language-option">
                                <img src="img/flag.jpg" alt="">
                                <span>EN <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="#">Zi</a></li>
                                        <li><a href="#">Fr</a></li>
                                    </ul>
                                </div>
                            </div> -->
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
                                    <li class="active"><a href="./index.php">Inicio</a></li>
                                    <li><a href="#franquicias">Franquicias</a></li>
                                    <li><a href="#destinos">Destinos</a></li>
                                    <!-- <li><a href="#exampleModal" data-toggle="modal" data-target="#exampleModal">Registrate</a></li>
                                    <li><a href="#s">Internacional</a>
                                        <ul class="dropdown">
                                            <li><a href="#s">Circuitos</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li><a href="./blog.html">News</a></li>
                                    <li><a href="./contact.html">Contact</a></li> -->
                                </ul>
                            </nav>
                            <div class="nav-right sear">
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

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <!-- <h1>Riviera Maya, Tulum.</h1>
                        <p>Increibles lugares en Cancún, México</p> -->
                        <!-- <a href="#" class="primary-btn">Más Información</a> -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <div class="text-center">
                            <img src="img/imgOne.png" alt="" height="34px">
                        </div>

                        <h3 class="text-center">Login</h3>
                        <form method="post" action="https://online.holidaytravel.com.mx/auth/login">
                            <div class="check-date">
                                <label for="usuario">Usuario:</label>
                                <input type="text" name="usuario" class="form-control" id="usuario" maxlength="45" placeholder="Ingresa usuario..." autocomplete="off" required>
                                <!-- <i class="icon_user"></i> -->
                            </div>
                            <div class="check-date">
                                <label for="pass">Contraseña:</label>
                                <input type="password" name="password" class="form-control" id="password" autocomplete="off" maxlength="45" placeholder="Ingresa contraseña..." required>
                                <!-- <i class="icon_calendar"></i> -->
                            </div>
                            <div class="select-option">
                                <label for="guest">Idioma:</label>
                                <select name="language" id="language" autocomplete="off">
                                    <option id="es-op" selected="selected" value="es">Español</option>
                                    <option id="en-op" value="en">Inglés</option>
                                    <option id="pt-op" value="pt">Portugués</option>
                                </select>
                            </div>
                            <div class="col">
                                <!-- Simple link -->
                                <a href="https://online.holidaytravel.com.mx/auth/resetpassword">¿Olvidaste tu usuario o contraseña?</a>
                            </div>
                            <!-- <div class="select-option">
                                <label for="room">Room:</label>
                                <select id="room">
                                    <option value="">1 Room</option>
                                    <option value="">2 Room</option>
                                </select>
                            </div> -->
                            <button type="submit">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <?php
            include_once './dashboard/class/Slider.php';
            $slider = Slider::recuperarPublicados();

            if (count($slider) > 0) :
            ?>
                <?php foreach ($slider as $item) : ?>
                    <div class="hs-item set-bg img-fluid" data-setbg="./dashboard/modules/slider/<?php echo $item['url_imagen1']; ?> ">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="hero-text ocultar-text">
                                        <h1><?php echo $item['titulo']; ?></h1>
                                        <p><?php echo $item['descripcion']; ?></p>
                                        <!-- <a href="#" class="primary-btn">Más Información</a>  -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="alert alert-info"> No hay imagenes para el slider </p>
            <?php endif; ?>

        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section End -->
    <section class="services-section spad" id="franquicias">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>FRANQUICIAS</span>
                        <hr>
                    </div>
                </div>
            </div>

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
                        <p class="text-justify partext ml-4"> <strong> EN LA INDRUSTRIA DEL TURISMO</strong></p>
                        <ul class="text-justify quitpoint">

                            <li> <i class="far fa-check-circle partext2"></i>&nbsp;&nbsp; Lorem ipsum dolor sit amet consectetur. </li>
                            <li> <i class="far fa-check-circle partext2 mt-2"></i>&nbsp;&nbsp; Lorem ipsum dolor sit amet consectetur. </li>
                            <li> <i class="far fa-check-circle partext2 mt-2"></i>&nbsp;&nbsp; Lorem ipsum dolor sit amet consectetur. </li>
                            <li> <i class="far fa-check-circle partext2 mt-2"></i>&nbsp;&nbsp; Lorem ipsum dolor sit amet consectetur. </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 ">
                    <div class="section-title">
                        <p class="text-justify partext ml-5"> <strong> EN OTROS GIROS</strong></p>
                        <ul class="text-justify quitpoint">

                        <li> <i class="far fa-check-circle partext2"></i>&nbsp;&nbsp; Lorem ipsum dolor sit amet consectetur. </li>
                        <li> <i class="far fa-check-circle partext2 mt-2"></i>&nbsp;&nbsp; Lorem ipsum dolor sit amet consectetur. </li>
                        <li> <i class="far fa-check-circle partext2 mt-2"></i>&nbsp;&nbsp; Lorem ipsum dolor sit amet consectetur. </li>
                        <li> <i class="far fa-check-circle partext2 mt-2"></i>&nbsp;&nbsp; Lorem ipsum dolor sit amet consectetur. </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="section-title">
                        <p class="text-justify partext ml-4"> <strong> VENTAJAS DE SIGATOURS</strong></p>
                        <ul class="text-justify quitpoint">
                        <li> <i class="far fa-check-circle partext2"></i>&nbsp;&nbsp; Lorem ipsum dolor sit amet consectetur. </li>
                        <li> <i class="far fa-check-circle partext2 mt-2"></i>&nbsp;&nbsp; Lorem ipsum dolor sit amet consectetur. </li>
                        <li> <i class="far fa-check-circle partext2 mt-2"></i>&nbsp;&nbsp; Lorem ipsum dolor sit amet consectetur. </li>
                        <li> <i class="far fa-check-circle partext2 mt-2"></i>&nbsp;&nbsp; Lorem ipsum dolor sit amet consectetur. </li>

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
                    <form action="index.php" method="post"   id="formu">
                    <div class="form-group" >
                            <label for="nombre_completo" class="partext negrita">Nombre Completo:</label>
                            <input type="text" class="form-control" name="nombre_completo" id="nombre_completo" placeholder="Tu Nombre Completo" required>
                        </div>
                      
                            <div class="form-group">
                                <label for="email"  class="partext negrita">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" required>
                            </div>
        
                
                        <div class="form-group">
                            <label for="ciudad"  class="partext negrita">Ciudad:</label>
                            <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad" required>
                        </div>

                        <div class="form-group">
                            <label for="telefono"  class="partext negrita">Teléfono:</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono (con lada)" required>
                        </div>

                        <div class="form-group">
                            <label for="comentarios"  class="partext negrita">Comentarios:</label>
                            <textarea class="form-control" rows="10" name="comentarios" id="comentarios" placeholder="Comentarios" required></textarea>
                        </div>
                
                    
                        <button type="submit" class="btn btn-danger">ENVIAR SOLICITUD</button>
                    </form>
                </div>

            </div>
            
        </div>
    </section>


    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad" id="destinos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">

                        <h3 class="negrita">Destinos más populares</h3>
                    </div>
                </div>
            </div>
            <div class="row">


                <?php
                include_once './dashboard/class/Destinos.php';
                $promo = Destinos::recuperarTodos();

                if (count($promo) > 0) :
                ?>
                    <?php foreach ($promo as $item) : ?>
                        <div class="col-md-4">
                            <div class="hovereffects">
                                <img src="./dashboard/modules/destinos/<?php echo $item['url_imagen1']; ?>" class="img-fluid" height="300px" width="100%" alt="images">
                                <div class="overlay">
                                    <!-- <h2>Awesome Temples</h2> -->
                                    <a class="info" href="#" data-toggle="modal" data-target="#myModal1">Más Información...</a>
                                </div>
                            </div>

                            <div class="modal fade" id="myModal1" role="dialog">
                                <div class="modal-dialog ">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="">
                                                <img src="img/logo.png" alt="" height="34px">
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="./dashboard/modules/destinos/<?php echo $item['url_imagen1']; ?>" class="img-fluid" width="100%" height="100%">
                                            <hr>
                                            <a class="btn btn-warning boto btn-lg btn-block mt-2" href="./dashboard/modules/promos/<?php echo $item['descripcion']; ?>" download="Itinerario.pdf" role="button">Descargar Itinerario</a>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="">
                        <p class="alert alert-info justify-content-center"> No hay destinos para mostrar </p>
                    </div>
                <?php endif; ?>

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
                                <li><i class="fa fa-phone icolor"></i>&nbsp; (52) 443-688-9901 </li>
                                <li><i class="fa fa-phone icolor"></i>&nbsp; (52) 417-688-2572 </li>
                                <li><i class="fa fa-phone icolor"></i>&nbsp; (52) 417-688-3468 </li>
                                <li><i class="fa fa-envelope icolor"></i>&nbsp; agencias@sigatours.com.mx</li>
                                <li><i class="fa fa-address-book-o icolor"></i>&nbsp; Calle Brasilia # 135, Col. Lomas de las Américas. <br> C.P. 58254. Morelia, Mich.</li>


                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>Suscribetet</h6>
                            <p>Obtenga las áctualizaciones y ofertas</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <!-- <li><a href="#">Terms of use</a></li> -->
                            <li><a href="#">Aviso de privacidad</a></li>
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
                                </script> Todos los derechos reservados | Sigatours Corporativo Turístico
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
    <script src="./dashboard/assets/plugins/sweetAlert2/sweetalert2.all.min.js"></script>
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