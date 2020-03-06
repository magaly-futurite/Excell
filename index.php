<!DOCTYPE html>
<html lang="es" ng-app="MetodikaTI">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Renta de autos y camionetas facilidad de pagos y flexibilidad en Monterrey y Guadalajara - Excell Plus">
    <meta name="keywords" content="Renta de autos Excell Plus">
    <meta name="author" content="Renta de autos Excell Plus">

    <!-- SEO Metatags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Metodikat TI">

    <!-- Structured data -->
    <?php include_once('src/partial/seo/structured-data.php'); ?>

    <!-- Googlebot -->
    <?php include_once('src/partial/seo/googlebot.php'); ?>

    <!-- Facebook Pixel Code -->
    <?php include_once('src/partial/seo/fb-pixel.php'); ?>

    <!-- Title -->
    <title>Excell Plus Renta de Autos</title>

    <!-- Preloader -->
    <link href="assets/css/preloader.css" rel="stylesheet" />
    <script src="assets/js/preloader.js"></script>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/bxslider/jquery.bxslider.min.css" rel="stylesheet" />
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <!-- CSS -->
    <link href="assets/css/main.css" rel="stylesheet" />
    <!-- AngularJS -->
    <script src="app/app.js"></script>

    <script type="application/ld+json">
        {
         "@context" : "http://schema.org",
         "@type" : "Organization",
         "name" : "Example",
         "url" : "https://www.example.com",
         "sameAs" : [
           "https:https://www.facebook.com/Excellplusrenta/"
          ]
        }
</script>
    <!-- Analytics code -->
    <?php include_once('src/partial/seo/analytics.php'); ?>
</head>

<body>
<!-- Preloader -->
<div class="preloader"></div>

<!-- All page content goes inside this div -->
<div id="pageContent" class="main-wrapper">

    <!-- Page header section -->
    <?php include_once('src/partial/header.php'); ?>

    <!-- Page content section -->
    <div class="h_banner">
        <div class="col-sm-12 col-xs-12">
            <div class="col-lg-6 col-sm-5 col-sm-offset-1 col-xs-12">
                <div class="top">
                    <h1>
                        <p class="titulo_verde">
                            Renta de autos Excell Plus
                        </p>
                    </h1>
                    <p class="titulo_verde">
                        Vienes por una renta de auto
                    </p>
                    <p class="parrafo">
                        y te quedas por facilidad de pagos,<br>
                        precio, flexibilidad en requisitos<br>
                        y trato amable.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 col-sm-6 col-xs-12">
                <form action="tipos-carros.php" method="post">
                    <div class="top_form">
                        <div class="fondo_formulario">
                            <div class="col-sm-12 pd0 linea_btm">
                                <div class="padd">
                                    <div class="col-sm-12">
                                        <p class="entrega">Reserva aquí</p>
                                        <p class="oficina">Oficina de entrega*</p>
                                    </div>
                                    <div class="col-sm-12 pd0">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-car"></i></span>
                                                <select class="form-control" name="entrega" aria-describedby="basic-addon1">
                                                    <option value="0">Monterrey Aeropuerto</option>
                                                    <option value="1">Oficina Monterrey</option>
                                                    <option value="2">Domicilio u Hotel Monterrey</option>
                                                    <option value="3">Guadalajara Aeropuerto</option>
                                                    <option value="4">Oficina Guadalajara</option>
                                                    <option value="5">Domicilio u Hotel Guadalajara</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 top_input pd0">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text" name="fechaEntrada" class="form-control datepicker"  id="datepicker" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                                <input type="text" class="form-control timepicker" name="horario" id="input" autocomplete="off"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-12 pd0 linea_btm">
                                <div class="padd">
                                    <div class="col-sm-12">
                                        <p class="oficina">Oficina para devolución*</p>
                                    </div>
                                    <div class="col-sm-12 pd0">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-car"></i></span>
                                                <select class="form-control" name="devolucion" aria-describedby="basic-addon1">
                                                    <option value="0">Monterrey Aeropuerto</option>
                                                    <option value="1">Oficina Monterrey</option>
                                                    <option value="2">Domicilio u Hotel Monterrey</option>
                                                    <option value="3">Guadalajara Aeropuerto</option>
                                                    <option value="4">Oficina Guadalajara</option>
                                                    <option value="5">Domicilio u Hotel Guadalajara</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 top_input pd0">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text" name="fecha_devolucion" class="form-control datepicker2"  id="datepicker2" aria-describedby="basic-addon1" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                                <input type="text" class="form-control timepicker" name="dev_horario" autocomplete="off"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-12 pd0">
                                <div class="padd">
                                    <div class="col-sm-12">
                                        <p class="oficina">Código de promoción</p>
                                    </div>
                                    <div class="col-sm-12 pd0">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-exclamation"></i></span>
                                                <input type="text" name="promocion" class="form-control"  aria-describedby="basic-addon1" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1 top_boton">
                                        <button type="submit" id="enviar_contacto" class="button button_enviar">Seleccionar auto</button>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="h_sec02">
        <div class="container">
            <div class="col-sm-12 top">
                <div class="col-sm-6">
                    <p class="titulo">
                        ¿Buscas el servicio de renta de autos en Monterrey o renta de autos en Guadalajara?
                    </p>
                    <p class="parrafo">
                        Excell Plus es la mejor solución en renta de autos en Monterrey y renta de autos en Guadalajara. Contamos con autos y camionetas para uso personal o utilitario para diversos gustos y necesidades.
                    </p>
                    <p class="parrafo">
                        No necesitas pasar a recogerlo, pues puedes elegir si deseas que te lo llevemos directamente a la puerta de tu casa o contratar a alguien  que lo maneje por ti y se encargue de tus vueltas y traslados, ya sea que estés interesado en la renta de autos en Monterrey o renta de autos en Guadalajara.
                    </p>
                </div>
                <div class="col-sm-6">
                    <p class="titulo">
                        Renta el auto que quieras por el tiempo que necesites
                    </p>
                    <p class="parrafo">
                        ¡Es muy sencillo! Sólo elige el modelo que más te guste y se ajuste a tus necesidades y comprueba lo fácil y rápido que es el servicio de renta de autos en Monterrey y renta de autos en Guadalajara con Excell Plus. 
                    </p>
                    <img src="assets/img/home/foto0_02.jpg" alt="renta de autos" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <div class="h_sec03">
        <div class="container-fluid">
            <div class="col-sm-10 col-sm-offset-1 pd0">
                <div class="col-sm-6 col-sm-push-6">
                    <p class="titulo_renta_autos">
                        Renta de <b>autos</b> en Monterrey
                    </p>
                    <div class="col-lg-9 col-sm-9 pd0">
                        <p class="parrafo">
                            Nuestro servicio de renta de autos en Monterrey ofrece a nuestros clientes una gran gama de posibilidades, desde autos económicos hasta autos de lujo. 
                        </p>
                        <p class="parrafo">
                            Habla o visita nuestras sucursales y elige el vehículo que necesites para el servicio de renta de autos en Monterrey. 
                        </p>
                        <p>
                            <a href="renta-de-autos-en-monterrey.php">
                            <button class="button excellBtn_home1">Ver vehículos</button>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-pull-6">
                    <div class="logo_carro_top">
                        <img src="assets/img/home/logos_carros.svg" alt="logo de autos" class="autos">
                    </div>
                    <a href="renta-de-autos-en-monterrey.php">
                        <img src="assets/img/home/mty.png" alt="Renta de autos en monterrey" class="img-responsive">
                    </a> 
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-10 col-sm-offset-1">
                <div class="col-sm-6">
                    <p class="titulo_renta_autos">
                        Renta de <b>camionetas</b> en Monterrey
                    </p>
                    <div class="col-lg-9 col-sm-9 pd0">
                        <p class="parrafo">
                            Si necesitas un vehículo para transportar a un grupo de personas ¡contáctanos! tenemos las mejores unidades y  tarifas dentro de nuestro servicio de renta de camionetas en  Monterrey en Excell Plus. Conoce nuestra oferta de renta de camionetas en Monterrey.
                        </p>
                        <p class="parrafo">
                           ¿Del amor nace la vista? Visita nuestras sucursales y escoge el auto que necesites para nuestro servicio de renta de camionetas en Monterrey.
                        </p>
                        <p>
                            <a href="renta-de-camionetas-en-monterrey.php">
                            <button class="button excellBtn_home1">Ver vehículos</button>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="logo_carro_top">
                        <img src="assets/img/home/logos_carros.svg" alt="logo de camionetas" class="autos">
                    </div>
                    <a href="renta-de-camionetas-en-monterrey.php">
                        <img src="assets/img/home/cortes_mty.png" alt="Renta de camionetas en monterrey" class="img-responsive">
                    </a>
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-10 col-sm-offset-1 pd0">
                <div class="col-sm-6 col-sm-push-6">
                    <p class="titulo_renta_autos">
                        Renta de <b>autos</b> en Guadalajara
                    </p>
                    <div class="col-lg-9 col-sm-9 pd0">
                        <p class="parrafo">
                            Excell Plus cuenta con diversas opciones en su servicio de renta de autos en Guadalajara para que puedas elegir el vehículo adecuado para ti.
                        </p>
                        <p class="parrafo">
                            ¡Comprueba lo fácil que es la renta de autos en Guadalajara! Sólo elige el modelo de preferencia y los días que utilizarás nuestro servicio de renta de autos en Guadalajara.
                        </p>
                        <p>
                            <a href="renta-de-autos-en-guadalajara.php">
                            <button class="button excellBtn_home1">Ver vehículos</button>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-pull-6">
                    <div class="logo_carro_top">
                        <img src="assets/img/home/logo_camionetas.svg" alt="logo" class="autos">
                    </div>
                    <a href="renta-de-autos-en-guadalajara.php">
                        <img src="assets/img/home/gdl.png" alt="Renta de autos en guadalajara" class="img-responsive">
                    </a>
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-10 col-sm-offset-1">
                <div class="col-sm-6">
                    <p class="titulo_renta_autos">
                        Renta de <b>camionetas</b> en Guadalajara
                    </p>
                    <div class="col-lg-9 col-sm-9 pd0">
                        <p class="parrafo">
                            ¿Tienes un viaje en puerta? ¡En Excell Plus tenemos justo lo que necesitas! Organiza tu viaje familiar, escolar o con tus amigos con nuestro servicio de renta  de camionetas en Guadalajara. 
                        </p>
                        <p class="parrafo"> Ya sea una camioneta de 15 pasajeros para una fiesta o evento, una camioneta de 7 para un viaje familiar, nuestra renta de camionetas en Guadalajara las tendrá a tu disposición. ¡Compruébalo tú mismo!
                        </p>
                        <p>
                            <a href="renta-de-autos-en-guadalajara.php">
                            <button class="button excellBtn_home1">Ver vehículos</button>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="logo_carro_top">
                        <img src="assets/img/home/logo_camionetas.svg" class="autos" alt="logo 2">
                    </div>
                    <a href="renta-de-camionetas-en-guadalajara.php">
                        <img src="assets/img/home/cortes_gdl.png" class="img-responsive" alt="Renta de autos en guadalajara">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <div class="h_sec04">
        <div class="container-fluid pd0">
            <div class="col-sm-12">
                <p class="titulo">Los autos en renta más buscados</p>
            </div>
            <div class="col-sm-12 col-xs-12">
                <div class="col-sm-3 col-xs-12">
                    <img src="assets/img/home/aveo.png" alt="Chevrolet Aveo" class="carro_mas">
                    <div class="nombre_destacado">
                        <p>Chevrolet Aveo</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <img src="assets/img/home/2.png" alt="Volkswagen Vento" class="carro_mas">
                    <div class="nombre_destacado">
                        <p>Volkswagen Vento</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <img src="assets/img/home/sub.png" alt="Chevrolet Suburban" class="carro_mas">
                    <div class="nombre_destacado">
                        <p>Chevrolet Suburban</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <img src="assets/img/home/toyota.png" alt="Toyota Hiace" class="carro_mas">
                    <div class="nombre_destacado">
                        <p>Toyota Hiace</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 pd0"></div>
            <div class="col-sm-6 pd0"></div>            
        </div>
    </div>
    <!---->
    <div class="h_sec05">
        <div class="container-fluid pd0">
            <div class="col-sm-12">
                <p class="titulo">Los autos en renta más económicos</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-sm-12">
                <ul class="bxslider">
                    <li>
                        <div class="thumbnail">
                            <img src="assets/img/home/march.png" class="img-responsive" alt="Nissan March">
                            <div>
                                <p class="titulo_de_carros">Nissan March</p>
                                <p class="parrafo_slider">
                                    Ademas de su atractivo diseño, es compacto, dinámico y perfecto para ambientes urbanos.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="thumbnail">
                            <img src="assets/img/home/tiida.png" class="img-responsive" alt="Nissan Tiida">
                            <div>
                                <p class="titulo_de_carros">Nissan Tiida</p>
                                <p class="parrafo_slider">
                                    Ideal para compartir, espaciosa cajuela y un diseño perfecto para manejar por la ciudad.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="thumbnail">
                            <img src="assets/img/home/aveo_02.png" class="img-responsive" alt="Chevrolet Aveo">
                            <div>
                                <p class="titulo_de_carros">Chevrolet Aveo</p>
                                <p class="parrafo_slider">
                                    Manejo ágil y gran rendimiento de combustible. Ideal para viajar dentro y fuera de la ciudad.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!---->
    <div class="h_sec06">
        <div class="container-fluid pd0">
            <div class="col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2">
                <p class="titulo">
                    ¿Necesitas el servicio de renta de autos  en Monterrey o renta de autos en Guadalajara?
                </p>
                <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                    <a href="contacto.php">
                        <button class="button button_contac">
                           <p class="">
                                Contáctanos
                           </p>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page footer section -->
    <?php include_once('src/partial/footer.php'); ?>
</div>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="assets/lib/bootstrap.min.js"></script>
<!-- Bootbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.1/jquery-ui.js"></script> 
<script src="assets/js/jquery.bxslider.min.js"></script> 
<script src="assets/js/auto-bxslider.js"></script>
<script src="assets/js/calendario.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script type="text/javascript">
    window.onload = function() { 
        callCalendar();
    };
</script>
<script type="text/javascript">
    (function($) {
    $(function() {
        $('input.timepicker').timepicker();
    });
})(jQuery);
</script>
<script type="text/javascript">
    $(document).ready(function(){
    $('#input.timepicker').timepicker({});
   
});
  
  $('.timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    minTime: '01',
    maxTime: '23:00pm',
    defaultTime: '01',
    startTime: '01:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
</script>


</body>
</html>