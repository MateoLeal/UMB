<?php
require_once 'model/usuario.php';

class usuarioController {

    private $model;

    public function __CONSTRUCT() {
        $this->model = new usuario();
    }

    public function Ver() {
        require_once 'view/header.php';
        require_once 'view/usuario/usuario.php';
        require_once 'view/footer.php';
    }

    public function CrearUsu() {
        require_once 'view/header.php';
        require_once 'view/usuario/usuario-editar.php';
        require_once 'view/footer.php';
    }

    public function Crear() {
        $usu    = $_REQUEST['usu'];
        $pass   = $_REQUEST['pwd'];
        $pwd    = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 10]);

        $usuario = new usuario();
        $usuario = $this->model->Insertar($usu, $pwd);

        require_once 'view/header.php';
        require_once 'view/usuario/usuario.php';
        require_once 'view/footer.php';
    }

    public function EditarUsu() {
        $id = $_REQUEST['id'];

        $usuario = new usuario();
        $usuario = $this->model->Buscar($id);

        require_once 'view/header.php';
        require_once 'view/usuario/usuario-editar.php';
        require_once 'view/footer.php';
    }

    public function Editar() {
        $usu    = $_REQUEST['usu'];
        $id     = $_REQUEST['id'];
        $pass   = $_REQUEST['pwd'];
        $pwd    = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 10]);

        $usuario = new usuario();
        $usuario = $this->model->Update($usu, $pwd, $id);

        require_once 'view/header.php';
        require_once 'view/usuario/usuario.php';
        require_once 'view/footer.php';
    }

    public function Eliminar() {
        $id = $_REQUEST['id'];

        $usuario = new usuario();
        $usuario = $this->model->Eliminar($id);

        require_once 'view/header.php';
        require_once 'view/usuario/usuario.php';
        require_once 'view/footer.php';
    }
}
