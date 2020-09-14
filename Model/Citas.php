<?php 
	class Citas
	{
		private $pdo;
		public $id_paciente;
		public $id_medico;
		public $id_enfermera;
		public $fecha;
		public $hora;

		//Funcion de contructor 
		public function __CONSTRUCT()
		{
			try
			{
				$this->pdo=Database::Conectar();			}
			catch (Exception $exception)
			{
				die($exception->getMessage());
			}
		}


		//listar todas las citas	
		public function ListarCitas(){
		try{
		
			$result=array();
			$id = $_SESSION['user_login'];
			if ($id==4)
            {
            	$stm=$this->pdo->prepare("SELECT a.id_cita as id_cita, b.nombre_medico as id_medico, c.nombre_enfermera as id_enfermera, d.nombre_paciente as id_paciente, a.fecha as fecha, a.hora as hora FROM citas as a INNER JOIN medico as b on a.id_medico = b.id_medico INNER JOIN enfermera as c on a.id_enfermera = c.id_enfermera INNER JOIN ficha_paciente as d on a.id_paciente = d.id_paciente");
            }else {
				$stm=$this->pdo->prepare("SELECT a.id_cita as id_cita, b.nombre_medico as id_medico, c.nombre_enfermera as id_enfermera, d.nombre_paciente as id_paciente, a.fecha as fecha, a.hora as hora FROM citas as a INNER JOIN medico as b on a.id_medico = b.id_medico INNER JOIN enfermera as c on a.id_enfermera = c.id_enfermera INNER JOIN ficha_paciente as d on a.id_paciente = d.id_paciente WHERE b.Userid = $id");
			}            
  			$stm->execute();
	
			
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


	

//---------------////////
		public function Obtener($id_cita){
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM citas WHERE id_cita = ?");
			          

			$stm->execute(array($id_cita));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	
	public function Eliminar($id_cita){
		try{
			$stm = $this->pdo
			->prepare('DELETE FROM citas WHERE id_cita=?');
			$stm->execute(array($id_cita));
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


	public function Actualizar($data){
			try{
				$sql = 'UPDATE citas
				SET id_medico= ?, id_enfermera= ?, id_paciente= ?, fecha= ?, hora= ?
				WHERE id_cita=?
				';
				$this->pdo->prepare($sql)->execute
					(
						array(
							$data->id_medico,
							$data->id_enfermera,
							$data->id_paciente,
							$data->fecha,
							$data->hora,
							$data->id_cita
							)
					);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
		
	}

		public function Registrar($data){
			try{
				
			
			$sql = "INSERT INTO citas(id_medico, id_enfermera, id_paciente, fecha, hora)
			VALUES(?,?,?,?,?)";
			$this->pdo->prepare($sql)->execute
			(
				array(
					   $data->id_medico,
					   $data->id_enfermera,
					   $data->id_paciente,
					   $data->fecha,
					   $data->hora
					   	   
				)
			);
			
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

		public function ListarPacientes(){
		try{
			$result=array();
			$stm=$this->pdo->prepare("SELECT * FROM ficha_paciente");
			$stm->execute();
			
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	
	


	}
	
?>