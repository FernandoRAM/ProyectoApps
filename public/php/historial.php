<?php 


	session_start();

	if(isset($_SESSION['nombreUsuario'])){
		$conexion = new mysqli('localhost','root','','carrito');
		$mail = $_SESSION['correo'];

		// echo($mail);

	//OBTENER CONTACTOS DE LA BD
		//CREAR CADENA DE CONEXIÓN
		
		//CREAR LA PETICIÓN
		$historia = "SELECT * FROM historial WHERE correoUsuario = '$mail'";
		//EJECUTAR PETICIÓN Y GUARDAR RESPUESTA
		// echo($historia);
		$respuesta = $conexion->query($historia);
		//HACER ARREGLO Y VOLVERLO JSON
		$arreglo = array();
		while ($info = $respuesta->fetch_object()) {
			array_push($arreglo, array(
				// "foto"=>$info->imagen,
				
				"cantidad"=>$info->cantidad,
				"fecha"=>$info->fechaCompra,
				"nombre"=>utf8_decode($info->nombreProducto),
				"importe"=>$info->importe,
				"Correo"=>$info->correoUsuario
			));
		}
		//IMPRIMIR LA RESPUESTA EN JSON
		echo json_encode($arreglo);

	}
	

	 ?>