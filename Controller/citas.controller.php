<?php	
	include 'model/Citas.php';

	class CitasController
	{
		private $model;
			
		public function __CONSTRUCT()
		{
			$this->model= new Citas();
		}

		public function Index()
		{	
			require_once 'view/Citas/index.php';
		}


	}
	
?>