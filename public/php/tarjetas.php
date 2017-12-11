<?php 


	session_start();

	if(isset($_SESSION['nombreUsuario'])){
		$conexion = new mysqli('localhost','root','','carrito');
		$mail = $_SESSION['correo'];

		// echo($mail);

	//OBTENER CONTACTOS DE LA BD
		//CREAR CADENA DE CONEXIÓN
		
		//CREAR LA PETICIÓN
		$info = "SELECT * FROM tarjeta WHERE correoUsuario = '{$mail}'";
		//EJECUTAR PETICIÓN Y GUARDAR RESPUESTA
		// echo($info);
		$respuesta = $conexion->query($info);
		//HACER ARREGLO Y VOLVERLO JSON
		$arreglo = array();
		while ($tarjeta = $respuesta->fetch_object()) {
			array_push($arreglo, array(
				// "foto"=>$info->imagen,
				"id"=>$tarjeta->idTarjeta,
				"numero"=>$tarjeta->numeroTarjeta,
				"fecha"=>$tarjeta->fechaVencimiento
				
			));
		}
		//IMPRIMIR LA RESPUESTA EN JSON
		 echo json_encode($arreglo);

	}
	

	 ?>