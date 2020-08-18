<?php
class Expediente{
	private $pdo;
	public $num_expediente;
	public $id_paciente;
	public $diagnostico;
	public $medicamento;
	public $id_medico;
	public $peso;
	public $altura;
	public $cirugias;
	public $antecedentes;
	public $enfermedades;
	public $vacunas;
	
	
	
	public function __CONSTRUCT(){
		try{
			$this->pdo=Database::Conectar();
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


//---------------////
		public function Obtener($num_expediente){
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM expediente WHERE num_expediente = ?");
			          
			$stm->execute(array($num_expediente));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


///--------------/////
	public function ListarE()
		{
			try
			{
				$result = array();
				$cmd=$this->pdo->prepare("SELECT * FROM expediente");
				$cmd->execute();

				return $cmd->fetchAll(PDO::FETCH_OBJ);
			}
			catch (Exception $exception)
			{
				die($exception->getMessage());
			}
		}

	
///------------///
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
	
	

//--------------///
	public function Eliminar($num_expediente){
		try{
			$stm = $this->pdo
			->prepare('DELETE FROM expediente WHERE num_expediente=?');
			$stm->execute(array($num_expediente));
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

////----------////
	public function Actualizar($data){
		try{
			$sql = 'UPDATE expediente
			SET id_paciente= ?, diagnostico= ?, medicamento= ?, id_medico= ?, peso= ?, altura= ?, cirugias= ?, antecedentes= ?, enfermedades= ?, vacunas= ?
			WHERE num_expediente=?
			';
			$this->pdo->prepare($sql)->execute
				(
					array(
						
						$data->id_paciente,
						$data->diagnostico,
						$data->medicamento,
				        $data->id_medico,
				        $data->peso,
				        $data->altura,
				        $data->cirugias,
				        $data->antecedentes,
				        $data->enfermedades,
				        $data->vacunas,
				        $data->num_expediente
						)
				);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
		
		
	}

	//-------------------//////


	public function Registrar($data){
		try{
			
			
			$sql = "INSERT INTO expediente(num_expediente, id_paciente, diagnostico, medicamento, id_medico, peso, altura, cirugias, antecedentes, enfermedades, vacunas)
			VALUES(?,?,?,?,?,?,?,?,?,?,?)";
			$this->pdo->prepare($sql)->execute
			(
				array(
					   $data->num_expediente,
						$data->id_paciente,
						$data->diagnostico,
						$data->medicamento,
				        $data->id_medico,
				        $data->peso,
				        $data->altura,
				        $data->cirugias,
				        $data->antecedentes,
				        $data->enfermedades,
				        $data->vacunas
				)
			);
			
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

		 
	
	}


?>