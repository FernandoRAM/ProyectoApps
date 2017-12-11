<?php 

	session_start();
	if(isset($_SESSION['nombreUsuario'])){
		$nombreUsuario = $_SESSION['nombreUsuario'];
	}
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
	<title>TheMorro - Agregar producto</title>
</head>
<body>

	<header class="encabezado">
		<div class="container-fluid">
			<div class="logo">
				<img src="../public/img/morro.png" class="fa tamaño">
				<a href="<?=URL?>Carrito/adminprincipal">TheMorro</a>
			</div>
			<div class="redsociales">
				<i class="fa fa-facebook-official" aria-hidden="true"></i>
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
			<div class="login">
				<?php 

					if (isset($nombreUsuario)) {
						echo "<a href='".URL."Carrito/login'>Cerrar Sesión</a>";
					}else{
						echo "<a href='".URL."Carrito/login'>Iniciar Sesión</a>";
					}

				 ?>
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


	<div class="container-fluid p" style="margin-top: 10px; padding-top: 40px; padding-bottom: 40px; border-radius: 5px;">
		<div class="col-md-3"></div>
			<form role="form" enctype="multipart/form-data" class="formulario col-md-6" method="POST" action="<?=URL?>Carrito/addProductoDB"><br>
			<label for="ejemplo_email_1" class="center titulo">Rellene la información del producto nuevo</label>
			  <div class="form-group center">
			  	<label for="categoria" class="subtitulos">Categoría</label>
    			<select class="opcion form-control" name="categoria" id="categoria">
				  		<option style="display: none;" value="0">Selecciona la categoría</option>
				  		<option value="1">Playeras</option>
				  		<option value="2">Camisas</option>
				  		<option value="3">Pantalones</option>
				  		<option value="4">Suéter/Chamarra</option>
				  		<option value="5">Zapatos</option>
				</select>
			  </div>
              <div class="form-group">
              	<label for="nombreProducto" class="subtitulos">Nombre del producto</label>
              	<input type="text" name="nombreProducto" id="nombreProducto" value="" class="form-control" placeholder="Nombre del producto">
              </div>
              <div class="form-group">
              	<label for="ejemplo_password_1" class="subtitulos">Precio del producto</label>
              	<input type="text" name="precio" value="" class="form-control" placeholder="Precio del producto" id="ejemplo_password_1">
              </div>
              <div class="form-group">
              	<label for="ejemplo_password_2" class="subtitulos">Descripción del producto</label>
              	<textarea type="text" name="descripcion" value=""  class="form-control resize" id="ejemplo_password_2" placeholder="Escriba una descripción del producto"></textarea>
              </div>
              <div class="form-group">
              	<label for="img" class="subtitulos">
			   	Imagen del producto<input type="file" name="Imagen" id="img">
			   </div>
			 <div class="contenedorcan col-xs-12">
				<p class="nombres">Tallas:</p>
				<select class="cantidad" name="talla">
					<option value="c">Chica</option>
					<option value="m">Mediana</option>
					<option value="g">Grande</option>
				</select>
  			</div>
              <div class="contenedorcan  col-xs-12">
              	<p class="nombrec">Cantidad de artículos disponibles:</p>
              	<input type="number" class="cantidad" value="1" name="cantidad" min="0" max="20">
              </div>
              <input type="submit" id="enviar" class="button col-md-4 color0" name="Agregar" value="Subir producto">
             </form>
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