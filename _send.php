<?php
$headers = "From:Excell Renta Car <contacto@futurite.com> \r\n".
			"Reply-To: " . $_POST['correo'] . "\r\n".
			"MIME-Version: 1.0\r\n";
			'X-Mailer: PHP/' . phpversion();

$email_to = "magaly.lopez@metodika.mx, java_ala@hotmail.com, javaala@gmail.com";
$asunto ="Excell Renta Car";
$mensaje = "\r\n\r\n";
$mensaje = "Se lleno la forma de contacto con la siguiente información \r\n\r\n\r\n";
$mensaje .= "Nombre: " . $_POST['nombre'].="\r\n";
$mensaje .= "Correo electronico" . $_POST['correo'].="\r\n";
$mensaje .= "Celular: " . $_POST['celular'].="\r\n";
$mensaje .= "Telefono de Casa: " . $_POST['telefono'].="\r\n";
$mensaje .= "Empresa: " . $_POST['empresa'].="\r\n";
$mensaje .= "Ciudad: " . $_POST['ciudad'].="\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'].="\r\n";

if(@mail($email_to, $asunto, $mensaje, $headers))
{
    echo'<script>
			alert("Tu Mensaje se ha enviado");
			window.location.href="gracias.php";
		</script>';
			}
	else{
    echo'<script>
			alert("Tu Mensaje no ha enviado Intentelo nuevamente");
			window.location.href="index.php";
		</script>';
	}


?>
