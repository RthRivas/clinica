<?php
	
class Recetas{
	private $pdo;
	public $id_receta;
	public $id_paciente;
	public $id_medico;
	public $descripcion;
	public $fecha;

	public function __CONSTRUCT(){
		try{
			$this->pdo=Database::Conectar();
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	

	public function Obtener($id_receta){
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM recetas WHERE id_receta = ?");
			          

			$stm->execute(array($id_receta));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	
//--------listar Ficha-------//
public function ListarReceta()
		{
			try
			{
				$result = array();
				$cmd=$this->pdo->prepare("SELECT a.id_receta as id_receta, b.nombre_paciente as id_paciente, c.nombre_medico as id_medico, a.fecha as fecha  FROM recetas as a INNER JOIN ficha_paciente as b on a.id_paciente = b.id_paciente INNER JOIN medico as c on a.id_medico = c.id_medico");
				$cmd->execute();

				return $cmd->fetchAll(PDO::FETCH_OBJ);
			}
			catch (Exception $exception)
			{
				die($exception->getMessage());
			}
		}




	public function Eliminar($id_receta){
		try{
			$stm = $this->pdo
			->prepare('DELETE FROM recetas WHERE id_receta=?');
			$stm->execute(array($id_receta));
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


/////---------------///////
	public function Actualizar($data){
		try{
			$sql = 'UPDATE recetas
			SET id_paciente= ?, id_medico= ?, descripcion= ?, fecha= ?
			WHERE id_receta=?
			';
			$this->pdo->prepare($sql)->execute
				(
					array(
						$data->id_paciente,
						$data->id_medico,
						$data->descripcion,
						$data->fecha,
						$data->id_receta	
							
					)
				);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
		
		
	}


	public function Registrar($data){
		try{
					
			$sql = "INSERT INTO recetas(id_paciente, id_medico, descripcion, fecha)
			VALUES(?,?,?,?)";
			$this->pdo->prepare($sql)->execute
			(
				array(
					 
					  	$data->id_paciente,
						$data->id_medico,
						$data->descripcion,
						$data->fecha
				)
			);
			
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}




	function ListarPaciente()
		{
			try{
				$result = array();
				$stm = $this->pdo->prepare('SELECT * from ficha_paciente');
				$stm->execute();
				
				return $stm->fetchAll(PDO::FETCH_OBJ);
				
			}
			catch (Exception $e){
				die($e->getMessage ());
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
	


		
	}
	



?>