
<?php  

/* Enviar E-mail con Respuesta Automática 

*/ 

// Recibiendo los datos pasados por la pagina "form_contato.php" 

$recibenombre = $_POST["nombre"]; 

$recibemail = $_POST["email"]; 

$recibemsg  = $_POST["mensaje"]; 

// Definiendo las cabeceras del e-mail 

$headers = "Content-type:text/html; charset=iso-8859-1"; 

// Vamos a definir ahora el destinatario de e-mail, ya sea el de usted o el de su cliente. 


$para = "magaly.lopez@metodika.mx"; 

// Definiendo el aspecto del mensaje 

$mensaje   = "<h3>De:</h3> "; 

$mensaje  .= $recibenombre . $recibemail; 

$mensaje  .= "<h3>Asunto:</h3>"; 

$mensaje  .= "Mensaje del Sitio"; 

$mensaje  .= "<h3>Mensaje</h3>"; 

$mensaje  .= "<p>"; 

$mensaje  .= $recibemsg; 

$mensaje  .= "</p>"; 


// Enviando el mensaje para el destinatario 

$envia =  mail($para,"E-mail del Sitio",$mensaje,$headers); 

// Envia un e-mail para el remitente, agradeciendo la visita en el sitio, y diciendo que en breve el e-mail sera respondido. 

$mensaje2  = "<p>Hola <strong>" . $recibenombre . "</strong>. Agradecemos su visita y la oportunidad de recibir su contacto. Antes de 48 horas usted recibira un e-mail con la respuesta a su duda o pedido..</p>"; 

$mensaje2 .= "<p>Observación - No es necesario responder este mensaje.</p>"; 

$envia =  mail($recibemail,"Su mensaje fué recibido!",$mensaje2,$headers); 

// Muestra en la pantalla el mensaje de éxito, y después redirecciona de vuelta para la pagina del contacto.

echo "Mensaje recibido con exito!"; 

echo "<meta http-equiv='refresh' content='2;URL=form_contacto.php'>"; 

?> 