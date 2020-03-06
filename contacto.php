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
    <title>Contactos </title>

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
    		<h1 class="titulo">Servicios</h1>
    	</div>
    </div>
    <!---->
    <div class="container">
    	<p class="tituloContactos">Contacto</p>
    	<form  method="post" name="contacto" class="formularContacto">
    		<div class="col-sm-10">
		    	<div class="col-sm-12 top_input pd0">
		    		<div class="col-sm-6">
		    			Nombre*
		    			<input type="text" class="form-control" name="nombre">
		    		</div>
		    		<div class="col-sm-6">
		    			Correo electrónico *
		    			<input type="text" class="form-control" name="correo">
		    		</div>
		    	</div>
		    	<div class="col-sm-12 top_input pd0">
		    		<div class="col-sm-6">
		    			Celular*
		    			<input type="text" class="form-control" name="celular">
		    		</div>
		    		<div class="col-sm-6">
		    			Teléfono casa
		    			<input type="text" class="form-control" name="telefono">
		    		</div>
		    	</div>
		    	<div class="col-sm-12 top_input pd0">
		    		<div class="col-sm-6">
		    			Empresa*
		    			<input type="text" class="form-control" name="empresa">
		    		</div>
		    		<div class="col-sm-6">
		    			Ciudad*
		    			<input type="text" class="form-control" name="ciudad">
		    		</div>
		    	</div>
		    	<div class="col-sm-12 top_input pd0">
		    		<div class="col-sm-6">
		    			Comentario*
		    			<input type="text" class="form-control" name="mensaje">
		    		</div>
		    		<div class="col-sm-6">
		    		</div>
		    	</div>
		    	<div class="col-sm-12 top_input pd0">
		    		<div class="col-sm-6">
		    			<button type="submit" id="valida_contac" class="button cnt">ENVIAR</button>
		    		</div>
		    	</div>
    		</div>
    	</form>
    </div>
    <div class="prefooter_contactos">
	    <div class="container">
			<div class="col-sm-12 top">
				<div class="col-sm-6">
					<img src="assets/img/home/mapa01.png" class="img-responsive">				
				</div>
				<div class="col-sm-6">
					<p class="titulo">
						Renta de autos<br> en Monterrey
					</p>
					<p class="info_direccion">
						Ocampo #379 Oriente, Col. Centro
					</p>
					<p class="info_direccion">
						Monterrey, Nuevo León
					</p>
					<p class="info_direccion">
						<a href="tel:+01(81)83408684">(81) 8340-86-84</a>
					</p>
					<p class="info_direccion">
						<a href="tel:+01(81)83408781">(81) 8340-87-81</a>
					</p>
					<p class="info_direccion">
						<a href="tel:+01(81)83400802">(81) 8340-08-02</a>
					</p>
					<p class="info_direccion">
						<a href="mailto:reservaciones@excellplusrentadeautos.com">
							reservaciones@excellplusrentadeautos.com
						</a>
					</p>
				</div>

			</div>
			<div class="col-sm-12 top_dos">
				<div class="col-sm-6">
					<p class="titulo">
						Renta de autos<br> en Guadalajara
					</p>
					<p class="info_direccion">
						Av. 16 de Septiembre #730 - A
					</p>
					<p class="info_direccion">
						Col. Mexicaltzingo,
					</p>
					<p class="info_direccion">
						Guadalajara, Jalisco
					</p>
					<p class="info_direccion">
						<a href="tel:+01(33)31131217">(33) 3113-12-17</a>
					</p>
					<p class="info_direccion">
						<a href="reservaciones@excellplusrentadeautos.com">reservaciones@excellplusrentadeautos.com</a>
					</p>
				</div>
				<div class="col-sm-6">
					<img src="assets/img/home/mapa02.png" class="img-responsive">					
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
<script src="assets/js/validar.js"></script>

</body>
</html>