<?php
class estudiante {
    private $pdo;

	public function __CONSTRUCT(){
		try{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Insertar($nombre,$semestre){
		try{
		$sql = "INSERT INTO estudiante (nombre,semestre) 
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					 $nombre, 
                     $semestre
                )
			);
		} catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function Update($nombre,$semestre,$id){
		try{
			$sql = "UPDATE estudiante SET 
						nombre  = ?,
						semestre	= ?
						
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$nombre, 
                        $semestre,
                        $id
					)
				);
		} catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function Buscar($id){
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM estudiante WHERE id = ?");
			          
			$stm->execute(
				array(
					$id
				)
			);
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function Listar(){
		try{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM estudiante");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Eliminar($id){
		try{
			$stm = $this->pdo
			            ->prepare("DELETE FROM estudiante WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e){
			die($e->getMessage());
		}
	}
	
	public function BuscarNotasEstudiante($materia,$id){
		try{
			$stm = $this->pdo
						->prepare("SELECT E.id as id, E.nombre as estudiante, E.semestre as semestre, A.nombre as materia, A.periodo as periodo, A.ref as ref, AVG(nota) as definitiva FROM estudiante E, asignatura A, asignaturaEstudiante AE WHERE E.id = AE.estu AND A.ref = AE.asig AND AE.asig = ? AND AE.estu = ? LIMIT 1");
						
			$stm->execute(
				array(
					$materia,
					$id
				)
			);
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function ListarNotas($ref, $id){
		try{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM asignaturaEstudiante WHERE asig = ? AND estu = ?");
			$stm->execute(
				array(
					$ref,
					$id
				)
			);

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function InsertarNota($ref,$id,$descripcion,$nota){
		try{
		$sql = "INSERT INTO asignaturaEstudiante (asig,estu,descripcion,nota) 
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$ref,
					$id,
					$descripcion,
					$nota
                )
			);
		} catch (Exception $e){
			die($e->getMessage());
		}
	}
}
