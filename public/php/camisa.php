<?php
	//OBTENER CONTACTOS DE LA BD
	//CREAR CADENA DE CONEXIÓN
	$conexion = new mysqli('localhost','root','','carrito');
	//CREAR LA PETICIÓN
	$camisas = "SELECT * FROM productos WHERE idCategoria = 2";
	//EJECUTAR PETICIÓN Y GUARDAR RESPUESTA
	//echo($playeras);
	$respuesta = $conexion->query($camisas);
	//HACER ARREGLO Y VOLVERLO JSON
	$arreglo = array();
	while ($camisa = $respuesta->fetch_object()) {
		array_push($arreglo, array(
			"foto"=>$camisa->imagen,
			"nombre"=>utf8_decode($camisa->nombreProducto),
			"precio"=>$camisa->precio,
			"idProducto" => $camisa->idProducto,
			"cantidad" => $camisa->cantidad
		));
	}
	//IMPRIMIR LA RESPUESTA EN JSON
	echo json_encode($arreglo);
?>