<?php
class inicio {
    private $pdo;

	public function __CONSTRUCT(){
		try{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	
	public function ListarMaterias(){
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
}
