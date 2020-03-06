

<?php

//$para = 'magaly.lopez@metodika.mx, java_ala@hotmail.com, javaala@gmail.com';
$para = 'magaly.lopez@metodika.mx';

$titulo = $_POST['correoC'];


//Detalles de vehículo

$modeloAuto   = $_POST['modeloAuto'];

$numPersona   = $_POST['numPersona'];

$numPuertas   = $_POST['numPuertas'];

$transmisionT = $_POST['transmisionT'];

$maletasM     = $_POST['maletasM'];

$extrasE      = $_POST['extrasE'];

$promocionCod= $_POST['promocionCod'];



//Detalles de reservación

$valorV          = $_POST['valorV'];

$fechaInicio     = $_POST['fechaInicio'];

$horarioInicio   = $_POST['horarioInicio'];

$devoValor2      = $_POST['devoValor2'];

$fechaDev        = $_POST['fechaDev'];

$horaDevD        = $_POST['horaDevD'];



//Tu Seguro de Auto

$opcionA         = $_POST['opcionA'];

if ($opcionA == 0) {

    $valor_seguro1 ="Cobertura básica TPL incluído en todas nuestras tarifas";

}else if($opcionA == 100){

    $valor_seguro1 = "Amplia CDW $100 + IVA por día";

}else{

    $valor_seguro1 =   "Cobertura full FULL COVER $400 + IVA en camionetas (+ precio de seguro CDW)";

}

//precios del auto

$subVehiculo  = $_POST['subVehiculo'];

$opcionA      = $_POST['opcionA'];

$iva          = $_POST['iva'];

$totDia       = $_POST['totDia'];

$total        = $_POST['total'];

//Servicio adicional

$gps          = $_POST['gps'];

$asiento      = $_POST['asiento'];

$chofer       = $_POST['chofer'];



if ($gps == '') {

    $valor_gps = "";

}else{

    $valor_gps = "Quiero usar el gps";

}



if ($asiento == '') {

    $valor_asiento = "";

}else{

    $valor_asiento = "Quiero usar el asiento para bebé";

}



if ($chofer == '') {

    $valor_chofer = "";

}else{

    $valor_chofer = "Quiero usar el chofer";

}

//Información de la Persona

$nombreC        = $_POST['nombreC'];

$correoC        = $_POST['correoC'];

$celularC       = $_POST['celularC'];

$telefonoC      = $_POST['telefonoC'];

$tarjetaC       = $_POST['tarjetaC'];

$direccionC     = $_POST['direccionC'];

$codigoC        = $_POST['codigoC'];

$ciudadC        = $_POST['ciudadC'];

$estadoC        = $_POST['estadoC'];

$paisC          = $_POST['paisC'];

$terminal       = $_POST['terminal'];

$numVuelo       = $_POST['numVuelo'];

$procedente     = $_POST['procedente'];

$aerolinea      = $_POST['aerolinea'];

$horaSalida     = $_POST['horaSalida'];

$horaLlegado    = $_POST['horaLlegado'];

$direccion_domicilioHotel      = $_POST['direccion_domicilioHotel'];

$cruces_domicilioHotel         = $_POST['cruces_domicilioHotel'];

$ref_domicilioHotel            = $_POST['ref_domicilioHotel'];

$total_de_dias                 = $_POST['total_de_dias'];





$mensaje = '

            <html>

            <head>

                <style>

                table, th, td {

                    border: 1px solid black;

                    border-collapse: collapse;

                }

                th, td {

                    padding: 2px;

                    text-align: left;

                    width: 50%;

                }

                </style>

            </head>

            <body>

            <table style="width:100%">

                <tr>

                    <th rowspan="6"><h2>Detalles de vehículo</h2></th>

                    <td><b>Tipo de Auto: </b>'. $_POST['modeloAuto'] .'</td>

                </tr>

                <tr>

                    <td><b>Codigo de Promocion: </b>'. $_POST['promocionCod'] .'</td>

                </tr>

                <tr>

                    <td><b>Transmisión: </b>'. $_POST['transmisionT'] .'</td>

                </tr>

                <tr>

                    <td><b>Cantidad de Personas: </b>'. $_POST['numPersona'] .'</td>

                </tr>

                <tr>

                    <td><b>Maletas: </b>'. $_POST['maletasM'] .'</td>

                </tr>

                <tr>

                    <td><b>Datos Extras: </b>'. $_POST['extrasE'] .'</td>

                </tr>

                <tr>

                    <th rowspan="3"><h2>Datos de Entrega</h2></th>

                    <td><b>Lugar: </b>'. $_POST['valorV'] .'</td>

                </tr>

                <tr>

                    <td><b>Fecha: </b>'. $_POST['fechaInicio'] .'</td>

                </tr>

                <tr>

                    <td><b>Horario: </b>'. $_POST['horarioInicio'] .'</td>

                </tr>

                <tr>

                    <th rowspan="3"><h2>Oficina de devolución</h2></th>

                    <td><b>Lugar: </b>'. $_POST['devoValor2'] .'</td>

                </tr>

                <tr>

                    <td><b>Fecha: </b>'. $_POST['fechaDev'] .'</td>

                </tr>

                <tr>

                    <td><b>Horario: </b>'. $_POST['horaDevD'] .'</td>

                </tr>

                <tr>

                    <th rowspan="1"><h2>Tu Seguro de Auto</h2></th>

                    <td><b>Seguro: </b>'.$valor_seguro1.'</td>

                </tr>

                <tr>

                    <th rowspan="5"><h2>Costos del Auto</h2></th>

                    <td><b>Subtotal del Vehículo: </b>'. $_POST['subVehiculo'] .'</td>

                </tr>

                <tr>

                    <td><b>Subtotal del Seguro: </b>'. $_POST['opcionA'] .'</td>

                </tr>

                <tr>

                    <td><b>IVA: </b>'. $_POST['iva'] .'</td>

                </tr>

                <tr>

                    <td><b>Total por día: </b>'. $_POST['totDia'] .'</td>

                </tr>

                <tr>

                    <td><b>Total del Auto: </b>'. $_POST['total'] .'</td>

                </tr>

                <tr>

                    <th rowspan="1"><h2>Servicio adicional</h2></th>

                    <td>'.$valor_gps.'<br>'.$valor_asiento.'<br>'.$valor_chofer.'</td>

                </tr>

                <tr>

                    <th rowspan="5"><h2>Datos de Cliente</h2></th>

                    <td><b>Nombre del Cliente: </b>'. $_POST['nombreC'] .'</td>

                </tr>

                <tr>

                    <td><b>Correo electrónico: </b>'. $_POST['correoC'] .'</td>

                </tr>

                <tr>

                    <td><b>Celular: </b>'. $_POST['celularC'] .'</td>

                </tr>

                <tr>

                    <td><b>Teléfono casa: </b>'. $_POST['telefonoC'] .'</td>

                </tr>

                <tr>

                    <td><b>Tarjeta de crédito: </b>'. $_POST['tarjetaC'] .'</td>

                </tr>

                <tr>

                    <th rowspan="5"><h2>Información de dirección</h2></th>

                    <td><b>Dirección: </b>'. $_POST['direccionC'] .'</td>

                </tr>

                <tr>

                    <td><b>Código postal: </b>'. $_POST['codigoC'] .'</td>

                </tr>

                <tr>

                    <td><b>Ciudad: </b>'. $_POST['ciudadC'] .'</td>

                </tr>

                <tr>

                    <td><b>Estado: </b>'. $_POST['estadoC'] .'</td>

                </tr>

                <tr>

                    <td><b>País: </b>'. $_POST['paisC'] .'</td>

                </tr>

                <tr>

                    <th rowspan="1"><h2>Información para Entrega</h2></th>

                    <td>'.$_POST['terminal'].'<br>'.$_POST['numVuelo'].'<br>'.$_POST['aerolinea'].'<br>'.$_POST['horaSalida'].'<br>'.$_POST['horaLlegado'].'<br>'.$_POST['direccion_domicilioHotel'].'<br>'.$_POST['cruces_domicilioHotel'].'<br>'.$_POST['ref_domicilioHotel'].'</td>

                </tr>

            </table>

        </body>

        </html> ';

$cabeceras = 'MIME-Version: 1.0' . "\r\n";

$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$cabeceras .= 'From: Excell<contacto@futurite.com>';

$enviado = mail($para, $titulo, $mensaje, $cabeceras);



$mensaje2 = '<html>

                <head>

                <style>

                    table {

                        font-family: arial, sans-serif;

                        border-collapse: collapse;

                    }

                    td, th {

                        text-align: left;

                        padding: 2px;

                    }

                    tr:nth-child(even) {

                        background-color: #dddddd;

                    }

                    table, th, td {

                        border-collapse: collapse;

                    }

                    th, td {

                        padding: 5px;

                    }

                </style>

                </head>

                <body> 

                    <table style="width:80%">

                      <tr>

                        <th style="text-align: center;"><img src="http://metodika.com.mx/dsr/excell-2/assets/img/home/logo.png"></th>

                      </tr>

                      <tr>

                        <th><h1 style="text-align: center;">Gracias por su reservación</h1></th>

                      </tr>

                    </table>

                    <table style="width:60%">

                      <tr>

                        <th><h2>Detalles de Reservación</h2></th>

                        <th><h2>Detalles de Entrega</h2></th>

                      </tr>

                      <tr>

                        <td><b>Auto: </b>'. $_POST['modeloAuto'] .'</td>

                        <td><b>Fecha de Entrega: </b>'. $_POST['fechaInicio'] .'</td>

                      </tr>

                      <tr>

                        <td><b>Transmisión: </b>'. $_POST['transmisionT'] .'</td>

                        <td><b>Lugar: </b>'. $_POST['valorV'] .'</td>

                      </tr>

                      <tr>

                        <td><b>Datos Extras: </b>'. $_POST['extrasE'] .'</td>

                        <td><b>Horario: </b>'. $_POST['horarioInicio'] .'</td>

                      </tr>

                      <tr>

                        <td><b>Seguro: </b>'.$valor_seguro1.'</td>

                        <td></td>

                      </tr>

                    </table>

                    <table style="width:60%">

                      <tr>

                        <th><h2>Detalles del Cliente</h2></th>

                        <th><h2>Detalles de Devolución</h2></th>

                      </tr>

                      <tr>

                        <td><b>Nombre del Cliente: </b>'. $_POST['nombreC'] .'</td>

                        <td><b>Fecha de Devolución: </b>'. $_POST['fechaDev'] .'</td>

                      </tr>

                      <tr>

                        <td><b>Correo electrónico: </b>'. $_POST['correoC'] .'</td>

                        <td><b>Lugar: </b>'. $_POST['devoValor2'] .'</td>

                      </tr>

                      <tr>

                        <td><b>Celular: </b>'. $_POST['celularC'] .'</td>

                        <td><b>Fecha: </b>'. $_POST['fechaDev'] .'</td>

                      </tr>

                      <tr>

                        <td><b>Teléfono casa: </b>'. $_POST['telefonoC'] .'</td>

                        <td><b>Horario: </b>'. $_POST['horaDevD'] .'</td>

                      </tr>

                      <tr>

                        <td><b>Tarjeta de crédito: </b>'. $_POST['tarjetaC'] .'</td>

                        <td></td>

                      </tr>

                    </table>

                      <table style="width:80%">

                      <tr>

                        <th><h2>Dirección</h2></th>

                      </tr>

                      <tr>

                        <td><b>Dirección: </b>'. $_POST['direccionC'] .'</td>

                      </tr>

                      <tr>

                        <td><b>Código postal: </b>'. $_POST['codigoC'] .'</td>

                      </tr>

                      <tr>

                        <td><b>Ciudad: </b>'. $_POST['ciudadC'] .'</td>

                      </tr>

                      <tr>

                        <td><b>Estado: </b>'. $_POST['estadoC'] .'</td>

                      </tr>

                      <tr>

                        <td><b>País: </b>'. $_POST['paisC'] .'</td>

                      </tr>

                    </table>

                    <table style="width:80%">

                      <tr>

                        <th style="text-align: center;"><h2>Contacto:</h2></th>

                      </tr>

                      <tr>

                        <th><h3>Para cualquier duda adicioanl contáctenos.</h3></th>

                      </tr>

                      <tr>

                        <th style="text-align: center;">En caso de que no se tenga disponible el modelo del carro seleccionado, se le asignara uno de igual o mejor categoría.<br> Así mismo personal de Excell Rent a Car se pondrá en contacto con usted.</th>

                      </tr>

                    </table>

                </body>

            </html>';





$mensaje2 .= "<b>Observación - No es necesario responder este mensaje.</b>"; 



$envia =  mail($correoC,"Su mensaje fué recibido!",$mensaje2,$cabeceras); 





if ($envia)

    echo'<script>

            alert("Tu Mensaje se ha enviado");

            window.location.href="#nuevo";

        </script>';

else

  echo 'Error en el envío del email';



?>

<!DOCTYPE html>

<html lang="es" ng-app="MetodikaTI" id="nuevo">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">



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

    <title>Excell Rent Car - Gracias </title>



    <!-- Preloader -->

    <link href="assets/css/preloader.css" rel="stylesheet" />

    <script src="assets/js/preloader.js"></script>

    <link href="assets/bxslider/jquery.bxslider.min.css" rel="stylesheet" />

    <!-- Bootstrap -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- CSS -->

    <link href="assets/css/main.css" rel="stylesheet" />

    <!-- AngularJS -->



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

    <div class="servicios_banner">

        <div class="top">

            <h1 class="titulo">Gracias</h1>

        </div>

    </div>

    <div class="container">

        <br><br>

        <p class="titulo">GRACIAS POR SU RESERVA</p>

    </div>

    <div class="detalles_carro">

        <div class="container">

            <div class="col-sm-12">

                <div class="col-sm-6">

                    <div class="fondo">

                        <p class="titulo">

                            Detalles de vehículo

                        </p>

                        <div class="col-sm-10 col-sm-offset-1">

                            <hr>

                        </div>

                        <div class="col-sm-12">

                            <div class="col-sm-3 pd0">

                                <img src="assets/img/tipos/carro_01.png" class="carro">

                            </div>

                            <div class="col-sm-9 pd0 texto">

                                <div class="col-sm-6 pd0">

                                    <p>

                                        <span>Modelo: </span>

                                        <span><b><? echo $modeloAuto; ?></b></span>

                                        <input type="hidden" name="modeloAuto" value="<? echo $carro; ?>">

                                    </p>

                                    <img src="assets/img/tipos/persona-01.svg" class="icon_n"><span class="person"> <b><? echo $numPersona; ?> Personas</b></span><br>

                                    <input type="hidden" name="numPersona" value="<? echo $personas; ?> ">

                                    <p class="top_new_img">

                                        <img src="assets/img/tipos/puertas-01.svg" class="icon_n"><span class="person"><b><? echo $numPuertas; ?> Puertas</b></span>

                                        <input type="hidden" name="numPuertas" value="<? echo $puertas;?>">

                                    </p>

                                </div>

                                <div class="col-sm-6 pd0">

                                    <p>

                                        <span>Transmisión: </span>

                                        <span> <b><? echo $transmisionT; ?></b></span>

                                        <input type="hidden" name="transmisionT" value="<? echo $transmision;?>">

                                    </p>

                                    <img src="assets/img/tipos/maletas-01.svg" class="icon_n"><span class="person"> <? echo $maletasM; ?> Maletas</span>

                                    <input type="hidden" name="maletasM" value="<? echo $maletas;?>">

                                </div>

                                <div class="col-sm-12 pd0">

                                    <p class="titulo02">

                                        <? echo $extrasE; ?>

                                        <input type="hidden" name="extrasE" value="<? echo $extras; ?>">

                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6">

                    <div class="fondo">

                        <p class="titulo">

                            Detalles de reservación

                        </p>

                        <div class="col-sm-6 linea01">

                            <p class="reser_titulo">Datos de Entrega</p>

                            <p class="parraf"><? echo $valorV; ?></p>

                            <p class="parraf"><? echo $fechaInicio; ?></p>

                            <p class="parraf"><? echo $horarioInicio; ?></p>



                            <input type="hidden" name="valorV" value="<? echo $valor1;?>">

                            <input type="hidden" name="fechaInicio" value="<? echo $fechaInicio; ?>">

                            <input type="hidden" name="horarioInicio" value="<? echo $horario; ?>">

                        </div>

                        <div class="col-sm-6 linea02">                          

                            <p class="reser_titulo">Oficina de devolución</p>

                            <p class="parraf"><? echo $devoValor2; ?></p>

                            <p class="parraf"><? echo $fechaDev; ?></p>

                            <p class="parraf"><? echo $horaDevD; ?></p>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-sm-12" style="height: 50px;"></div>

            <div class="col-sm-4">

                <p class="titulo">

                    CLIENTE

                </p>

                <p><b>Nombre:</b> <? echo $nombreC; ?></p>

                <p><b>Correo electrónico:</b> <? echo $correoC; ?></p>

                <p><b>Celular:</b> <? echo $celularC; ?></p>

                <p><b>Teléfono:</b> <? echo $telefonoC; ?></p>

                <p><b>Tarjeta de crédito:</b> <? echo $tarjetaC; ?></p>

            </div>

            <div class="col-sm-4">

                <p class="titulo">

                    DIRECCIÓN

                </p>

                <p><b>Dirección:</b> <? echo $direccionC; ?></p>

                <p><b>Ciudad:</b> <? echo $ciudadC; ?></p>

                <p><b>Estado:</b> <? echo $estadoC; ?></p>

                <p><b>País:</b> <? echo $paisC; ?></p>

                <p><b>Código Postal:</b> <? echo $codigoC; ?></p>

            </div>

            <div class="col-sm-4">

                <p class="titulo">

                    DETALLES DE LA RESERVA

                </p>

                <p><b>IVA:</b> <? echo $iva; ?></p>

                <p><b>Seguro de vehículo:</b> <? echo $valor_seguro1; ?></p>

                <p><b>Días:</b> <? echo $total_de_dias; ?></p>

                <p><b>Total por Día:</b> <? echo $totDia; ?></p>

                <p><b>Precio total:</b> <? echo $total; ?></p>

                <p><b>Servicio adicional:</b><? echo $valor_gps; ?>, <? echo $valor_asiento; ?>, <? echo $valor_chofer; ?></p>



            </div>

        </div>

    </div>

    <!---->

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



</body>

</html>





