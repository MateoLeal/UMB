<?php
class materia{
    private $pdo;

	public function __CONSTRUCT(){
		try{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Insertar($nombre,$periodo){
		try{
		$sql = "INSERT INTO asignatura (nombre,periodo) 
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					 $nombre, 
                     $periodo
                )
			);
		} catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function Update($nombre,$periodo,$ref){
		try{
			$sql = "UPDATE asignatura SET 
						nombre  = ?,
						periodo	= ?
						
				    WHERE ref = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$nombre, 
                        $periodo,
                        $ref
					)
				);
		} catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function Buscar($ref){
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM asignatura WHERE ref = ?");
			          
			$stm->execute(
				array(
					$ref
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

			$stm = $this->pdo->prepare("SELECT * FROM asignatura");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Eliminar($ref){
		try{
			$stm = $this->pdo
			            ->prepare("DELETE FROM asignatura WHERE ref = ?");			          

			$stm->execute(array($ref));
		} catch (Exception $e){
			die($e->getMessage());
		}
	}
}
