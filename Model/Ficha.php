<?php
	
class Ficha{
	private $pdo;
	public $id_paciente;
	public $Dui_paciente;
	public $nombre_paciente;
	public $fecha_nacimiento;
	public $edad;
	public $genero;
	public $telefono;
	public $id_departamento;
	public $id_municipio;
	public $direccion;
	public $email;
	public $id_responsable;
	public $alergia;
	public $grupo_sanguineo;
	public $id_cargo;
	public $estado;
	


	public function __CONSTRUCT(){
		try{
			$this->pdo=Database::Conectar();
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	

	public function Obtener($id_paciente){
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM ficha_paciente WHERE id_paciente = ?");
			          

			$stm->execute(array($id_paciente));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	
//--------listar Ficha-------//
public function ListarFicha()
		{
			try
			{
				$result = array();
				$cmd=$this->pdo->prepare("SELECT * FROM ficha_paciente");
				$cmd->execute();

				return $cmd->fetchAll(PDO::FETCH_OBJ);
			}
			catch (Exception $exception)
			{
				die($exception->getMessage());
			}
		}



//---------listar eje----------
//------fin listar----------//


	public function Eliminar($id_paciente){
		try{
			$stm = $this->pdo
			->prepare('DELETE FROM ficha_paciente WHERE id_paciente=?');
			$stm->execute(array($id_paciente));
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


/////---------------///////
	public function Actualizar($data){
		try{
			$sql = 'UPDATE ficha_paciente
			SET Dui_paciente= ?, nombre_paciente= ?, fecha_nacimiento= ?, edad= ?, genero=?, telefono= ?,  id_departamento=?, id_municipio=?,  direccion=?, email=?, id_responsable=?, alergia=?, grupo_sanguineo=?, id_cargo=?, estado = ?
			WHERE id_paciente=?
			';
			$this->pdo->prepare($sql)->execute
				(
					array(
						$data->Dui_paciente,
						$data->nombre_paciente,
						$data->fecha_nacimiento,
						$data->edad,
						$data->genero,
						$data->telefono,
						$data->id_departamento,
						$data->id_municipio,
						$data->direccion,
						$data->email,
						$data->id_responsable,
						$data->alergia,
						$data->grupo_sanguineo,
						$data->id_cargo,
						$data->estado,	
						$data->id_paciente	
							
					)
				);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
		
		
	}


	public function Registrar($data){
		try{
			//require_once("class.usuario.php");
			//require_once("session.php");
			//$user_id = $_SESSION['user_session'];
			
			$sql = "INSERT INTO ficha_paciente( Dui_paciente, nombre_paciente, fecha_nacimiento, edad, genero, telefono, id_departamento, id_municipio, direccion, email, id_responsable, alergia, grupo_sanguineo, id_cargo, estado)
			VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$this->pdo->prepare($sql)->execute
			(
				array(
					 
					  	$data->Dui_paciente,
						$data->nombre_paciente,
						$data->fecha_nacimiento,
						$data->edad,	
						$data->genero,
						$data->telefono,
						$data->id_departamento,
						$data->id_municipio,
						$data->direccion,
						$data->email,
						$data->id_responsable,
						$data->alergia,
						$data->grupo_sanguineo,
						$data->id_cargo,
						$data->estado
				)
			);
			
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


	public function ListarDepa()
	{
			try{
				$result = array();
				$stm = $this->pdo->prepare('SELECT * FROM departamentos');
				$stm->execute();
				
				return $stm->fetchAll(PDO::FETCH_OBJ);
				
			}
			catch (Exception $e){
				die($e->getMessage ());
			}
		}


	function ListarMunicipio()
		{
			try{
				$result = array();
				$stm = $this->pdo->prepare('SELECT * from municipios');
				$stm->execute();
				
				return $stm->fetchAll(PDO::FETCH_OBJ);
				
			}
			catch (Exception $e){
				die($e->getMessage ());
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