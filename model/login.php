<?php
class login{
    private $pdo;
    public 	$usu;

	public function __CONSTRUCT(){
		try{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Validar($usu){
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuario WHERE user = ?");
			          
			$stm->execute(
				array(
					$usu
				)
			);
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e){
			die($e->getMessage());
		}
	}
}
