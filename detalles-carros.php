<?php 
$carro = $_POST['carro'];
$nombreImagen = $_POST['nombreImagen'];
//echo $nombreImagen;exit();
$transmision = $_POST['transmision'];
if ($transmision == "Manual") {
	$precio = $_POST['precio1']; 
}else{
	$precio = $_POST['precio2']; 
}

$personas = $_POST['personas'];
$maletas = $_POST['maletas'];
$puertas = $_POST['puertas'];
$extras = $_POST['extras'];
$oficina = $_POST['oficina']; 
if ($oficina == 0) {
	$valor1= "Monterrey Aeropuerto";
}elseif ($oficina == 1) {
	$valor1= "Oficina Monterrey";
}elseif ($oficina == 2) {
	$valor1= "Domicilio o Hotel Monterrey";
}elseif ($oficina == 3) {
	$valor1= "Guadalajara Aeropuerto";
}elseif ($oficina == 4) {
	$valor1= "Oficina Guadalajara";
}else{
	$valor1= "Domicilio o Hotel Guadalajara";
}
//
$fechEn	= $_POST['fechEn']; 
setlocale(LC_TIME, 'es_ES', 'esp_esp');
$fechaInicio= strftime('%d de %B del %Y', strtotime($fechEn));
//
$horario = $_POST['horario'];  
$horario2 = str_replace("AM", "", $_POST['horario']);  


$devoluc = $_POST['devoluc']; 
if ($devoluc == 0) {
	$valor2= "Monterrey Aeropuerto";
}elseif ($devoluc == 1) {
	$valor2= "Oficina Monterrey";
}elseif ($devoluc == 2) {
	$valor2= "Domicilio o Hotel Monterrey";
}elseif ($devoluc == 3) {
	$valor2= "Guadalajara Aeropuerto";
}elseif ($devoluc == 4) {
	$valor2= "Oficina Guadalajara";
}else{
	$valor2= "Domicilio o Hotel Guadalajara";
} 
$fechDv = $_POST['fechDv'];
setlocale(LC_TIME, 'es_ES', 'esp_esp');
$fechaFinal= strftime('%d de %B del %Y', strtotime($fechDv));
//  %A %d de %B del %Y
$horaDev = $_POST['horaDev']; 
$horaDev2 = str_replace("AM", "", $_POST['horaDev']);   
$promocionCod = $_POST['codigo']; 
$subTotalVehiculo = $precio;
//
$fecha1 = date("Y-m-d", strtotime($fechEn) );
$fecha2 = date("Y-m-d", strtotime($fechDv) );

//echo date_format($date, 'g:ia \o\n l jS F Y');
$resultadoFechH = $fecha1 ." ". $horario2;
$resultadoFechDos = $fecha2 ." ". $horaDev2;

$fechaUno = new DateTime($resultadoFechH);//fecha inicial
$fechaDos = new DateTime($resultadoFechDos);//fecha de cierre
$intervalo = $fechaUno->diff($fechaDos);
$diasTime = $intervalo->format('%d');
$horaTime = $intervalo->format('%H');
if ($horaTime >= 02) {
	$finalDias = $diasTime + 1;
	$enviarJs = $finalDias;
}else{
	$finalDias = $diasTime;
	$enviarJs = $finalDias;
}
echo $promocionCod;
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
    <form action="gracias.php" method="post" name="formulario">
    <div class="paso_dos">
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
	    							<img src="assets/img/tipos/<? echo $nombreImagen; ?>" class="carro">
	    						</div>
	    						<div class="col-sm-9 pd0 texto">
	    							<div class="col-sm-6 pd0">
	    								<p>
	    									<span>Modelo: </span>
	    									<span><b><? echo $carro; ?></b></span>
				                			<input type="hidden" name="modeloAuto" value="<? echo $carro; ?>">
	    								</p>
	    								<img src="assets/img/tipos/persona-01.svg" class="icon_n"><span class="person"> <b><? echo $personas; ?> Personas</span><br>
				                		<input type="hidden" name="numPersona" value="<? echo $personas; ?> ">
	    								<p class="top_new_img">
	    									<img src="assets/img/tipos/puertas-01.svg" class="icon_n"><span class="person"><b><? echo $puertas; ?> Puertas</span>
				                			<input type="hidden" name="numPuertas" value="<? echo $puertas;?>">
	    								</p>
	    							</div>
	    							<div class="col-sm-6 pd0">
	    								<p>
	    									<span>Transmisión: </span>
	    									<span> <b><? echo $transmision; ?></b></span>
				                			<input type="hidden" name="transmisionT" value="<? echo $transmision;?>">
	    								</p>
	    								<img src="assets/img/tipos/maletas-01.svg" class="icon_n"><span class="person"> <? echo $maletas; ?> Maletas</span>
				                			<input type="hidden" name="maletasM" value="<? echo $maletas;?>">
	    							</div>
	    							<div class="col-sm-12 pd0">
					    				<p class="titulo02">
					    					<? echo $extras; ?>
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
		    					<p class="parraf"><? echo $valor1; ?></p>
		    					<p class="parraf"><? echo $fechaInicio; ?></p>
		    					<p class="parraf"><? echo $horario; ?></p>

				                <input type="hidden" name="valorV" value="<? echo $valor1;?>">
				                <input type="hidden" name="fechaInicio" value="<? echo $fechaInicio; ?>">
				                <input type="hidden" name="horarioInicio" value="<? echo $horario; ?>">
	    					</div>
	    					<div class="col-sm-6 linea02">    						
	    						<p class="reser_titulo">Oficina de devolución</p>
		    					<p class="parraf"><? echo $valor2; ?></p>
		    					<p class="parraf"><? echo $fechaFinal; ?></p>
		    					<p class="parraf"><? echo $horaDev; ?></p>

				                <input type="hidden" name="devoValor2" value="<? echo $valor2;?>">
				                <input type="hidden" name="fechaDev" value="<? echo $fechaFinal; ?>">
				                <input type="hidden" name="horaDevD" value="<? echo $horaDev; ?>">
				                <input type="hidden" name="promocionCod" value="<? echo $promocionCod; ?>">
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
				<div class="paso_tres">
					<div class="col-sm-8 pd0">
						<div class="col-sm-12 pd0 fondo01">
							<div class="col-sm-10 col-sm-offset-1 parrafo">
								<p class="titulo">Selecciona tu seguro</p>
								<div class="col-sm-12 pd0">
									<div class="col-sm-6 pd0">
								  		<input type="radio" name="opcionA" id="FO2A" value="0" onClick="foco2A();check1(this.value)" required>Selecciona cobertura básica TPL incluído en todas nuestras tarifas
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
								  			<input type="radio" name="opcionA" id="FO2A" value="100" onClick="foco2A();check1(this.value)" required> Selecciona amplia CDW $100 + IVA por día
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
													Beneficio de pagar un<br>deducible en caso de <br>accidente o robo: 10% en<br>
													accidente, 20% en robo total
												</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-12 pd0">
										<div class="col-sm-6 pd0">
								  			<input type="radio" name="opcionA" id="FO2A" value="400" onClick="foco2A();check1(this.value)" required> Selecciona cobertura full FULL COVER $400 + IVA en camionetas (+ precio de seguro CDW)
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
										<input type="checkbox" name="gps" value="0"> GPS(Gratis) 
									</p>
								</div>
								<div class="col-sm-4 thumbnail">
									<img src="assets/img/tipos/asiento.svg" class="icon_form">
									<p class="nombre">
										<input type="checkbox" name="asiento" value="0"> Asiento para bebé (Gratis) 
									</p>
								</div>
								<div class="col-sm-4 thumbnail">
									<img src="assets/img/tipos/chofer.svg" class="icon_form">
									<p class="nombre">
										<input type="checkbox" name="chofer" value="600" onclick="check1($('input[name=opcionA]:checked').val())">
										Chofer ($600 al día) 
									</p>
								</div>
							</div>
					</div>
				</div>
				<div class="paso_cuatro" style="display: none;">
					<div class="col-sm-8 pd0 fondo01">
						<div class="col-sm-10 col-sm-offset-1 fondo01">
							<div class="col-sm-12 titulo">
								<p>Por favor llena los siguientes campos</p>
							</div>
							<div class="col-sm-12 textto_input">
								<div class="col-sm-6">
									<p>Nombre*</p>
									<input type="text" name="nombreC" class="form-control" required>
								</div>
								<div class="col-sm-6">
									<p>Correo electrónico*</p>
									<input type="text" name="correoC" class="form-control" required>
								</div>
							</div>
							<div class="col-sm-12 textto_input">
								<div class="col-sm-6">
									<p>Celular*</p>
									<input type="text" name="celularC" class="form-control" required>
								</div>
								<div class="col-sm-6">
									<p>Teléfono casa*</p>
									<input type="text" name="telefonoC" class="form-control" required>
								</div>
							</div>
							<div class="col-sm-12 textto_input">
								<div class="col-sm-6">
									<p>Tarjeta de crédito*</p>
									<select  name="tarjetaC" class="form-control" required>
										<option value="Master Card">Master Card</option>
										<option value="Visa">Visa</option>
										<option value="American Express">American Express</option>
									</select>
									<!--<input type="text" name="tarjetaC" class="form-control">-->
								</div>
							</div>
							<div class="col-sm-12 titulo">
								<p>Información de dirección</p>
							</div>
							<div class="col-sm-12 textto_input">
								<div class="col-sm-6">
									<p>Dirección*</p>
									<input type="text" name="direccionC" class="form-control" required>
								</div>
								<div class="col-sm-6">
									<p>Código postal*</p>
									<input type="text" name="codigoC" class="form-control" required>
								</div>
								</div>
							<div class="col-sm-12 textto_input">
								<div class="col-sm-6">
									<p>Ciudad*</p>
									<input type="text" name="ciudadC" class="form-control" required>
								</div>
								<div class="col-sm-6">
									<p>Estado*</p>
									<input type="text" name="estadoC" class="form-control" required>
								</div>
							</div>
							<div class="col-sm-12 textto_input">
								<div class="col-sm-6">
									<p>País*</p>
									<input type="text" name="paisC" class="form-control" required>
								</div>
							</div>
							<div class="mtyAeropuerto" style="display: none;">
								<div class="col-sm-12 titulo">
									<p>Información de vuelo</p>
								</div>
								<div class="col-sm-12 textto_input">
									<div class="col-sm-6">
										<p>Terminal*</p>
										<!--<input type="text" name="" class="form-control">-->
										<select class="form-control" name="terminal">
											<option value="Nacional">Nacional</option>
											<option value="Internacional">Internacional</option>
										</select>
									</div>
									<div class="col-sm-6">
										<p>Número de vuelo*</p>
										<input type="text" name="numVuelo" class="form-control">
									</div>
								</div>
								<div class="col-sm-12 textto_input">
									<div class="col-sm-6">
										<p>Procedente*</p>
										<input type="text" name="procedente" class="form-control">
									</div>
									<div class="col-sm-6">
										<p>Aerolínea*</p>
										<input type="text" name="aerolinea" class="form-control">
									</div>
								</div>
								<div class="col-sm-12 textto_input">
									<div class="col-sm-6">
										<p>Hora de salida*</p>
										<input type="text" name="horaSalida" class="form-control">
									</div>
									<div class="col-sm-6">
										<p>Hora de llegada*</p>
										<input type="text" name="horaLlegado" class="form-control">
									</div>
								</div>
							</div>
							<div class="mtyOficina"  style="display: none;">
								
							</div>
							<div class="domicilioHotel"  style="display: none;">
								<div class="col-sm-12 titulo">
									<p>INFORMACIÓN PARA ENTREGA</p>
								</div>
								<div class="col-sm-12 textto_input">
									<div class="col-sm-4">
										<p>Dirección*</p>
										<input type="text" name="direccion_domicilioHotel" class="form-control">
									</div>
									<div class="col-sm-4">
										<p>Cruces*</p>
										<input type="text" name="cruces_domicilioHotel" class="form-control">
									</div>
									<div class="col-sm-4">
										<p>Referencia*</p>
										<input type="text" name="ref_domicilioHotel" class="form-control">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 fondo02">
					<p class="segundo_titulo">Total</p>
					<p class="uno">Subtotal del Vehículo</p>
	  				<input type="text" name="subVehiculo" class="form-control" value="$ <? echo $subTotalVehiculo; ?>" readonly="readonly">
					<p class="uno">Subtotal del Seguro</p>
	  				<input type="text" value="100" name="opcion1A"  class="form-control" value="$ "  id="opcion1A" readonly="readonly">
					<p class="uno">IVA</p>
	  				<input type="text" name="iva" id="iva" class="form-control" value="$ " readonly="readonly">
					<p class="uno">Total por día</p>
	  				<input type="text" name="totDia" id="totDia" class="form-control" value="$ " readonly="readonly">
					<p class="uno">Total por <? echo $enviarJs; ?> día(s)</p>
	  				<input type="text" id="total" name="total" class="form-control" readonly="readonly">
	  				<input type="hidden" name="total_de_dias" value="<? echo $enviarJs; ?>">
	  				<div class="unBoton">
	  				  	<input type="submit" class="button cont Show" value="Continuar">
	  					<!--<div type="submit" class="button cont Show">Continuar</div>-->
	  				</div>
	  				<div class="dosBoton" style="display: none;">
	  					<button type="submit" class="button cont" >Finalizar</button>
	  				</div>
				</div>
			</div>
		</div>
    </div>
    <!---->
	<input type="hidden" name="valorA" id="FV2A" value="2.00" onFocus="check1(this.value)" disabled />
	<input type="hidden" name="valorA" id="extras" value="2.00" onFocus="check2(this.value)" disabled />
	</form>
    <!-- Page footer section -->
    <?php include_once('src/partial/footer.php'); ?>

</div>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="assets/lib/bootstrap.min.js"></script>
<!-- Bootbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		foco2A();
		check1(0);
    });


	function foco2A(){
		var chek = document.getElementById("FO2A")
    	if (chek.checked == true) {
        	document.getElementById("FV2A").checked = true;
    	}else{
        	document.getElementById("FV2A").checked = false;
    	}
	}


	function check1(opcion) { 
	    document.getElementById("opcion1A").value= "$ " + opcion;
		var img = <?php echo $subTotalVehiculo;?>;
		var suma = parseFloat(opcion) + parseFloat(img);		    	
		var tasa = 16;
		var subIva = (suma * tasa)/100;		    
		var num = subIva;
		var iva = num.toFixed(2);
	    document.getElementById("iva").value= "$ " + iva;
		var totxDia = parseFloat(suma) + parseFloat(iva)
		totDia = Math.round(totxDia);
	 	document.getElementById("totDia").value= "$ " + totDia;
		var fechaTot = <?php echo $enviarJs;?>;
		var subTotal = totDia * fechaTot;
		//Valor de datos extras.
		var chofer = $('input[name="chofer"]').is(':checked');
		if (chofer == true) {
			var total = parseFloat(subTotal) + (600 * fechaTot); 
		}else{
			var total = subTotal;
		}
	    document.getElementById("total").value= "$ " + total;	
	}

	$('.Show').click(function() {
		$(document).ready(function myFunction(){
    		var x = document.getElementById("myRadio").required;
    		document.getElementById("demo").innerHTML = x;
		});
	    $('.paso_tres').hide();
	    $('.paso_cuatro').show();
	    $('.unBoton').hide();
	    $('.dosBoton').show();
		    var ciudad = <?php echo $oficina;?>;
			if (ciudad === 0) {
		    	$('.mtyAeropuerto').show();
			}else if (ciudad === 1) {
		    	$('.mtyciudad').show();
			}else if (ciudad === 2) {
		    	$('.domicilioHotel').show();
			}else if (ciudad === 3) {
		    	$('.mtyAeropuerto').show();
			}else if (ciudad === 4) {
		    	$('.mtyciudad').show();
			}else{
		    	$('.domicilioHotel').show();
			}
	});



</script>
</body>
</html>