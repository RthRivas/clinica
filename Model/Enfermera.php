<?php
class Enfermera{
	private $pdo;
	public $id_enfermera;
	public $nombre_enfermera;
	public $telefono;
	public $direccion;
	public $turno;
	public $id_cargo;
	
	
	public function __CONSTRUCT(){
		try{
			$this->pdo=Database::Conectar();
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


		public function ListarEnfermera(){
		try{
		
			$result=array();
			$stm=$this->pdo->prepare("SELECT * FROM enfermera");
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
			          ->prepare("SELECT * FROM enfermera WHERE id_enfermera = ?");
			          

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
			SET nombre_enfermera= ?, telefono=?, direccion= ?, turno=?
			WHERE id_enfermera=?
			';
			$this->pdo->prepare($sql)->execute
				(
					array(
						$data->nombre_enfermera,
						$data->telefono,
						$data->direccion,
						$data->turno,
						$data->id_enfermera						
						)
				);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
		
		
	}
	public function Registrar($data){
		try{
			
			
			$sql = "INSERT INTO enfermera(nombre_enfermera, telefono, direccion, turno, id_cargo)
			VALUES(?,?,?,?,'3')";
			$this->pdo->prepare($sql)->execute
			(
				array(
					   $data->nombre_enfermera,
					   $data->telefono,
					   $data->direccion,
					   $data->turno   	   
				)
			);
			
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
		 
	
	}


?>