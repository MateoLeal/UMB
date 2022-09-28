<?php
require_once 'model/inicio.php';
class inicioController {

    private $model;

    public function __CONSTRUCT() {
        $this->model = new inicio();
    }

    public function Index() {
        require_once 'view/header.php';
        require_once 'view/inicio/inicio.php';
        require_once 'view/footer.php';
    }
}
