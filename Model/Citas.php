<?php 
	class Citas
	{
		private $pdo;
		public $dui;
		public $medico;
		public $enfermera;
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
		public function ListarCitas()
		{
			try
			{
				$result = array();
				$cmd=$this->pdo->prepare("select a.id_cita as id, b.nombre_medico as Medico, c.nombre_enfermera as Enfermera, d.nombre_paciente as Paciente,a.fecha as fecha, a.hora as hora from citas as a INNER join medico as b on a.id_medico = b.id_medico inner join enfermera as c on a.id_enfermera = c.id_enfermera INNER join ficha_paciente as d on a.id_paciente = d.id_paciente");
				$cmd->execute();

				return $cmd->fetchAll(PDO::FETCH_OBJ);
			}
			catch (Exception $exception)
			{
				die($exception->getMessage());
			}
		}


	}
	
?>