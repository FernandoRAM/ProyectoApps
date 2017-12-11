<?php 

	class Carrito extends Controller
	{
		/***********ACCEDER A LAS PANTALLAS USUARIO 2 (normal)***********/

		/*****Pantalla camisas*****/
		public function camisas()
		{
			$this->view->render($this, "camisas");
		}
		/*****Pantalla chamarras*****/
		public function chamarras()
		{
			$this->view->render($this, "chamarras");
		}
		/*****Pantalla pantalones*****/
		public function pantalones()
		{
			$this->view->render($this, "pantalones");
		}
		/*****Pantalla playeras*****/
		public function playeras()
		{
			$this->view->render($this, "playeras");
		}
		/*****Pantalla principal (con o sin usuario)*****/
		public function index()
		{
			$this->view->render($this, "principal");
		}
		/*****Pantalla zapatos*****/
		public function zapatos()
		{
			$this->view->render($this, "zapatos");
		}
		/*****Pantalla busqedas*****/
	 	public function busquedas(){
			$this->view->render($this, "busquedas");
		}
		/*****Pantalla login/registro*****/
		public function login()
		{
			session_destroy();
			$this->view->render($this, "login");
		}
		/*****Pantalla mi carrito/perfil*****/
		public function miCarrito()
		{
			$this->view->render($this, "micart");
		}
		public function pago(){
			$this->view->render($this, "pago");
		}
		public function editar(){
			$this->view->render($this, "edinfo_producto");
		}
		public function infoProducto()
		{
			$this->view->render($this, "info_producto");
		}

		/***********ACCEDER A LAS PANTALLAS USUARIO 1 (admin)***********/

		/*****Pantalla camisas*****/
		public function admincamisas()
		{
			$this->view->render($this, "admincamisas");
		}
		/*****Pantalla chamarras*****/
		public function adminchamarras()
		{
			$this->view->render($this, "adminchamarras");
		}
		/*****Pantalla pantalones*****/
		public function adminpantalones()
		{
			$this->view->render($this, "adminpantalones");
		}
		/*****Pantalla playeras*****/
		public function adminplayeras()
		{
			$this->view->render($this, "adminplayeras");
		}
		/*****Pantalla principal (con o sin usuario)*****/
		public function adminprincipal()
		{
			$this->view->render($this, "adminPrincipal");
		}
		/*****Pantalla zapatos*****/
		public function adminzapatos()
		{
			$this->view->render($this, "adminzapatos");
		}
		public function editarProducto()
		{
			$this->view->render($this, "adinfo_producto");
		}
		public function agregarProducto()
		{
			$this->view->render($this, "nuevo_producto");
		}
		public function miPerfil()
		{
			$this->view->render($this, "miperfil");
		}


		/***********ACCEDER A LAS FUNCIONES***********/

		/*****Función: Registro*****/
		public function registrarUsuario(){
			session_start();
			$pass2 = $_POST['pass2'];
			$nombre = $_POST['nombreRegistro'];
			$mail = $_POST['mailRegistro'];
			$pass = $_POST['passRegistro'];
			$respuesta = Hash::create(ALGOR, $_POST['respuestaRegistro'], KEY);
			$pregunta = $_POST['preguntaRegistro'];
			if($nombre != "" && $mail != "" && $pass != "" && $respuesta != "" || $pregunta != ""){
				if($pass == $pass2){
					$pass = Hash::create(ALGOR, $pass, KEY);
					$this->loadOtherModel('UsuarioCarrito');
					//Mandamos a llamar registroUsuario() ubicado en -> "../models/UsuarioCarrito_model"
					$this->UsuarioCarrito->registroUsuario($nombre, $mail, $pass, $respuesta, $pregunta);
					$_SESSION['nombreUsuario'] = $nombre;
					$_SESSION['correo'] = $mail;
					echo "<script>alert('Usuario registrado con éxito')</script>";
					// $this->view->render($this, "principal");
					header('Location:'.URL.'Carrito/');
				}else{
					echo "<script>alert('Las contraseñas no coinciden')</script>";
					$this->view->render($this, "login");
				}
			}else{
				echo "<script>alert('Usuario no pudo ser registrado')</script>";
				$this->view->render($this, "login");
			
			}
		
			
		}

		/*****Función: Iniciar Sesión*****/
		public function iniciar(){
			session_start();
			//Recibimos los datos de $_POST de la pantalla login
			$email = $_POST['mailLog'];
			$passwordLog = $_POST['passLog'];
			$passLog = Hash::create(ALGOR, $passwordLog, KEY);
			//Cargamos el modelo
			$this->loadOtherModel('UsuarioCarrito');
			//Mandamos a llamar iniciarSesion($mail, $pass) ubicado en -> "../models/UsuarioCarrito_model"
			$login = $this->UsuarioCarrito->iniciarSesion($email, $passLog);
			// echo $login['pass']."<br>".$passLog;
			//print_r($login['correo']);
			if($login['idTipoUsuario'] == "1"){
				if($login['pass'] == $passLog && $login['correo'] == $email){
					$_SESSION['nombreUsuario'] = $login['nombreUsuario'];
					echo "<script>alert('Bienvenido administrador :)')</script>";
					//$this->view->render($this, "adminprincipal");
					header('Location:'.URL.'Carrito/adminPrincipal');
				}else{
					echo "<script>alert('Usuario/Contraseña incorrecto')</script>";
					$this->view->render($this, "login");
				}
			}else{
				if($login['pass'] == $passLog && $login['correo'] == $email && $login['idTipoUsuario'] == "2"){
					$_SESSION['nombreUsuario'] = $login['nombreUsuario'];
					$_SESSION['correo'] = $login['correo'];
					echo "<script>alert('Bienvenido de vuelta')</script>";
					//$this->view->render($this, "principal");
					header('Location:'.URL.'Carrito/');
				}else{
					echo "<script>alert('Correo/Contraseña incorrecto')</script>";
					$this->view->render($this, "login");
				}	
			}
			
		}

		public function seguridad()
		{
			session_start();
			$correoSeg = $_POST['correoSeg'];
			$idPreguntaSeg = $_POST['preguntaSeg2'];
			$respuestaSeg = $_POST['respSeg2'];
			if ($correoSeg != "" && $idPreguntaSeg != "" && $respuestaSeg != ""){
				$hashResp = Hash::create(ALGOR, $respuestaSeg, KEY);
				$this->loadOtherModel('UsuarioCarrito');
				$seguridad = $this->UsuarioCarrito->loginSeguridad($correoSeg, $idPreguntaSeg, $hashResp);
				if ($seguridad['correo'] == $correoSeg && $seguridad['idPregunta'] == $idPreguntaSeg && $seguridad['respSeguridad'] == $hashResp) {
					$_SESSION['nombreUsuario'] = $login['nombreUsuario'];
					$_SESSION['correo'] = $login['correo'];
					echo "<script>alert('Bienvenido de nuevo :)')</script>";
					header('Location:'.URL.'Carrito/');
				}else{
					echo "<script>alert('Datos incorrectos')</script>";
					$this->view->render('login');
				}
			}else{
				echo "<script>alert('Rellenar campos')</script>";
			}
		}


		/*****Función: agregar productos a bd*****/
		public function addProductoDB(){
			//echo $temp = $_POST['talla'];;
			if(isset($_POST['Agregar'])){
				switch ($_POST['talla']) {
					case 'c':
						$talla = "chica";
						break;
					case 'm':
						$talla = "mediana";
						break;
					case 'g':
						$talla = "grande";
						break;
					default:
						$talla = "chica";	
						break;			
				}
				$categoria = $_POST['categoria'];
				$producto = $_POST['nombreProducto'];
				$descripcion = $_POST['descripcion'];
				$imagen = "/img/".$_POST['Imagen'];
				$precio = $_POST['precio'];
				$cantidad = $_POST['cantidad'];
				if($categoria != "" && $producto != "" && $descripcion != "" && 
					$precio != "" && $talla != "" && $categoria != "0"){
					//echo $imagen;
					echo $categoria."/".$producto."/".$descripcion."/".$img."/".$precio."/".$talla;
					$this->loadOtherModel('Admin');
					$agregar = $this->Admin->agregarProductoA($categoria, $producto, $descripcion, 
																$imagen, $precio, $talla, $cantidad);
					echo "<script>alert('¡Producto agregado exitosamente!')</script>";
					//print_r($agregar);
					switch ($categoria) {
						case '1':
							//$this->view->render($this, "adminplayeras");
							header('Location:'.URL.'Carrito/adminplayeras');
							break;
						case '2':
							//$this->view->render($this, "admincamisas");
							header('Location:'.URL.'Carrito/admincamisas');
							break;
						case '3':
							//$this->view->render($this, "adminpantalones");
							header('Location:'.URL.'Carrito/adminpantalones');
							break;
						case '4':
							//$this->view->render($this, "adminchamarras");
							header('Location:'.URL.'Carrito/adminchamarras');
							break;
						case '5':
							//$this->view->render($this, "adminzapatos");
							header('Location:'.URL.'Carrito/adminzapatos');
							break;
					}
				}else{
					echo "<script>alert('Error inesperado, reintentar más tarde')</script>";
					$this->view->render($this, "nuevo_producto");
				}
			

			 }
			
		}

		public function agregar() {
			$nombreUsuario = $_POST['nombreUsuario'];
			$nombreProducto = $_POST['nombreProducto'];
			$talla = $_POST['talla'];
			$precio = $_POST['precio'];
			$idProducto = $_POST['idProducto'];
			$cantidad = $_POST['cantidad'];
			$cantidad."/".$talla."/".$precio."/".$idProducto;
			$this->loadOtherModel('UsuarioCarrito');
			$this->UsuarioCarrito->insertAgregarPU($idProducto, $talla,$nombreUsuario, $precio, $cantidad);
			header('Location:'.URL.'Carrito/');

					
		}

		public function actualizarProducto()
		{
			$idProducto = $_POST['idProducto'];
			$nombre = $_POST['nombre'];
			$precio = $_POST['precio'];
			$descripcion = $_POST['descripcion'];
			$cantidad = $_POST['quantity'];
			$talla = $_POST['talla'];
			$this->loadOtherModel('Admin');
			$this->Admin->actualizarPro($nombre, $precio, $descripcion, $talla, $cantidad, $idProducto);

			$this->view->render($this, "adminprincipal");

		}
		public function borrarProducto()
		{
			if(isset($_GET['idProducto'])){
				$borrar = $_GET['idProducto'];
				$this->loadOtherModel('Admin');
				echo $this->Admin->borrar($borrar);
				echo "<script>alert('Producto borrado')</script>";
				header('Location:'.URL.'Carrito/adminPrincipal');
			}
			else{
				echo "<script>alert('Error inesperado, reintentar más tarde')</script>";
			}
			
		}
		
	}

 ?>