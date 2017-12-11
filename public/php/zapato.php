<?php
	//OBTENER CONTACTOS DE LA BD
	//CREAR CADENA DE CONEXIÓN
	$conexion = new mysqli('localhost','root','','carrito');
	//CREAR LA PETICIÓN
	$zapatos = "SELECT * FROM productos WHERE idCategoria = 5";
	//EJECUTAR PETICIÓN Y GUARDAR RESPUESTA
	//echo($playeras);
	$respuesta = $conexion->query($zapatos);
	//HACER ARREGLO Y VOLVERLO JSON
	$arreglo = array();
	while ($zapato = $respuesta->fetch_object()) {
		array_push($arreglo, array(
			"foto"=>$zapato->imagen,
			"nombre"=>utf8_decode($zapato->nombreProducto),
			"precio"=>$zapato->precio,
			"idProducto" => $zapato->idProducto,
			"cantidad" => $zapato->cantidad
		));
	}
	//IMPRIMIR LA RESPUESTA EN JSON
	echo json_encode($arreglo);
?>