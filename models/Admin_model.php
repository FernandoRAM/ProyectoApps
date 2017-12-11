<?php 

	class Admin_model extends Model
	{
		public function agregarProductoA($Categoria, $Producto, $Descripcion, $nombre_imagen, $Precio, $talla, $cantidad ) {
			
			$nombre_imagen=$_FILES['Imagen']['name'];
			$tipo_imagen=$_FILES['Imagen']['type'];
			$tamano_imagen=$_FILES['Imagen']['size'];
			
			
			if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/jpg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/gif" || $tipo_imagen == "JPG") {
		
				//ruta de la carpeta destino 
				$temp = $_SERVER["DOCUMENT_ROOT"] . "img"; 

				//movemos la imagen del directorio temp al nuestro 
				move_uploaded_file($_FILES['Imagen']['tmp_name'], $temp.$nombre_imagen);

				$dataA = array('idCategoria'=> $Categoria, 'nombreProducto' => $Producto, 'descripcion' => $Descripcion, 'imagen' => $nombre_imagen, 'precio' => $Precio, 'talla' => $talla,
					'cantidad' => $cantidad);
				//return $this->db->printInsert($dataA, 'productos');
			}

			return $this->db->insert($dataA, 'productos');


		}

		public function selectCateByID($idCate){

			return $this->db->select("nombreCategoria", "categoria", "idCategoria = '{$idCate}'");
		}

		public function actualizarPro($nombre, $precio, $descripcion, $talla, $cantidad, $idProducto)
		{
			$data = array('nombreProducto' =>$nombre, 'precio' =>$precio, 'descripcion' =>$descripcion, 'talla' =>$talla, 'cantidad' =>$cantidad);
			return $this->db->update($data, "productos", "idProducto = '{$idProducto}'");
		}
		public function borrar($idProducto)
		{
			return $this->db->delete("productos", "idProducto = {$idProducto}");
		}
	}

 ?>