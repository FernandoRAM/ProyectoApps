<?php 
	//OBTENER CONTACTOS DE LA BD
	//CREAR CADENA DE CONEXIÓN
	$conexion = new mysqli('localhost','root','','carrito');
	//CREAR LA PETICIÓN
	$idProducto = $_GET['id'];
	$id = "SELECT * FROM productos WHERE idProducto = {$idProducto}";
	//EJECUTAR PETICIÓN Y GUARDAR RESPUESTA
	// echo($id);
	$respuesta = $conexion->query($id);
	$res = $respuesta->fetch_object();

	//HACER ARREGLO Y VOLVERLO JSON
	$arreglo = array(
			"foto"=>$res->imagen,
			"nombre"=>utf8_decode($res->nombreProducto),
			"precio"=>$res->precio,
			"idProducto" => $res->idProducto,
			"cantidad" => $res->cantidad,
			"descripcion" => $res->descripcion
		);
	
	
	//IMPRIMIR LA RESPUESTA EN JSON
	echo json_encode($arreglo);	 
	
 ?>
 