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
    <link href="../assets/css/preloader.css" rel="stylesheet" />
    <script src="../assets/js/preloader.js"></script>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/bxslider/jquery.bxslider.min.css" rel="stylesheet" />
    <link href="../assets/css/jquery-ui.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <!-- CSS -->
    <link href="assets/css/main.css" rel="stylesheet" />
    <!-- AngularJS -->

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
							Excell Plus Car Rental
                        </p>
                    </h1>
                    <p class="titulo_verde">
                        You come for a car rental
                    </p>
                    <p class="parrafo">
                        and you stay because easier payments,<br> 
                        best price, flexibility in requirements<br> and kind customer service.
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
                                        <p class="entrega">Book here</p>
                                        <p class="oficina">Pick-up Place*</p>
                                    </div>
                                    <div class="col-sm-12 pd0">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-car"></i></span>
                                                <select class="form-control" name="entrega" aria-describedby="basic-addon1">
                                                    <option value="0">Monterrey International Airporto</option>
                                                    <option value="1">Monterrey Excell’s Branch</option>
                                                    <option value="2">Residence or Office in Monterrey</option>
                                                    <option value="3">Guadalajara Airport</option>
                                                    <option value="4">Guadalajara Excell’s Branch</option>
                                                    <option value="5">Residence or Office in Guadalajara</option>
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
                                        <p class="oficina">Drop-off Place*</p>
                                    </div>
                                    <div class="col-sm-12 pd0">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-car"></i></span>
                                                <select class="form-control" name="devolucion" aria-describedby="basic-addon1">
                                                    <option value="0">Monterrey International Airporto</option>
                                                    <option value="1">Monterrey Excell’s Branch</option>
                                                    <option value="2">Residence or Office in Monterrey</option>
                                                    <option value="3">Guadalajara Airport</option>
                                                    <option value="4">Guadalajara Excell’s Branch</option>
                                                    <option value="5">Residence or Office in Guadalajara</option>
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
                                        <p class="oficina">Promocode</p>
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
                                        <button type="submit" id="enviar_contacto" class="button button_enviar">Choose car</button>
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
                        Are you looking for a car rental or truck rental service in Monterrey or Guadalajara? 
                    </p>
                    <p class="parrafo">
                        Excell Plus is the best choice for car rental and truck rental in Monterrey and Guadalajara. We have he have a huge amount of car rentals and truck rentals for different needs.
                    </p>
                    <p class="parrafo">
                        You don't even need to pick it up. If you are interested on car rental or truck rental, with Excell Rent A Car you have the option to choose if you want that your car or truck be delivered directly to your door or if you want to hire someone to drive your car across the city.
                    </p>
                </div>
                <div class="col-sm-6">
                    <p class="titulo">
                        Rent the car you want for the amount of time you need
                    </p>
                    <p class="parrafo">
                        It's very simple! Just choose the model you like the most and check how fast and easy it's to rent a car in Monterrey or to rent a car in Guadalajara with Excell Plus.
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
                        Car  <b>rental</b> in Monterrey
                    </p>
                    <div class="col-lg-9 col-sm-9 pd0">
                        <p class="parrafo">
                            Our car rental service in Monterrey offers our customers a wide range of possibilities, from economy cars to luxury cars. 
                        </p>
                        <p class="parrafo">
                            Call us or visit our branch offices and choose the vehicle you need for the car rental service in Monterrey.
                        </p>
                        <p>
                            <a href="renta-de-autos-en-monterrey.php">
                            <button class="button excellBtn_home1">See car</button>
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
                        <b>Truck</b> rental in Monterrey
                    </p>
                    <div class="col-lg-9 col-sm-9 pd0">
                        <p class="parrafo">
                            Are you going to travel in the next days? In Excell Plus we have just what you need! Plan your family, friends or school trip with our truck rental in Monterrey.
                        </p>
                        <p class="parrafo">
                           Whether you need a 15 passenger van for a party, or a 4 passenger truck for a family road trip, our truck rental in Monterrey will satisfy your needs. Try it by yourself!
                        </p>
                        <p>
                            <a href="renta-de-camionetas-en-monterrey.php">
                            <button class="button excellBtn_home1">See car</button>
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
                        Car <b>rental</b> in Guadalajara
                    </p>
                    <div class="col-lg-9 col-sm-9 pd0">
                        <p class="parrafo">
                            Excell Plus has a lot of options for car rental services in Guadalajara, so you can choose the right vehicle for you.
                        </p>
                        <p class="parrafo">
                            Check how easy it is to rent a car in Guadalajara! Just choose the model you like and the days you need our car rental service in Guadalajara.
                        </p>
                        <p>
                            <a href="renta-de-autos-en-guadalajara.php">
                            <button class="button excellBtn_home1">See car</button>
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
                        <b>Truck</b> rental in Guadalajara
                    </p>
                    <div class="col-lg-9 col-sm-9 pd0">
                        <p class="parrafo">
                            If you need a vehicle to transport a group of people contact us! You will find the best units and rates within our truck rental in Guadalajara with Excell Plus.
                        </p>
                        <p class="parrafo"> 
                        	Find out about our truck rental in Guadalajara. Visit our branch offices and choose the vehicle you need for truck rental in Guadalajara.
                        </p>
                        <p>
                            <a href="renta-de-autos-en-guadalajara.php">
                            <button class="button excellBtn_home1">See car</button>
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
                <p class="titulo">The most wanted cars for rental:</p>
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
                <p class="titulo">The most wanted cars for rental:</p>
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
                                    Besides it's attractive design, this car it's compact, dynamic and perfect for urban environments.
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
                                    Ideal for sharing, spacious trunk and perfect design to drive around the city.
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
                                    Easy driving and great fuel efficiency. This car it's ideal for traveling across the city.
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
                    Do you need a car rental in Monterrey or a car rental in Guadalajara?
                </p>
                <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                    <a href="contacto.php">
                        <button class="button button_contac">
                           <p class="">
                                Contact us!
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
<script src="../assets/lib/bootstrap.min.js"></script>
<!-- Bootbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.1/jquery-ui.js"></script> 
<script src="../assets/js/jquery.bxslider.min.js"></script> 
<script src="../assets/js/auto-bxslider.js"></script>
<script src="../assets/js/calendario.js"></script>
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