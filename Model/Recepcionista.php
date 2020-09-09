<?php
class Recepcionista{
	private $pdo;
	public $id_recepcionista;
	public $nombre_recepcionista;
	public $apellido;
	public $telefono;
	public $turno;
	public $direccion;
	public $id_cargo;

	
	public function __CONSTRUCT(){
		try{
			$this->pdo=Database::Conectar();
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


		public function ListarRecepcionista(){
		try{
		
			$result=array();
			$stm=$this->pdo->prepare("SELECT * FROM recepcionista");
			$stm->execute();
			
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	
	
	
	
	public function Obtener($id_recepcionista){
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM recepcionista");
			          

			$stm->execute(array($id_recepcionista));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	
	public function Eliminar($id_recepcionista){
		try{
			$stm = $this->pdo
			->prepare('DELETE FROM recepcionista WHERE id_recepcionista=?');
			$stm->execute(array($id_recepcionista));
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


	public function Actualizar($data){
			try{
				$sql = 'UPDATE recepcionista
				SET nombre_recepcionista= ?, apellido= ?, telefono= ?, turno= ?, direccion= ?
				WHERE id_recepcionista=?
				';
				$this->pdo->prepare($sql)->execute
					(
						array(
							$data->nombre_recepcionista,
							$data->apellido,
							$data->telefono,
							$data->turno,
							$data->direccion,
							$data->id_recepcionista
							)
					);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
		
		
	}

		public function Registrar($data){
			try{
				
			
			$sql = "INSERT INTO recepcionista(nombre_recepcionista, apellido, telefono, turno, direccion, id_cargo)
			VALUES(?,?,?,?,?,'4')";
			$this->pdo->prepare($sql)->execute
			(
				array(
					   $data->nombre_recepcionista,
					   $data->apellido,
					   $data->telefono,
					   $data->turno,
					   $data->direccion,
					   	   
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