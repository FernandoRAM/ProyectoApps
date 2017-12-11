<?php
	//OBTENER CONTACTOS DE LA BD
	//CREAR CADENA DE CONEXIÓN
	$conexion = new mysqli('localhost','root','','carrito');
	//CREAR LA PETICIÓN
	$chamarras = "SELECT * FROM productos WHERE idCategoria = 4";
	//EJECUTAR PETICIÓN Y GUARDAR RESPUESTA
	//echo($playeras);
	$respuesta = $conexion->query($chamarras);
	//HACER ARREGLO Y VOLVERLO JSON
	$arreglo = array();
	while ($chamarra = $respuesta->fetch_object()) {
		array_push($arreglo, array(
			"foto"=>$chamarra->imagen,
			"nombre"=>utf8_decode($chamarra->nombreProducto),
			"precio"=>$chamarra->precio,
			"idProducto" => $chamarra->idProducto,
			"cantidad" => $chamarra->cantidad
		));
	}
	//IMPRIMIR LA RESPUESTA EN JSON
	echo json_encode($arreglo);
?>