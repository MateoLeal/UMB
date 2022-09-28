<?php
require_once 'model/estudiante.php';

class estudianteController {

    private $model;

    public function __CONSTRUCT() {
        $this->model = new estudiante();
    }

    public function Ver() {
        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante.php';
        require_once 'view/footer.php';
    }

    public function CrearEstudiante() {
        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante-editar.php';
        require_once 'view/footer.php';
    }

    public function Crear() {
        $nombre    = $_REQUEST['nombre'];
        $semestre   = $_REQUEST['semestre'];

        $estudiante = new estudiante();
        $estudiante = $this->model->Insertar($nombre, $semestre);

        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante.php';
        require_once 'view/footer.php';
    }

    public function EditarEstudiante() {
        $id = $_REQUEST['id'];

        $estudiante = new estudiante();
        $estudiante = $this->model->Buscar($id);

        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante-editar.php';
        require_once 'view/footer.php';
    }

    public function Editar() {
        $id     = $_REQUEST['id'];
        $nombre    = $_REQUEST['nombre'];
        $semestre   = $_REQUEST['semestre'];

        $estudiante = new estudiante();
        $estudiante = $this->model->Update($nombre, $semestre, $id);

        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante.php';
        require_once 'view/footer.php';
    }

    public function NotasEstudiante() {
        $materia = $_REQUEST['materia'];
        $id = $_REQUEST['id'];

        $estudiante = new estudiante();
        $estudiante = $this->model->BuscarNotasEstudiante($materia, $id);

        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante-notas.php';
        require_once 'view/footer.php';
    }

    public function Eliminar() {
        $id = $_REQUEST['id'];

        $estudiante = new estudiante();
        $estudiante = $this->model->Eliminar($id);

        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante.php';
        require_once 'view/footer.php';
    }

    public function Nota() {
        $ref = $_REQUEST['ref'];
        $id = $_REQUEST['id'];
        $descripcion = $_REQUEST['descripcion'];
        $nota = $_REQUEST['nota'];

        $estudiante = new estudiante();
        $estudiante = $this->model->InsertarNota($ref,$id,$descripcion,$nota);

        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante.php';
        require_once 'view/footer.php';
    }
}
