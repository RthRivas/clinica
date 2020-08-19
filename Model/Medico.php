<?php
class Medico{
	private $pdo;
	public $id_medico;
	public $nombre_medico;
	public $JVPM;
	public $id_especialidad;
	public $id_cargo;
	
	
	public function __CONSTRUCT(){
		try{
			$this->pdo=Database::Conectar();
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function ListarMedico(){
		try{

			$result=array();
			$stm=$this->pdo->prepare("SELECT * FROM medico");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


	public function ListarEsp(){
		try{
					
		
			$result=array();
			$stm=$this->pdo->prepare("SELECT * FROM especialidad");
			$stm->execute();
			
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	
	public function Obtener($id_medico){
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM medico");
			          

			$stm->execute(array($id_medico));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	
	public function Eliminar($id_medico){
		try{
			$stm = $this->pdo
			->prepare('DELETE FROM medico WHERE id_medico=?');
			$stm->execute(array($id_medico));
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function Actualizar($data){
		try{
			$sql = 'UPDATE medico
			SET nombre_medico= ?, JVPM= ?
			WHERE id_medico=?
			';
			$this->pdo->prepare($sql)->execute
				(
					array(
						$data->nombre_medico,
						$data->JVPM,
						$data->id_medico
						)
				);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
		
		
	}
	public function Registrar($data){
		try{
			
			
			$sql = "INSERT INTO medico(nombre_medico, JVPM, id_especialidad, id_cargo)
			VALUES(?,?,?,'1')";
			$this->pdo->prepare($sql)->execute
			(
				array(
					   $data->nombre_medico,
					   $data->JVPM,
					   $data->id_especialidad
				)
			);
			
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

		 
	
	}


?>