<?php
class Enfermera{
	private $pdo;
	public $id_enfermera;
	public $nombre_enfermera;
	public $id_cargo;
	public $telefono;
	
	
	public function __CONSTRUCT(){
		try{
			$this->pdo=Database::Conectar();
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


	public function ListarCargo(){
		try{
			//require_once("class.usuario.php");
			//equire_once("session.php");
		
			$result=array();
			$stm=$this->pdo->prepare("SELECT * FROM cargos");
			$stm->execute();
			
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	
	
	
	public function Obtener($id_enfermera){
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM enfermera");
			          

			$stm->execute(array($id_enfermera));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	
	public function Eliminar($id_enfermera){
		try{
			$stm = $this->pdo
			->prepare('DELETE FROM enfermera WHERE id_enfermera=?');
			$stm->execute(array($id_enfermera));
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function Actualizar($data){
		try{
			$sql = 'UPDATE enfermera
			SET nombre_enfermera= ?, id_cargo= ?, telefono= ?
			WHERE id_enfermera=?
			';
			$this->pdo->prepare($sql)->execute
				(
					array(
						$data->nombre_enfermera,
						$data->id_cargo,
						$data->telefono
						)
				);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
		
		
	}
	public function Registrar($data){
		try{
			
			
			$sql = "INSERT INTO enfermera(nombre_enfermera, id_cargo, telefono)
			VALUES(?,?,?)";
			$this->pdo->prepare($sql)->execute
			(
				array(
					   $data->nombre_enfermera,
					   $data->id_cargo,
					   $data->telefono
				)
			);
			
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

		 
	
	}


?>