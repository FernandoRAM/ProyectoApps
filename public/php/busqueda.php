<?php
	//OBTENER REGEX DE BUSQUEDA
	$REGEX = $_POST['reg'];
	$CAT = $_POST['cat'];
	//OBTENER CONTACTOS DE LA BD
	//CREAR CADENA DE CONEXIÓN
	$conexion = new mysqli('localhost','root','','carrito');
	//CREAR LA PETICIÓN
	if($CAT == '0'){
		$busqueda = "SELECT * FROM productos WHERE nombreProducto REGEXP '$REGEX';";
	}
	else{
		$busqueda = "SELECT * FROM productos WHERE nombreProducto REGEXP '$REGEX' AND idCategoria = $CAT;";
	}
	//EJECUTAR PETICIÓN Y GUARDAR RESPUESTA
	//echo($playeras);
	$respuesta = $conexion->query($busqueda);
	//HACER ARREGLO Y VOLVERLO JSON
	$arreglo = array();
	while ($producto = $respuesta->fetch_object()) {
		array_push($arreglo, array(
			"foto"=>$producto->imagen,
			"nombre"=>utf8_decode($producto->nombreProducto),
			"precio"=>$producto->precio,
			"idProducto" => $producto->idProducto,
			"cantidad" => $producto->cantidad
		));
	}
	//IMPRIMIR LA RESPUESTA EN JSON
	echo json_encode($arreglo);
?>