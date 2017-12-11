<?php 

	class Alumno_model extends Model
	{

		public function getAlumnos($semestre = ''){
			if($semestre == ''){
				$alumnos = $this->db->select('*', 'alumnos');
			} else {
				$alumnos = $this->db->select('*', 'alumnos', "SemestreActual = {$semestre}");
			}
			return $alumnos;
		}

		public function getAlumnosById($expediente){
			//insert
			return $this->db->select('*', 'alumnos', 'Expediente = {$expediente}');
		}

		public function altaAlumno($expediente, $nombre, $semestre, $carrera){
			$data = array('Expediente' => $expediente, 'Nombre' => $nombre, 'SemestreActual' => $semestre, 'Carrera' => $carrera );
			return $this->db->insert($data, 'alumnos');
		}

		public function showResult($data, $campo){
			return $this->db->selectStrict('*', 'alumnos', "{$data} = '{$campo}'");
		}

		public function autenticar($expediente, $password){
			$alumnos = $this->db->select('COUNT(*) as num', 'alumnos', "Expediente = {$expediente}");
			return $alumnos['num'];
		}
	}

 ?>