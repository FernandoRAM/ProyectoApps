<?php 


	session_start();

	if(isset($_SESSION['nombreUsuario'])){
		$conexion = new mysqli('localhost','root','','carrito');
		$mail = $_SESSION['correo'];

		// echo($mail);

	//OBTENER CONTACTOS DE LA BD
		//CREAR CADENA DE CONEXIÓN
		
		//CREAR LA PETICIÓN
		$direcciones = "SELECT * FROM direcciones WHERE correoUsuario = '$mail'";
		//EJECUTAR PETICIÓN Y GUARDAR RESPUESTA
		// echo($direcciones);
		$respuesta = $conexion->query($direcciones);
		//HACER ARREGLO Y VOLVERLO JSON
		$arreglo = array();
		while ($direccion = $respuesta->fetch_object()) {
			array_push($arreglo, array(
				// "foto"=>$direccion->imagen,
				
				"direccion"=>utf8_decode($direccion->nombreDireccion),
				"correo"=>$direccion->correoUsuario
			));
		}
		//IMPRIMIR LA RESPUESTA EN JSON
		echo json_encode($arreglo);

	}
	

	 ?>