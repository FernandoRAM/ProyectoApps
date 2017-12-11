<?php 
	session_start();
	if(isset($_SESSION['nombreUsuario'])){
		$nombreUsuario = $_SESSION['nombreUsuario'];
	}
	$idProducto = $_GET['id'];
	$conn = new mysqli(DB_HOST, DB_USER,DB_PASS,DB_NAME);
	$info = $conn->query("SELECT * FROM productos WHERE idProducto = '{$idProducto}'");
	$producto = $info->fetch_assoc();
	$nombre = $producto['nombreProducto'];
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
<script type="text/javascript" src="<?=JS?>config.js"></script>
<script type="text/javascript" src="../public/js/funciones.js"></script>

	<title>TheMorro - Detalles</title>
</head>
<body>

	<header class="encabezado">
		<div class="container-fluid">
			<div class="logo">
				<img src="../public/img/morro.png" class="fa tamaño">
				<a href="<?=URL?>Carrito/">TheMorro</a>
			</div>
			<div class="redsociales">
				<i class="fa fa-facebook-official" aria-hidden="true"></i>
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
			<div class="login">
				<?php 
					if (isset($nombreUsuario)) {
						"<a href='".URL."Carrito/login'>Cerrar Sesión</a>";
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
		     	 <li class="hover"><a href="<?=URL?>Carrito/playeras">Playeras</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/camisas">Camisas</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/pantalones">Pantalones</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/chamarras">Suéter/Chamarra</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/zapatos">Zapatos</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right home">
        		<li class="hover"><a href="<?=URL?>Carrito/miCarrito"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Mi Carrito</a></li>
        		<li class="hover"><a href="<?=URL?>Carrito/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        		<li class="hover"><a href="<?=URL?>Carrito/miPerfil"><?=$nombreUsuario?></a></li>
    		</ul>
 		</div>
	</nav>


	<div class="container-fluid" style="padding-top: 10px;" class="sinpadding">
		<div class="col-xs-12 col-sm-6 col-md-6">  
              <div class="imagen-producto">
              	<img src="../public/img/<?=$producto['imagen']?>">
              </div>
		</div>
		<div  class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<form class="datos-producto col-xs-12  col-md-12" action="<?=URL?>Carrito/agregar" method="POST">
				<input type="hidden" name="nombreUsuario" value="<?=$nombreUsuario?>">
				<input type="hidden" name="idProducto" value="<?=$idProducto?>">
				<input type="hidden" name="cantidad" value="<?=$producto['cantidad']?>">
				<input type="hidden" name="precio" value="<?=$producto['precio']?>">
              	<input type="text" name="nombreProducto" value="<?=$nombre?>" class="nombrep col-xs-12  col-md-12" disabled>
              <input type="text" name="precioProducto" value="$<?=$producto['precio']?>" class="precio col-xs-12" disabled>
              <textarea type="text" name="descripcionProducto" class="descripcion col-xs-12" disabled><?=utf8_decode($producto['descripcion'])?></textarea>
              <div class="contenedorcan">
              	<p class="nombrec">Cantidad disponible en stock:</p>
              	<p name="quantity" class="nombrec">
              		<?php 
              			if($producto['cantidad'] <= 0){
              				echo "AGOTADO";
              			}else{
              				echo $producto['cantidad'];
              			}
              			
              		?>
              	</p>
              </div>
              <div class="contenedorcan">
              	<p class="nombrec">Tallas disponibles:</p>
              	<select class="cantidad" name="talla">
              		<option value="<?=$producto['talla']?>"><?=strtoupper($producto['talla'])?></option>
              	</select>
              </div>
              <input type="text" name="" value="AGOTADO	" class="nombrep col-xs-12 rojo hidden" disabled>
              <p class="centrado">Envíos a todo el país</p>
              <p class="centrado">Envío gratis durante la exhibición del producto y hasta agotar existencias</p>
              <?php 
              		if ($producto['cantidad'] > 0) {
              			 echo "<button onclick='alert();' class='button col-xs-6 col-sm-5 col-md-5 color0'>Agregar</button>";
              		}else{
              			echo "<button disabled class='button col-xs-6 col-sm-5 col-md-5 color0'>Agregar</button>";
              		}
               ?>
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

<!-- <script type="text/javascript">window.addEventListener('load', verDetalles, true);</script>-->
</body>
</html>