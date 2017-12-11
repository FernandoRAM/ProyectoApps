<?php

class Index extends Controller{

	
    function __construct() {
        parent::__construct();
    }
 

    public function index(){
    	$this->view->render($this, 'Index');
        Session::setValue('user','jorge');
    }

     public function credencial(){

        echo Hash::create(Session::getValue('user'));
    	$this->loadOtherModel('Alumno');
    	$infoAlumno = $this->Alumno->getAlumnosById($expediente);
    	echo "<pre>";
    	print_r($infoAlumno);
    	echo "<pre>";

    }

    public function nuevoUsuario(){
    	$this->loadOtherModel('Alumno');
    	$this->Alumno->altaAlumno("111111","Prueba20154", "Insert");
    }

    public function login(){
    	$this->view->render($this, 'iniciarSesion');
    }

    public function autenticar(){
        $this->loadOtherModel('Alumno');
    	//echo $this->Alumno->autenticar($_POST['expediente'], $_POST['password']);
    }

    public function guardar(){
    	$this->view->render($this, 'nuevoAlumno');
    }

    public function datos(){
    	$exp = $_POST['expediente'];
    	$nom = $_POST['nombre'];
    	$sem = $_POST['semestre'];
    	$carr = $_POST['carrera'];

    	$this->loadOtherModel('Alumno');
    	$this->Alumno->altaAlumno($exp, $nom, $sem, $carr,  "Insert");

    	$this->view->render($this, 'nuevoAlumno');


    }

    public function buscarAlumno(){
    	$this->view->render($this, 'buscarAlumno');
    }

    public function search(){

    	$datos = $_POST['campo'];
    	$campo = $_POST['valor'];

    	$this->loadOtherModel('Alumno');
    	$this->view->pruebas = $this->Alumno->showResult($datos, $campo);
        
        echo $this->view->render($this, 'filtroAlumno');
    }
}
?>
