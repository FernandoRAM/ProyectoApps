<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Buscar Alumno</title>
	<script type="text/javascript" src="<?=JS?>config.js"></script>
	<script type="text/javascript">
		function buscar() {
			var campo = document.getElementById('campo').value;
			var valor = document.getElementById('valor').value;


			if (campo != '' && valor != '') {

				var url = config['url']+"Index/search";
				var datos = "campo="+campo+"&valor="+valor;

				logIn= new XMLHttpRequest();
				logIn.open("POST", url, true);
				logIn.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				logIn.send(datos);
				logIn.onreadystatechange = function(){
					if (logIn.readyState == 4) {
						document.getElementById('busqueda').innerHTML = logIn.responseText;
					}
				}

			} else{
				alert("Completa los campos");
			}
		}
	</script>
</head>
<body>
	<form onsubmit="return false">
		Opción: <select id="campo">
			<option>Expediente</option>
			<option>Nombre</option>
			<option>SemestreActual</option>
			<option>Carrera</option>
		</select> 
		<input type="text" id="valor">
		<input type="submit" name="Enviar" onclick="buscar()">
	</form>
	<div id="busqueda">
		
	</div>
</body>
</html>