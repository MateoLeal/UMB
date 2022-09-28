<?php
require_once 'model/login.php';

class loginController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new login();
    }
    
    public function Login(){
        require_once 'view/login/login.php';
        session_regenerate_id(true);
        session_destroy();
    }

    public function Obtener(){
        $usu = $_REQUEST['usu'];

        $login = new login();
        $login = $this->model->Validar($usu);
        
        require_once 'view/login/valida.php';
    }
}
