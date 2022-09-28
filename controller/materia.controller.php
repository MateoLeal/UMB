<?php
require_once 'model/materia.php';

class materiaController {

    private $model;

    public function __CONSTRUCT() {
        $this->model = new materia();
    }

    public function Ver() {
        require_once 'view/header.php';
        require_once 'view/materia/materia.php';
        require_once 'view/footer.php';
    }

    public function CrearMateria() {
        require_once 'view/header.php';
        require_once 'view/materia/materia-editar.php';
        require_once 'view/footer.php';
    }

    public function Crear() {
        $nombre    = $_REQUEST['nombre'];
        $periodo   = $_REQUEST['periodo'];

        $materia = new materia();
        $materia = $this->model->Insertar($nombre, $periodo);

        require_once 'view/header.php';
        require_once 'view/materia/materia.php';
        require_once 'view/footer.php';
    }

    public function EditarMateria() {
        $ref = $_REQUEST['ref'];

        $materia = new materia();
        $materia = $this->model->Buscar($ref);

        require_once 'view/header.php';
        require_once 'view/materia/materia-editar.php';
        require_once 'view/footer.php';
    }

    public function Editar() {
        $ref     = $_REQUEST['ref'];
        $nombre    = $_REQUEST['nombre'];
        $periodo   = $_REQUEST['periodo'];

        $materia = new materia();
        $materia = $this->model->Update($nombre, $periodo, $ref);

        require_once 'view/header.php';
        require_once 'view/materia/materia.php';
        require_once 'view/footer.php';
    }

    public function Eliminar() {
        $ref = $_REQUEST['ref'];

        $materia = new materia();
        $materia = $this->model->Eliminar($ref);

        require_once 'view/header.php';
        require_once 'view/materia/materia.php';
        require_once 'view/footer.php';
    }
}
