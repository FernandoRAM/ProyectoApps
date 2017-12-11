<?php
	//OBTENER CONTACTOS DE LA BD
	//CREAR CADENA DE CONEXIÓN
	$conexion = new mysqli('localhost','root','','carrito');
	//CREAR LA PETICIÓN

	$playeras = "SELECT * FROM productos WHERE idCategoria = 1";
	//EJECUTAR PETICIÓN Y GUARDAR RESPUESTA
	//echo($playeras);
	$respuesta = $conexion->query($playeras);
	//HACER ARREGLO Y VOLVERLO JSON
	$arreglo = array();
	while ($playera = $respuesta->fetch_object()) {
		array_push($arreglo, array(
			"foto"=>$playera->imagen,
			"nombre"=>utf8_decode($playera->nombreProducto),
			"precio"=>$playera->precio,
			"idProducto" => $playera->idProducto,
			"cantidad" => $playera->cantidad
		));
	}
	//IMPRIMIR LA RESPUESTA EN JSON
	echo json_encode($arreglo);
?>