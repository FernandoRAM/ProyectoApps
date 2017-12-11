<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Alumno</title>
</head>
<body>
	<form method = "POST" action = "<?=URL?>Index/datos"><br><br>
		<input type="number" name="expediente" placeholder="Expediente"><br><br>
		<input type="text" name="nombre" placeholder="Nombre"><br><br>
		<input type="number" name="semestre" placeholder="Semestre"><br><br>
		<input type="text" name="carrera" placeholder="Carrera"><br><br>
		<input type="submit" name="guardar">
	</form>
</body>
</html>