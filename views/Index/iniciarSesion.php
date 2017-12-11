<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesión</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="<?=JS?>config.js"></script>
	<script type="text/javascript">
		function iniciarSesion() {
			var expediente = document.getElementById('expediente').value;
			var password = document.getElementById('password').value;

			//alert(expediente + "" + password);

			if (expediente != '' && password != '') {

				var url = config['url']+"Index/autenticar/";
				var datos = "expediente="+expediente+"&password="+password;

				alert(url + " " + datos);

				logIn= new XMLHttpRequest();
				logIn.open("POST", url, true);
				logIn.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				logIn.send(datos);
				logIn.onreadystatechange = function(){
					if (logIn.readyState == 4) {
						true;
					}
				}

			} else{
				alert("Completa los campos");
			}
		}
	</script>
</head>
<body>
	<form action = "<?=URL?>Index/autenticar" method = "POST" onsubmit="return false">
		<input type="text" name="Expediente" placeholder="Expediente" id="expediente">
		<input type="text" name="password" placeholder="Contraseña" id="password">
		<input type="submit" name="Enviar" onclick="iniciarSesion();">
	</form>
</body>
</html>