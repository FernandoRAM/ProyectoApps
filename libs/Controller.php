<?php

class Controller {

    function __construct(){
        Session::init();
        $this->view = new View();
        $this->loadModel();
        $this->accesos = (Session::existVar('accesos') ) ? Session::getValue('accesos') : null ;
    }

    function loadModel() {
        $model = get_class($this) . '_model';
        $path = 'models/' . $model . '.php';

        if (file_exists($path)) {
            require_once($path);
            $this->model = new $model();
        }
    }

    function loadOtherModel($model) {
        $nameModel = $model;
        $model = $model. '_model';
        $path = 'models/' . $model . '.php';

        if (file_exists($path)) {
            require_once($path);
            $this->$nameModel = new $model;
        }
    }

    function pageNotFound(){
        $this->view->render('Default', 'errorSitio', true);
    }
}

?>
