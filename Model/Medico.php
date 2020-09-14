<?php
class Medico{
	private $pdo;
	public $id_medico;
	public $nombre_medico;
	public $JVPM;
	public $telefono;
	public $direccion;
	public $id_especialidad;
	public $estado;
	public $id_cargo;
	public $Userid;
	public $username;
	public $email;
	public $pass;
	
	
	
	
	
	
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
			$stm=$this->pdo->prepare("SELECT a.id_medico as id_medico, a.nombre_medico as nombre_medico, a.JVPM as JVPM, a.telefono as telefono, a.direccion as direccion, b.nombre_esp as id_especialidad, a.estado as estado, c.nombre_cargo as id_cargo FROM medico as a INNER JOIN especialidad as b on a.id_especialidad = b.id_especialidad INNER JOIN cargos as c on a.id_cargo= c.id_cargo");
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
			          ->prepare("SELECT * FROM medico WHERE id_medico = ?");
			          

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
			SET nombre_medico= ?, JVPM= ?, telefono= ?, direccion=?, id_especialidad=?, estado=?, Userid =?
			WHERE id_medico=?
			';
			$this->pdo->prepare($sql)->execute
				(
					array(
						$data->nombre_medico,
						$data->JVPM,
						$data->telefono,
						$data->direccion,
						$data->id_especialidad,
						$data->estado,	 
						$data->Userid,								
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
			
			
			$sql = "INSERT INTO medico(nombre_medico, JVPM, telefono, direccion, id_especialidad, estado, id_cargo, Userid)
			VALUES(?,?,?,?,?,'2',?)";
			$this->pdo->prepare($sql)->execute
			(
				array(
					   $data->nombre_medico,
					   $data->JVPM,
					   $data->telefono,
					   $data->direccion,
					   $data->id_especialidad,
					   $data->estado,
					   $data->Userid,
					   					   
					   				   
					   	   
				)
			);
			
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


	public function ListarUsuarios(){
		try{
					
		
			$result=array();
			$stm=$this->pdo->prepare("SELECT * FROM usuarios");
			$stm->execute();
			
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}



	public function RegistrarEsp($data){
		try{
			
			
			$sql = "INSERT INTO especialidad(nombre_esp)
			VALUES(?)";
			$this->pdo->prepare($sql)->execute
			(
				array(
					   $data->nombre_esp					   	   
				)
			);
			
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


		 
	
	}


?>