<?php 

	class UsuarioCarrito_Model extends Model
	{
		public function selectProductos(){
			return $this->db->select("*", "productos");
		}
		public function selectUsuarios($mail)
		{
			return $this->db->select("*", "usuarios", "correo = '{$mail}'");
		}
		public function loginSeguridad($correo, $pregunta, $respuesta)
		{
			return $this->db->select("*", "usuarios", "correo = '{$correo}' AND idPregunta = '{$pregunta}' AND respSeguridad = '{$respuesta}'");
		}
		public function selectProductosByIDProducto($idProducto){
			return $this->db->select("*", "productos", "idProducto = {$idProducto}");
		}
		public function registroUsuario($nombre, $mail, $pass, $respuesta, $pregunta){
			$data = array('nombreUsuario' => $nombre, 'correo' => $mail, 'pass' => $pass,
						  'respSeguridad' => $respuesta, 'idPregunta' => $pregunta, 'idTipoUsuario' => '2');
			return $this->db->insert($data, 'usuarios');
		}
		public function iniciarSesion($mail, $pass){
			$login = $this->db->select("*", "usuarios", 
										"`correo` = '{$mail}' AND `pass` = '{$pass}'");
			return $login;
		}
		public function insertAgregarPU($idProducto, $talla, $nombreUsuario, $precio, $cantidad){

			$dataUP = array('idProducto'=> $idProducto, 'talla' => $talla, 'nombreUsuario' => $nombreUsuario, 'precio' => $precio, 'cantidad' => $cantidad);

			return $this->db->insert($dataUP, "carrito");


		}

		
	}

 ?>