<?php 
	class Usuarios
	{
		private $pdo;
		public $Userid;
		public $username;
		public $email;
		public $pass;
		public $id_cargo;
		public $nueva_clave;


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

	public function ListarCargos(){
		try{
					
		
			$result=array();
			$stm=$this->pdo->prepare("SELECT * FROM cargos");
			$stm->execute();
			
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


	

//---------------////////
		public function Obtener($Userid){
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuarios WHERE Userid = ?");
			          

			$stm->execute(array($Userid));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


	
	public function Eliminar($Userid){
		try{
			$stm = $this->pdo
			->prepare('DELETE FROM usuarios WHERE Userid=?');
			$stm->execute(array($Userid));
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


	public function ActualizarUs($data){
			try{
				$nueva_clave = password_hash($pass, PASSWORD_DEFAULT);
				$sql = 'UPDATE usuarios
				SET username= ?, email= ?, id_cargo= ?
				WHERE Userid=?
				';
				$this->pdo->prepare($sql)->execute
					(
						array(
							$data->username,
							$data->email,
							$data->id_cargo,
							$data->Userid
							)
					);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
		
	}









	}
	
	


	
	
?>