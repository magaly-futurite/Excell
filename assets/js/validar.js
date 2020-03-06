
$( document ).ready(function() {

	$("#valida_contac").on("click", function(e){
		e.preventDefault();

		var error		= false;
		var msj 		= "";
		var nombre 		= $("input[name='nombre']").val();
		var correo 	    = $("input[name='correo']").val();
		var celular  	= $("input[name='celular']").val();
		var telefono 	= $("input[name='telefono']").val();
		var empresa 	= $("input[name='empresa']").val();
		var ciudad 		= $("input[name='ciudad']").val();
		var mensaje 	= $("input[name='mensaje']").val();

		if(!error && nombre .length <= 5)				{error = true;	msj = "El campo nombre es requerido";}
		if(!error && correo == "")				{error = true;	msj = "El campo correo es requerido";}
		if(!error && celular == "")				{error = true;	msj = "El campo celular es requerido";}
		if(!error && telefono  .length <= 9)		{error = true;	msj = "El campo telefono es requerido 10 dígitos";}
		if(!error && empresa == "")				{error = true;	msj = "El campo empresa es requerido";}
		if(!error && ciudad == "")				{error = true;	msj = "El campo ciudad es requerido";}
		if(!error && mensaje == "")				{error = true;	msj = "El campo del mensaje es requerido";}
		
		if(!error){ 
			var data = {};
			data.nombre = nombre; 
			data.correo = correo; 
			data.celular = celular;
			data.telefono = telefono;
			data.empresa = empresa;
			data.ciudad = ciudad;
			data.mensaje = mensaje;
			
			$.ajax({
				url: "_send.php",
				type: "POST",
				data: data,
				error: function(e){
					console.log(e);
					//modal_("Error", "Experimenta");
				},
				success: function(result){
					console.log(result);
					alert ("La forma de contacto de ha enviado con exito.");
					$("input[name='nombre']").val("");
					$("input[name='correo']").val("");
					$("input[name='celular']").val("");
					$("input[name='telefono']").val("");	
					$("input[name='empresa']").val("");	
					$("input[name='ciudad']").val("");	
					$("input[name='mensaje']").val("");	
					window.location.href="gracias.php";
				}
			});
		}else{
			alert(msj);
		}
	});

});