<?php 
	session_start();
	if(isset($_SESSION['nombreUsuario'])){
		$nombreUsuario = $_SESSION['nombreUsuario'];
	}
	$idProducto = $_GET['id'];
	$conn = new mysqli(DB_HOST, DB_USER,DB_PASS,DB_NAME);
	$info = $conn->query("SELECT * FROM productos WHERE idProducto = '{$idProducto}'");
	$producto = $info->fetch_assoc();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="../public/css/estilos.css">
<!-- <link rel="stylesheet" type="text/css" href="css/estilos2.css"> -->
<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../public/css/font-awesome.css">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
<script type="text/javascript" src="../public/js/funciones2.js"></script>
	<title>TheMorro - Detalles</title>
</head>
<body>

	<header class="encabezado">
		<div class="container-fluid">
			<div class="logo">
				<img src="img/morro.jpg" class="fa tamaño">
				<a href="<?=URL?>Carrito/adminprincipal">MenShop</a>
			</div>
			<div class="redsociales">
				<i class="fa fa-facebook-official" aria-hidden="true"></i>
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
			<div class="login">
				<a href="<?=URL?>Carrito/login">Iniciar Sesión</a>
			</div>
		</div>
	</header>

	<div class="container-fluid">
		<div class="col-xs-12 imgcate0 img-responsive" id="top"></div>
	</div>

	<nav class="navbar navbar-default border" role="navigation">
  		<div class="navbar-header txto">
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      		<span class="icon-bar"></span>
      		<span class="icon-bar"></span>
      		<span class="icon-bar"></span>
    		</button> 
    		 <a class="navbar-brand" href="" style="cursor:default;">Menú</a> 
  		</div>

  		<div class="navbar-collapse collapse container">
	   		<ul class="nav navbar-nav navbar-left right">
		     	 <li class="hover"><a href="<?=URL?>Carrito/adminplayeras">Playeras</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/admincamisas">Camisas</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/adminpantalones">Pantalones</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/adminchamarras">Suéter/Chamarra</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/adminzapatos">Zapatos</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right home">
        		<li class="hover"><a href="<?=URL?>Carrito/adminprincipal"><i class="fa fa-home" aria-hidden="true"></i> </i> Home</a></li>
        		<li class="lectura"><a readonly><?=strtoupper($nombreUsuario)?></a></li>
    		</ul>
 		</div>
	</nav>


	<div class="container-fluid" style="padding-top: 10px;"	>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="imagen-producto">
				<img src="../public/img/<?=$producto['imagen']?>">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="border-left: 1px solid rgba(0,0,0,.02);">
			<i class="fa fa-pencil-square-o margin" aria-hidden="true" title="Editar campos"> 	<span class="nombres">Edita la información del producto</span></i>
			<form class="datos-producto col-xs-12  col-md-6" action="<?=URL?>Carrito/actualizarProducto" method="post">
				<input type="hidden" name="idProducto" value="<?=$idProducto?>">
              <input type="text" name="nombre" value="<?=$producto['nombreProducto']?>" class="nombrep col-xs-12  col-md-12" maxlength="30">
              <input type="text" name="precio" value="<?=$producto['precio']?>" class="precio col-xs-12" maxlength="20">
              <textarea type="text" name="descripcion" value=""  class="descripcion col-xs-12" maxlength="100"><?=utf8_decode($producto['descripcion'])?></textarea>
              <div class="contenedorcan col-xs-12">
              	<p class="nombres">Cantidad:</p>
              	<input type="number" class="cantidad" value="<?=$producto['cantidad']?>" name="quantity" min="1" max="20">
              </div>
            <div class="contenedorcan col-xs-12">
				<p class="nombres">Tallas:</p>
				<select class="cantidad" name="talla">
					<option value="c">Chica</option>
					<option value="m">Mediana</option>
					<option value="g">Grande</option>
				</select>
  			</div>
  			<div class="contenedorcan col-xs-12 hidden">
  				<p class="nombres">Talla:</p>
  				<select class="cantidad">
               		<option></option>
               	</select>
  			</div>
              <input type="text" name="" value="AGOTADO	" class="nombrep col-xs-12 rojo hidden" disabled>
              <p class="vacio"></p>
              <button name="" class="button1 col-xs-6 col-sm-4 col-md-4 color0" value="">Actualizar</button>
             </form>
		</div>
	</div>

	<footer>
		<div class="container" style="text-align: center; bottom: 0px;">
			<div class="col-xs-12 col-sm-4 col-md-4 centrado">
				<p>Facultad de Informática</p>
				<p>Centro de Desarrollo, Betas</p>
			</div>

			<div class="col-xs-12 col-sm-4 col-md-4 centrado">
				<p>Contácto, reclamaciones, sugerencias</p>
				<p>email@correo.com</p>
			</div>

			<div class="col-xs-12 col-sm-4 col-md-4 nombre">
				<i class="fa fa-registered" aria-hidden="true"> </i>
				<p>MenShop</p>
			</div>
		</div>
	</footer>


<script type="text/javascript" src="../public/js/jquery.js"></script>
<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
</body>
</html>