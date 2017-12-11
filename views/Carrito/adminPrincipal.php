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
<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../public/css/font-awesome.css">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
<script type="text/javascript" src="<?=JS?>config.js"></script>
	<title>TheMorro - Principal</title>
</head>
<body>

	<header>
		<div class="container-fluid encabezado">
			<div class="logo">
				<img src="../public/img/morro.png" class="fa tamaño">
				<a href="#">TheMorro</a>
			</div>
			<div class="redsociales">
				<i class="fa fa-facebook-official" aria-hidden="true"></i>
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
			<div class="login">
				<?php 

					if (isset($nombreUsuario)) {
						echo"<a href='".URL."Carrito/login'>Cerrar Sesión</a>";
					}else{
						echo "<a href='".URL."Carrito/login'>Iniciar Sesión</a>";
					}

				 ?>
			</div>
		</div>
	</header>

	<div class="container-fluid banner">
		<section class="col-md-12">
			<div id="carousel-1" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-1" data-slide-to="1"></li>
					<li data-target="#carousel-1" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner banner" role="listbox">
					<div class="item active banner">
						<img src="../public/img/b1.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
							<h1 class="tamañoh1">¡Bienvenido!</h1>
							<p class="tamañop">No podrás parar de comprar</p>
						</div>
					</div>

					<div class="item banner">
						<img src="../public/img/b2.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
							<h1 class="tamañoh1">Las mejores prendas</h1>
							<p class="tamañop">Todo el estilo que necesitas</p>
						</div>
					</div>

					<div class="item banner">
						<img src="../public/img/b3.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
							<h1 class="tamañoh1">Viste a la moda</h1>
							<p class="tamañop">Prendas novedosas</p>
						</div>
					</div>

				</div>
			</div>
		</section>
	</div>

	<nav class="navbar navbar-default border" role="navigation">
  		<div class="navbar-header txto">
  			
  			<li class="hover"><?=$nombreUsuario?><a readonly></a></li>
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      		<span class="icon-bar"></span>
      		<span class="icon-bar"></span>
      		<span class="icon-bar"></span>
    		</button> 
  		</div>

	</nav>

	<div class="container top">
		<section class="main row">
			<div class="col-xs-12">
				<div class="seccion1">
					<div class="img"></div>
					<a href="<?=URL?>Carrito/adminplayeras">PLAYERAS</a>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="seccion2">
					<a href="<?=URL?>Carrito/admincamisas">CAMISAS</a>
					<div class="img"></div>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="seccion3">
					<div class="img"></div>
					<a href="<?=URL?>Carrito/adminpantalones">PANTALONES</a>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="seccion4">
					<div class="img"></div>
					<a href="<?=URL?>Carrito/adminchamarras">SUÉTER/<br>CHAMARRAS</a>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="seccion5">
					<div class="img"></div>
					<a href="<?=URL?>Carrito/adminzapatos">ZAPATOS</a>
				</div>
			</div>
		</section>
	</div>


	<footer>
		<div class="container" style="text-align: center;">
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