<?php 
$entrega = $_POST['entrega']; 
$fechaEntrada = $_POST['fechaEntrada'];
$horario = $_POST['horario'];
$devolucion = $_POST['devolucion'];
$fecha_devolucion = $_POST['fecha_devolucion'];
$dev_horario = $_POST['dev_horario'];
$promocion = $_POST['promocion'];
echo $promocion;
 ?>
<!DOCTYPE html>
<html lang="es" ng-app="MetodikaTI">
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
    <title>Excell Re </title>

    <!-- Preloader -->
    <link href="assets/css/preloader.css" rel="stylesheet" />
    <script src="assets/js/preloader.js"></script>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/bxslider/jquery.bxslider.min.css" rel="stylesheet" />
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- CSS -->
    <link href="assets/css/main.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.2/angular.min.js"></script>
    <script src="app/app.js"></script>

    <!-- Analytics code -->
    <?php include_once('src/partial/seo/analytics.php'); ?>
</head>
<body>
<!-- Preloader -->
<div class="preloader"></div>
<!-- All page content goes inside this div -->
<div id="pageContent" class="main-wrapper">
    <!-- Page header section -->
    <?php include_once('src/partial/header2.php'); ?>

    <!-- Page content section -->
    <div class="sec_tipos">
	    <div class="container">
	    	<p class="tipos_autos">
	    		AUTOS
	    	</p>
	    	<p class="tipo_selecciona">
	    		¡Selecciona el auto que más se adapte a sus necesidades!
	    	</p>
	    </div>
	</div>
    <!---->
    
    	<div class="sec_dos_tipos">
			<!---->
	    	<div class="container-fluid btomm">
	    		<div class="col-sm-10 col-sm-offset-1">
	    			<div class="col-sm-4">
	    				<form class="col-sm-12 tipo1 vehiculo"  tipo="1"  auto="march" carroImg="carro_01.png" action="detalles-carros.php" method="POST">
	    					<div class="col-sm-12 alto_heigh">
	    						<div id='automty' class="automty thumbnail" style='display:none;'>
		    						<img src="assets/img/tipos/flecha.svg" class="flecha">
		    					</div>
	    					</div>
		    				<p class="titulo_carro">
		    					<input type="text" readonly="readonly" name="nombre_carro" value="March" class="form-control">
		    				</p>
		    				<div class="col-sm-12 pd0 thumbnail">
		    					<img src="assets/img/tipos/carro_01.png" class="img-responsive">
		    				</div>
		    				<p class="text_center">
		    					<span class="titulo01" id="manual">Transmisión Manual </span>
		    					<span class="precio" id="precio"> $417.24 MX</span>
		    				</p>
		    				<div class="col-sm-12">
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-user"></i> 5 personas
		    						</span>
		    					</div>
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-suitcase"></i> 2 maletas
		    						</span>
		    					</div>
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-car"></i> 5 puertas
		    						</span>
		    					</div>
		    				</div>
		    				<p class="titulo02">
		    					Aire acondicionado, CD / MP3 / USB / AUX
		    				</p>
		    				<div class="col-sm-6 col-sm-offset-3 automty" id='automty1' style='display:none;'>
				                <a href="#">
				                	<input type="hidden" name="carro" value="March">
				                	<input type="hidden" name="nombreImagen" value="carro_01.png">
				                	<input type="hidden" name="transmision" value="Manual">
				                	<input type="hidden" name="precio1" value="417.24">
				                	<input type="hidden" name="precio2" value="0">
				                	<input type="hidden" name="personas" value="5">
				                	<input type="hidden" name="maletas" value="2">
				                	<input type="hidden" name="puertas" value="5">
				                	<input type="hidden" name="extras" value="Aire acondicionado, CD / MP3 / USB / AUX">
				                	<!--Primer Formulario-->
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<input type="hidden" name="fechEn"  value="<? echo $fechaEntrada; ?>"/>
				                	<input type="hidden" name="horario"   value="<? echo $horario; ?>"/>
				                	<input type="hidden" name="devoluc"  value="<? echo $devolucion; ?>"/>
				                	<input type="hidden" name="fechDv" value="<? echo $fecha_devolucion; ?>"/>
				                	<input type="hidden" name="horaDev"  value="<? echo $dev_horario; ?>"/>
				                	<input type="hidden" name="codigo"  value="<? echo $promocion; ?>"/>
				                	<!--Fin del Primer Formulario-->
				                    <button class="button button_tipos" type="submit">
				                        Continuar
				                    </button>
				                </a>
		    				</div>
			    		</form>
	    			</div>
	    			<div class="col-sm-4">
	    				<form class="col-sm-12 tipo1 vehiculo" tipo="2" auto="aveo" carroImg="carro_02.png"  action="detalles-carros.php" method="POST">
	    					<div class="col-sm-12 alto_heigh">
	    						<div id='automty' class="automty thumbnail" style='display:none;'>
		    						<img src="assets/img/tipos/flecha.svg" class="flecha">
		    					</div>
	    					</div>
		    				<p class="titulo_carro">
		    					<input type="" readonly="readonly" name="nombre_carro" value="Aveo" class="form-control">
		    				</p>
		    				<div class="col-sm-12 pd0 thumbnail">
		    					<img src="assets/img/tipos/carro_02.png" class="img-responsive">
		    				</div>
		    				<p class="text_center">
		    					<span class="titulo01">Transmisión Manual</span>
		    					<span class="precio">$503.44 MX</span>
		    				</p>
		    				<p class="text_center02">
		    					<span class="titulo01">Transmisión Automática</span>
		    					<span class="precio">$546.55 MX</span>
		    				</p>
		    				<div class="col-sm-12">
		    					<div class="col-sm-4">
		    						<span class="input-group-addon">
		    							<i class="fa fa-user"></i> 5 personas
		    						</span>
		    					</div>
		    					<div class="col-sm-4">
		    						<span class="input-group-addon">
		    							<i class="fa fa-suitcase"></i> 4 maletas
		    						</span>
		    					</div>
		    					<div class="col-sm-4">
		    						<span class="input-group-addon">
		    							<i class="fa fa-car"></i> 4 puertas
		    						</span>
		    					</div>
		    				</div>
		    				<p class="titulo02">
		    					Aire acondicionado, CD / MP3 / USB / AUX
		    				</p>
		    				<div class="col-sm-6 col-sm-offset-3 automty" id='automty1' style='display:none;'>
				                <a href="#">
				                	<input type="hidden" name="carro" value="Aveo">
				                	<input type="hidden" name="nombreImagen" value="carro_02.png">
				                	<input type="hidden" name="transmision" value="Manual">
				                	<input type="hidden" name="precio1" value="503.44">
				                	<input type="hidden" name="precio2" value="546.55">

				                	<input type="hidden" name="personas" value="5">
				                	<input type="hidden" name="maletas" value="2">
				                	<input type="hidden" name="puertas" value="5">
				                	<input type="hidden" name="extras" value="Aire acondicionado, CD / MP3 / USB / AUX">
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<!--Primer Formulario-->
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<input type="hidden" name="fechEn"  value="<? echo $fechaEntrada; ?>"/>
				                	<input type="hidden" name="horario"   value="<? echo $horario; ?>"/>
				                	<input type="hidden" name="devoluc"  value="<? echo $devolucion; ?>"/>
				                	<input type="hidden" name="fechDv" value="<? echo $fecha_devolucion; ?>"/>
				                	<input type="hidden" name="horaDev"  value="<? echo $dev_horario; ?>"/>
				                	<input type="hidden" name="codigo"  value="<? echo $promocion; ?>"/>
				                	<!--Fin del Primer Formulario-->
				                    <button class="button button_tipos" type="submit">
				                        Continuar
				                    </button>
				                </a>
		    				</div>
			    		</form>
	    			</div>
	    			<div class="col-sm-4">
	    				<form class="col-sm-12 tipo1 vehiculo" tipo="2" auto="tiida" carroImg="carro_03.png"  action="detalles-carros.php" method="POST">
	    					<div class="col-sm-12 alto_heigh">
	    						<div id='automty' class="automty thumbnail" style='display:none;'>
		    						<img src="assets/img/tipos/flecha.svg" class="flecha">
		    					</div>
	    					</div>
		    				<p class="titulo_carro">
		    					<input type="" readonly="readonly" name="nombre_carro" value="Tiida" class="form-control">
		    				</p>
		    				<div class="col-sm-12 pd0 thumbnail">
		    					<img src="assets/img/tipos/carro_03.png" class="img-responsive">
		    				</div>
		    				<p class="text_center">
		    					<span class="titulo01">Transmisión Manual</span>
		    					<span class="precio">$589.65 MX</span>
		    				</p>
		    				<p class="text_center02">
		    					<span class="titulo01">Transmisión Automática</span>
		    					<span class="precio">$632.75 MX</span>
		    				</p>
		    				<div class="col-sm-12">
		    					<div class="col-sm-4">
		    						<span class="input-group-addon">
		    							<i class="fa fa-user"></i> 5 personas
		    						</span>
		    					</div>
		    					<div class="col-sm-4">
		    						<span class="input-group-addon">
		    							<i class="fa fa-suitcase"></i> 2 maletas
		    						</span>
		    					</div>
		    					<div class="col-sm-4">
		    						<span class="input-group-addon">
		    							<i class="fa fa-car"></i> 5 puertas
		    						</span>
		    					</div>
		    				</div>
		    				<p class="titulo02">
		    					Aire acondicionado, CD / MP3 / USB / AUX
		    				</p>
		    				<div class="col-sm-6 col-sm-offset-3 automty" id='automty1' style='display:none;'>
				                <a href="#">
				                	<input type="hidden" name="carro" value="Tiida">
				                	<input type="hidden" name="nombreImagen" value="carro_03.png">
				                	<input type="hidden" name="transmision" value="Manual">
				                	<input type="hidden" name="precio1" value="589.65">
				                	<input type="hidden" name="precio2" value="632.75">

				                	<input type="hidden" name="personas" value="5">
				                	<input type="hidden" name="maletas" value="2">
				                	<input type="hidden" name="puertas" value="5">
				                	<input type="hidden" name="extras" value="Aire acondicionado, CD / MP3 / USB / AUX">
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<!--Primer Formulario-->
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<input type="hidden" name="fechEn"  value="<? echo $fechaEntrada; ?>"/>
				                	<input type="hidden" name="horario"   value="<? echo $horario; ?>"/>
				                	<input type="hidden" name="devoluc"  value="<? echo $devolucion; ?>"/>
				                	<input type="hidden" name="fechDv" value="<? echo $fecha_devolucion; ?>"/>
				                	<input type="hidden" name="horaDev"  value="<? echo $dev_horario; ?>"/>
				                	<input type="hidden" name="codigo"  value="<? echo $promocion; ?>"/>
				                	<!--Fin del Primer Formulario-->
				                    <button class="button button_tipos" type="submit">
				                        Continuar
				                    </button>
				                </a>
		    				</div>
			    		</form>
	    			</div>
	    		</div>
	    	</div>
	    	<div class="container-fluid btomm">
	    		<div class="col-sm-10 col-sm-offset-1">
	    			<div class="col-sm-4">
	    				<form class="col-sm-12 tipo1 vehiculo" tipo="2" auto="versa" carroImg="carro_04.png"   action="detalles-carros.php" method="POST">
	    					<div class="col-sm-12 alto_heigh">
	    						<div class="automty thumbnail" style='display:none;'>
		    						<img src="assets/img/tipos/flecha.svg" class="flecha">
		    					</div>
	    					</div>
		    				<p class="titulo_carro">
		    					<input type="" readonly="readonly" name="nombre_carro" value="Versa" class="form-control">
		    				</p>
		    				<div class="col-sm-12 pd0 thumbnail">
		    					<img src="assets/img/tipos/carro_04.png" class="img-responsive">
		    				</div>
		    				<p class="text_center">
		    					<span class="titulo01">Transmisión Manual</span>
		    					<span class="precio">$589.65 MX</span>
		    				</p>
		    				<p class="text_center02">
		    					<span class="titulo01">Transmisión Automática</span>
		    					<span class="precio">$632.75 MX</span>
		    				</p>
		    				<div class="col-sm-12">
		    					<div class="col-sm-4">
		    						<span class="input-group-addon">
		    							<i class="fa fa-user"></i> 5 personas
		    						</span>
		    					</div>
		    					<div class="col-sm-4">
		    						<span class="input-group-addon">
		    							<i class="fa fa-suitcase"></i> 2 maletas
		    						</span>
		    					</div>
		    					<div class="col-sm-4">
		    						<span class="input-group-addon">
		    							<i class="fa fa-car"></i> 4 puertas
		    						</span>
		    					</div>
		    				</div>
		    				<p class="titulo02">
		    					Aire acondicionado, CD / MP3 / USB / AUX
		    				</p>
		    				<div class="col-sm-6 col-sm-offset-3 automty" style='display:none;'>
				                
				                <a href="#">
				                	<input type="hidden" name="carro" value="Versa">
				                	<input type="hidden" name="nombreImagen" value="carro_04.png">
				                	<input type="hidden" name="transmision" value="Manual">
				                	<input type="hidden" name="precio1" value="589.65">
				                	<input type="hidden" name="precio2" value="632.75">
				                	
				                	<input type="hidden" name="personas" value="5">
				                	<input type="hidden" name="maletas" value="2">
				                	<input type="hidden" name="puertas" value="5">
				                	<input type="hidden" name="extras" value="Aire acondicionado, CD / MP3 / USB / AUX">
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<!--Primer Formulario-->
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<input type="hidden" name="fechEn"  value="<? echo $fechaEntrada; ?>"/>
				                	<input type="hidden" name="horario"   value="<? echo $horario; ?>"/>
				                	<input type="hidden" name="devoluc"  value="<? echo $devolucion; ?>"/>
				                	<input type="hidden" name="fechDv" value="<? echo $fecha_devolucion; ?>"/>
				                	<input type="hidden" name="horaDev"  value="<? echo $dev_horario; ?>"/>
				                	<input type="hidden" name="codigo"  value="<? echo $promocion; ?>"/>
				                	<!--Fin del Primer Formulario-->
				                    <button class="button button_tipos" type="submit">
				                        Continuar
				                    </button>
				                </a>
		    				</div>
			    		</form>
	    			</div>
	    			<div class="col-sm-4">
	    				<form class="col-sm-12 tipo1 vehiculo" tipo="1" auto="sonic" carroImg="carro_05.png" action="detalles-carros.php" method="POST">
	    					<div class="col-sm-12 alto_heigh">
	    						<div class="automty thumbnail" style='display:none;'>
		    						<img src="assets/img/tipos/flecha.svg" class="flecha">
		    					</div>
	    					</div>
		    				<p class="titulo_carro">
		    					<input type="" readonly="readonly" name="nombre_carro" value="Sonic" class="form-control">
		    				</p>
		    				<div class="col-sm-12 pd0 thumbnail">
		    					<img src="assets/img/tipos/carro_05.png" class="img-responsive">
		    				</div>
		    				<p class="text_center">
		    					<span class="titulo01" id="manual">Transmisión Manual </span>
		    					<span class="precio" id="precio"> $632.75 MX</span>
		    				</p>
		    				<div class="col-sm-12">
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-user"></i> 5 personas
		    						</span>
		    					</div>
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-suitcase"></i> 2 maletas
		    						</span>
		    					</div>
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-car"></i> 4 puertas
		    						</span>
		    					</div>
		    				</div>
		    				<p class="titulo02">
		    					Aire acondicionado, CD / MP3 / USB / AUX
		    				</p>
		    				<div class="col-sm-6 col-sm-offset-3 automty" style='display:none;'>
				                
				                <a href="#">
				                	<input type="hidden" name="carro" value="Sonic">
				                	<input type="hidden" name="nombreImagen" value="carro_05.png">
				                	<input type="hidden" name="transmision" value="Manual">
				                	<input type="hidden" name="precio1" value="632.75">
				                	<input type="hidden" name="precio2" value="0">

				                	<input type="hidden" name="personas" value="5">
				                	<input type="hidden" name="maletas" value="2">
				                	<input type="hidden" name="puertas" value="5">
				                	<input type="hidden" name="extras" value="Aire acondicionado, CD / MP3 / USB / AUX">
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<!--Primer Formulario-->
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<input type="hidden" name="fechEn"  value="<? echo $fechaEntrada; ?>"/>
				                	<input type="hidden" name="horario"   value="<? echo $horario; ?>"/>
				                	<input type="hidden" name="devoluc"  value="<? echo $devolucion; ?>"/>
				                	<input type="hidden" name="fechDv" value="<? echo $fecha_devolucion; ?>"/>
				                	<input type="hidden" name="horaDev"  value="<? echo $dev_horario; ?>"/>
				                	<input type="hidden" name="codigo"  value="<? echo $promocion; ?>"/>
				                	<!--Fin del Primer Formulario-->
				                    <button class="button button_tipos" type="submit">
				                        Continuar
				                    </button>
				                </a>
		    				</div>
			    		</form>
	    			</div>
	    			<div class="col-sm-4">
	    				<form class="col-sm-12 tipo1 vehiculo" tipo="1" auto="yaris" carroImg="carro_06.png"  action="detalles-carros.php" method="POST">
	    					<div class="col-sm-12 alto_heigh">
	    						<div class="automty thumbnail" style='display:none;'>
		    						<img src="assets/img/tipos/flecha.svg" class="flecha">
		    					</div>
	    					</div>
		    				<p class="titulo_carro">
		    					<input type="" readonly="readonly" name="nombre_carro" value="Yaris" class="form-control">
		    				</p>
		    				<div class="col-sm-12 pd0 thumbnail">
		    					<img src="assets/img/tipos/carro_06.png" class="img-responsive">
		    				</div>
		    				<p class="text_center">
		    					<span class="titulo01" id="manual">Transmisión Manual </span>
		    					<span class="precio" id="precio"> $675.86 MX</span>
		    				</p>
		    				<div class="col-sm-12">
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-user"></i> 5 personas
		    						</span>
		    					</div>
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-suitcase"></i> 4 maletas
		    						</span>
		    					</div>
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-car"></i> 4 puertas
		    						</span>
		    					</div>
		    				</div>
		    				<p class="titulo02">
		    					Aire acondicionado, CD / MP3 / USB / AUX
		    				</p>
		    				<div class="col-sm-6 col-sm-offset-3 automty" style='display:none;'>
				                
				                <a href="#">
				                	<input type="hidden" name="carro" value="Yaris">
				                	<input type="hidden" name="nombreImagen" value="carro_06.png">
				                	<input type="hidden" name="transmision" value="Manual">
				                	<input type="hidden" name="precio1" value="675.86">
				                	<input type="hidden" name="precio2" value="0">

				                	<input type="hidden" name="personas" value="5">
				                	<input type="hidden" name="maletas" value="2">
				                	<input type="hidden" name="puertas" value="5">
				                	<input type="hidden" name="extras" value="Aire acondicionado, CD / MP3 / USB / AUX">
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<!--Primer Formulario-->
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<input type="hidden" name="fechEn"  value="<? echo $fechaEntrada; ?>"/>
				                	<input type="hidden" name="horario"   value="<? echo $horario; ?>"/>
				                	<input type="hidden" name="devoluc"  value="<? echo $devolucion; ?>"/>
				                	<input type="hidden" name="fechDv" value="<? echo $fecha_devolucion; ?>"/>
				                	<input type="hidden" name="horaDev"  value="<? echo $dev_horario; ?>"/>
				                	<input type="hidden" name="codigo"  value="<? echo $promocion; ?>"/>
				                	<!--Fin del Primer Formulario-->
				                    <button class="button button_tipos" type="submit">
				                        Continuar
				                    </button>
				                </a>
		    				</div>
			    		</form>
	    			</div>
	    		</div>
	    	</div>
	    	<div class="container-fluid btomm">
	    		<div class="col-sm-10 col-sm-offset-1">
	    			<div class="col-sm-4">
	    				<form class="col-sm-12 tipo1 vehiculo" tipo="3" auto="vento" carroImg="carro_07.png"   action="detalles-carros.php" method="POST">
	    					<div class="col-sm-12 alto_heigh">
	    						<div class="automty thumbnail" style='display:none;'>
		    						<img src="assets/img/tipos/flecha.svg" class="flecha">
		    					</div>
	    					</div>
		    				<p class="titulo_carro">
		    					<input type="" readonly="readonly" name="nombre_carro" value="Vento" class="form-control">
		    				</p>
		    				<div class="col-sm-12 pd0 thumbnail">
		    					<img src="assets/img/tipos/carro_07.png" class="img-responsive">
		    				</div>
		    				<p class="text_center">
		    					<span class="titulo01" id="manual">Transmisión Automatica  </span>
		    					<span class="precio" id="precio"> $675.86 MX</span>
		    				</p>
		    				<div class="col-sm-12">
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-user"></i> 5 personas
		    						</span>
		    					</div>
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-suitcase"></i> 4 maletas
		    						</span>
		    					</div>
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-car"></i> 4 puertas
		    						</span>
		    					</div>
		    				</div>
		    				<p class="titulo02">
		    					Aire acondicionado, CD / MP3 / USB / AUX
		    				</p>
		    				<div class="col-sm-6 col-sm-offset-3 automty" style='display:none;'>
				                
				                <a href="#">
				                	<input type="hidden" name="carro" value="Vento">
				                	<input type="hidden" name="nombreImagen" value="carro_07.png">
				                	<input type="hidden" name="transmision" value="Manual">
				                	<input type="hidden" name="precio1" value="0">
				                	<input type="hidden" name="precio2" value="675.86">
				                	
				                	<input type="hidden" name="personas" value="5">
				                	<input type="hidden" name="maletas" value="2">
				                	<input type="hidden" name="puertas" value="5">
				                	<input type="hidden" name="extras" value="Aire acondicionado, CD / MP3 / USB / AUX">
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<!--Primer Formulario-->
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<input type="hidden" name="fechEn"  value="<? echo $fechaEntrada; ?>"/>
				                	<input type="hidden" name="horario"   value="<? echo $horario; ?>"/>
				                	<input type="hidden" name="devoluc"  value="<? echo $devolucion; ?>"/>
				                	<input type="hidden" name="fechDv" value="<? echo $fecha_devolucion; ?>"/>
				                	<input type="hidden" name="horaDev"  value="<? echo $dev_horario; ?>"/>
				                	<input type="hidden" name="codigo"  value="<? echo $promocion; ?>"/>
				                	<!--Fin del Primer Formulario-->
				                    <button class="button button_tipos" type="submit">
				                        Continuar
				                    </button>
				                </a>
		    				</div>
			    		</form>
	    			</div>
	    			<div class="col-sm-4">
	    				<form class="col-sm-12 tipo1 vehiculo" tipo="1" auto="urvan" carroImg="carro_08.png"    action="detalles-carros.php" method="POST">
	    					<div class="col-sm-12 alto_heigh">
	    						<div class="automty thumbnail" style='display:none;'>
		    						<img src="assets/img/tipos/flecha.svg" class="flecha">
		    					</div>
	    					</div>
		    				<p class="titulo_carro">
		    					<input type="" readonly="readonly" name="nombre_carro" value="Urvan" class="form-control">
		    				</p>
		    				<div class="col-sm-12 pd0 thumbnail">
		    					<img src="assets/img/tipos/carro_08.png" class="img-responsive">
		    				</div>
		    				<p class="text_center">
		    					<span class="titulo01" id="manual">Transmisión Manual</span>
		    					<span class="precio" id="precio">$1,451.72 MX</span>
		    				</p>
		    				<div class="col-sm-12">
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-user"></i> 12 personas
		    						</span>
		    					</div>
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-suitcase"></i> 6 maletas
		    						</span>
		    					</div>
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-car"></i> 4 puertas
		    						</span>
		    					</div>
		    				</div>
		    				<p class="titulo02">
		    					Aire acondicionado, CD / MP3 / USB / AUX
		    				</p>
		    				<div class="col-sm-6 col-sm-offset-3 automty" style='display:none;'>
				                
				                <a href="#">
				                	<input type="hidden" name="carro" value="Urvan">
				                	<input type="hidden" name="nombreImagen" value="carro_08.png">
				                	<input type="hidden" name="transmision" value="Manual">
				                	<input type="hidden" name="precio1" value="1451.72">
				                	<input type="hidden" name="precio2" value="0">
				                	
				                	<input type="hidden" name="personas" value="5">
				                	<input type="hidden" name="maletas" value="2">
				                	<input type="hidden" name="puertas" value="5">
				                	<input type="hidden" name="extras" value="Aire acondicionado, CD / MP3 / USB / AUX">
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<!--Primer Formulario-->
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<input type="hidden" name="fechEn"  value="<? echo $fechaEntrada; ?>"/>
				                	<input type="hidden" name="horario"   value="<? echo $horario; ?>"/>
				                	<input type="hidden" name="devoluc"  value="<? echo $devolucion; ?>"/>
				                	<input type="hidden" name="fechDv" value="<? echo $fecha_devolucion; ?>"/>
				                	<input type="hidden" name="horaDev"  value="<? echo $dev_horario; ?>"/>
				                	<input type="hidden" name="codigo"  value="<? echo $promocion; ?>"/>
				                	<!--Fin del Primer Formulario-->
				                    <button class="button button_tipos" type="submit">
				                        Continuar
				                    </button>
				                </a>
		    				</div>
			    		</form>
	    			</div>
	    			<div class="col-sm-4">
	    				<form class="col-sm-12 tipo1 vehiculo" tipo="1" auto="suburban" carroImg="carro_09.png" action="detalles-carros.php" method="POST">
	    					<div class="col-sm-12 alto_heigh">
	    						<div class="automty thumbnail" style='display:none;'>
		    						<img src="assets/img/tipos/flecha.svg" class="flecha">
		    					</div>
	    					</div>
		    				<p class="titulo_carro">
		    					<input type="" readonly="readonly" name="nombre_carro" value="Suburban" class="form-control">
		    				</p>
		    				<div class="col-sm-12 pd0 thumbnail">
		    					<img src="assets/img/tipos/carro_09.png" class="img-responsive">
		    				</div>
		    				<p class="text_center">
		    					<span class="titulo01" id="manual">Transmisión Manual</span>
		    					<span class="precio" id="precio">$1,710.34 MX</span>
		    				</p>
		    				<div class="col-sm-12">
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-user"></i> 9 personas
		    						</span>
		    					</div>
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-suitcase"></i> 6 maletas
		    						</span>
		    					</div>
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-car"></i> 5 puertas
		    						</span>
		    					</div>
		    				</div>
		    				<p class="titulo02">
		    					Aire acondicionado, CD / MP3 / USB / AUX
		    				</p>
		    				<div class="col-sm-6 col-sm-offset-3 automty" style='display:none;'>
				                
				                <a href="#">
				                	<input type="hidden" name="carro" value="Suburban">
				                	<input type="hidden" name="nombreImagen" value="carro_09.png">
				                	<input type="hidden" name="transmision" value="Manual">
				                	<input type="hidden" name="precio1" value="1710.34">
				                	<input type="hidden" name="precio2" value="0">
				                	
				                	<input type="hidden" name="personas" value="5">
				                	<input type="hidden" name="maletas" value="2">
				                	<input type="hidden" name="puertas" value="5">
				                	<input type="hidden" name="extras" value="Aire acondicionado, CD / MP3 / USB / AUX">
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<!--Primer Formulario-->
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<input type="hidden" name="fechEn"  value="<? echo $fechaEntrada; ?>"/>
				                	<input type="hidden" name="horario"   value="<? echo $horario; ?>"/>
				                	<input type="hidden" name="devoluc"  value="<? echo $devolucion; ?>"/>
				                	<input type="hidden" name="fechDv" value="<? echo $fecha_devolucion; ?>"/>
				                	<input type="hidden" name="horaDev"  value="<? echo $dev_horario; ?>"/>
				                	<input type="hidden" name="codigo"  value="<? echo $promocion; ?>"/>
				                	<!--Fin del Primer Formulario-->
				                    <button class="button button_tipos" type="submit">
				                        Continuar
				                    </button>
				                </a>
		    				</div>
			    		</form>
	    			</div>
	    		</div>
	    	</div>
	    	<div class="container-fluid btomm">
	    		<div class="col-sm-10 col-sm-offset-1">
	    			<div class="col-sm-4">
	    				<form class="col-sm-12 tipo1 vehiculo" tipo="1" auto="hiace" carroImg="carro_10.png"  action="detalles-carros.php" method="POST">
	    					<div class="col-sm-12 alto_heigh">
	    						<div class="automty thumbnail" style='display:none;'>
		    						<img src="assets/img/tipos/flecha.svg" class="flecha">
		    					</div>
	    					</div>
		    				<p class="titulo_carro">
		    					<input type="" readonly="readonly" name="nombre_carro" value="Hiace" class="form-control">
		    				</p>
		    				<div class="col-sm-12 pd0 thumbnail">
		    					<img src="assets/img/tipos/carro_10.png" class="img-responsive">
		    				</div>
		    				<p class="text_center">
		    					<span class="titulo01" id="manual">Transmisión Manual</span>
		    					<span class="precio" id="precio">$1,710.34 MX</span>
		    				</p>
		    				<div class="col-sm-12">
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-user"></i> 15 personas
		    						</span>
		    					</div>
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-suitcase"></i> 6 maletas
		    						</span>
		    					</div>
		    					<div class="col-sm-4 thumbnail">
		    						<span class="input-group-addon">
		    							<i class="fa fa-car"></i> 4 puertas
		    						</span>
		    					</div>
		    				</div>
		    				<p class="titulo02">
		    					Aire acondicionado, CD / MP3 / USB / AUX
		    				</p>
		    				<div class="col-sm-6 col-sm-offset-3 automty" style='display:none;'>
				                
				                <a href="#">
				                	<input type="hidden" name="carro" value="Hiace">
				                	<input type="hidden" name="nombreImagen" value="carro_10.png">
				                	<input type="hidden" name="transmision" value="Manual">
				                	<input type="hidden" name="precio1" value="1710.34">
				                	<input type="hidden" name="precio2" value="0">
				                	
				                	<input type="hidden" name="personas" value="5">
				                	<input type="hidden" name="maletas" value="2">
				                	<input type="hidden" name="puertas" value="5">
				                	<input type="hidden" name="extras" value="Aire acondicionado, CD / MP3 / USB / AUX">
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<!--Primer Formulario-->
				                	<input type="hidden" name="oficina" value="<? echo $entrega; ?>"/>
				                	<input type="hidden" name="fechEn"  value="<? echo $fechaEntrada; ?>"/>
				                	<input type="hidden" name="horario"   value="<? echo $horario; ?>"/>
				                	<input type="hidden" name="devoluc"  value="<? echo $devolucion; ?>"/>
				                	<input type="hidden" name="fechDv" value="<? echo $fecha_devolucion; ?>"/>
				                	<input type="hidden" name="horaDev"  value="<? echo $dev_horario; ?>"/>
				                	<input type="hidden" name="codigo"  value="<? echo $promocion; ?>"/>
				                	<!--Fin del Primer Formulario-->
				                    <button class="button button_tipos" type="submit">
				                        Continuar
				                    </button>
				                </a>
		    				</div>
			    		</form>
	    			</div>
	    		</div>
	    	</div> 
			<div class="container">
			  <!-- Modal -->
			  <div class="modal fade myModal" id="myModal" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <h4 class="modal-title">Detalles del vehículo</h4>
			        </div>
			        <div class="modal-body">
			          <p class="titulo02">Eliga la transmisión</p>
			          	<select class="form-control" name="tipo_trasmision">
			          		<option value="manual">Manual</option>
			          		<option value="automatico">Automático</option>
			          	</select>
			        </div>
			        <!-- Modal footer -->
			        <div class="modal-footer">
			          	<button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" onclick="modalSubmit()">
			          		Aceptar
			          	</button>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<!------- ----- ----- ----- ----- ---------- ----- ----- ----- ----- ----- --- 
		---------- ----- ----- -----   PASO  2  ----- ----- ----- ----- ----- ----- --
		----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ------>		
	    <div class="paso_dos" style="display: none;">
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
		    									<span> <b>March</b></span>
		    								</p>
		    								<img src="assets/img/tipos/persona-01.svg" class="icon_n"><span class="person"> 5 Personas</span><br>
		    								<p class="top_new_img">
		    									<img src="assets/img/tipos/puertas-01.svg" class="icon_n"><span class="person"> 5 Puertas</span>
		    								</p>
		    							</div>
		    							<div class="col-sm-6 pd0">
		    								<p>
		    									<span>Transmisión: </span>
		    									<span> <b>Manual</b></span>
		    								</p>
		    								<img src="assets/img/tipos/maletas-01.svg" class="icon_n"><span class="person"> 2 Maletas</span>
		    							</div>
		    							<div class="col-sm-12 pd0">
						    				<p class="titulo02">
						    					Aire acondicionado, CD / MP3 / USB / AUX
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
			    					<p class="parraf">Monterrey Aeropuerto</p>
			    					<p class="parraf">18 de Septiembre de 2018</p>
			    					<p class="parraf">13:00 PM</p>
		    					</div>
		    					<div class="col-sm-6 linea02">    						
		    						<p class="reser_titulo">Oficina de devolución</p>
			    					<p class="parraf">Monterrey Aeropuerto</p>
			    					<p class="parraf">27 de Septiembre de 2018</p>
			    					<p class="parraf">14:00 PM</p>
		    					</div>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
			</div>
			<div class="sec_02">
				<div class="container-fluid">
					<div class="col-sm-12 thumbnail">
						<p class="sec2_titulo">Personal de Excell Plus Rent a Car estará esperandolo en el aeropuerto con un letrero indicando su nombre para que nos identifique.</p>
					</div>
				</div>
			</div>
			<!------------------------------->
			<div class="sec_03">
				<div class="container-fluid pd0">
					<div class="col-sm-8 pd0">
						<div class="col-sm-12 pd0 fondo01">
							<div class="col-sm-10 col-sm-offset-1 parrafo">
								<p class="titulo">Selecciona tu seguro</p>
								<div class="col-sm-12 pd0">
									<div class="col-sm-6 pd0">
								  		<input type="radio" name="gender" value="male"> Selecciona cobertura básica TPL incluído en todas nuestras tarifas
									</div>
									<div class="col-sm-6">
										<ul>
											<li>
												Daños a terceras personas
											</li>
											<li>
												Gastos médicos a ocupantes
												</li>
											<li>
												Asistencia legal
											</li>
										</ul>
										</div>
									</div>
									<div class="col-sm-12 pd0">
										<div class="col-sm-6 pd0">
								  			<input type="radio" name="gender" value="male"> Selecciona amplia CDW $100 + IVA por día
										</div>
										<div class="col-sm-6">
											<ul>
												<li>
													Daños a terceras personas
												</li>
												<li>
													Gastos médicos a ocupantes
												</li>
												<li>
													Asistencia legal
												</li>
												<li>
													Beneficio de pagar un<br>deducible en caso de <br>accidente o robo 10% en<br>
													accidente, 20% en robo total
												</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-12 pd0">
										<div class="col-sm-6 pd0">
								  			<input type="radio" name="gender" value="male"> Selecciona cobertura full FULL COVER $400 + IVA en camionetas (+ precio de seguro CDW)
										</div>
										<div class="col-sm-6">
											<ul>
												<li>
													Daños a terceras personas
												</li>
												<li>
													Gastos médicos a ocupantes
												</li>
												<li>
													Asistencia legal
												</li>
												<li>
													Sin pago a deducible
												</li>
											</ul>
										</div>
									</div>
							</div>
						</div>
							<div class="col-sm-10 col-sm-offset-1 fondo03">
								<p class="titulo">Selecciona algún servicio adicional</p>
								<div class="col-sm-4 thumbnail">
									<img src="assets/img/tipos/gps.svg" class="icon_form">
									<p class="nombre">
										<input type="radio" name="gps" value="male"> GPS(Gratis) 
									</p>
								</div>
								<div class="col-sm-4 thumbnail">
									<img src="assets/img/tipos/asiento.svg" class="icon_form">
									<p class="nombre">
										<input type="radio" name="gps" value="male"> Asiento para bebé (Gratis) 
									</p>
								</div>
								<div class="col-sm-4 thumbnail">
									<img src="assets/img/tipos/chofer.svg" class="icon_form">
									<p class="nombre">
										<input type="radio" name="gps" value="male"> Chofer ($600 al día) 
									</p>
								</div>
							</div>
					</div>
					<div class="col-sm-4 fondo02">
						<p class="segundo_titulo">Total</p>
						<p class="uno">Subtotal del Vehículo</p>
		  				<input type="text" name="firstname" class="form-control">
						<p class="uno">Subtotal del Seguro</p>
		  				<input type="text" name="firstname"  class="form-control">
						<p class="uno">IVA</p>
		  				<input type="text" name="firstname"  class="form-control">
						<p class="uno">Total por día</p>
		  				<input type="text" name="firstname"  class="form-control">
						<p class="uno">Total por 2 día (2)</p>
		  				<input type="text" name="firstname"  class="form-control">
		  				<button type="submit" class="button cont">Continuar</button>
					</div>
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
<script>
	var vehiculo = "";
	$(document).ready(function(){
		$(this).on("click", ".vehiculo", function(){
			$(".vehiculo").removeClass("tipo2");
			$(".vehiculo").addClass("tipo1");
			$(".vehiculo").find(".automty").hide();

			vehiculo = $(this);
			if (vehiculo.hasClass("tipo1")) {
				vehiculo.removeClass("tipo1");
				vehiculo.addClass("tipo2");
				vehiculo.find(".automty").show();
				//obtiene el nombre del carro
				var auto = vehiculo.attr("auto")
				var carroImg = vehiculo.attr("carroImg")
			}else{
				vehiculo.removeClass("tipo2");
				vehiculo.addClass("tipo1");
				vehiculo.find(".automty").hide();
			}
			var tipo = vehiculo.attr("tipo");
			if (tipo == 2) {
			    $("#myModal").modal("show");
			}
		});



	});

	function modalSubmit(){
		var tipo_trasmision = $("select[name='tipo_trasmision']").val();
		vehiculo.find("input[name='transmision']").val(tipo_trasmision);
	}

</script>
</body>
</html>