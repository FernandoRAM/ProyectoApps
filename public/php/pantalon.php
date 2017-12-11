<?php
	//OBTENER CONTACTOS DE LA BD
	//CREAR CADENA DE CONEXIÓN
	$conexion = new mysqli('localhost','root','','carrito');
	//CREAR LA PETICIÓN
	$pantalones = "SELECT * FROM productos WHERE idCategoria = 3";
	//EJECUTAR PETICIÓN Y GUARDAR RESPUESTA
	//echo($playeras);
	$respuesta = $conexion->query($pantalones);
	//HACER ARREGLO Y VOLVERLO JSON
	$arreglo = array();
	while ($pantalon = $respuesta->fetch_object()) {
		array_push($arreglo, array(
			"foto"=>$pantalon->imagen,
			"nombre"=>utf8_decode($pantalon->nombreProducto),
			"precio"=>$pantalon->precio,
			"idProducto" => $pantalon->idProducto,
			"cantidad" => $pantalon->cantidad
		));
	}
	//IMPRIMIR LA RESPUESTA EN JSON
	echo json_encode($arreglo);
?>