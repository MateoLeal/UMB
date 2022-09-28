<?php
class usuario{
    private $pdo;
    public 	$id;
    public 	$usu;
    public 	$pwd;

	public function __CONSTRUCT(){
		try{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Insertar($usu,$pwd){
		try{
		$sql = "INSERT INTO usuario (user,password) 
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					 $usu, 
                     $pwd
                )
			);
		} catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function Update($usu,$pwd,$id){
		try{
			$sql = "UPDATE usuario SET 
						user      		= ?,
						password          = ?
						
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$usu, 
                        $pwd,
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
			          ->prepare("SELECT * FROM usuario WHERE id = ?");
			          
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

			$stm = $this->pdo->prepare("SELECT * FROM usuario");
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
			            ->prepare("DELETE FROM usuario WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e){
			die($e->getMessage());
		}
	}

}
?>