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
			require_once 'view/citas/citas.php';
		}



    public function Crud(){
        $datos = new Citas();
        
        if(isset($_REQUEST['id_cita'])){
            $datos = $this->model->Obtener($_REQUEST['id_cita']);
        }
        
       
        require_once 'view/citas/citas-editar.php';
       
    }
    
    public function Guardar(){
        $datos = new Citas();
		
        $datos->id_cita= $_REQUEST['id_cita'];
		$datos->id_medico=$_REQUEST['id_medico'];
        $datos->id_enfermera=$_REQUEST['id_enfermera'];        
        $datos->id_paciente=$_REQUEST['id_paciente'];
        $datos->fecha=$_REQUEST['fecha'];
        $datos->hora=$_REQUEST['hora'];
 

        $datos->id_cita> 0 
            ? $this->model->Actualizar($datos)
            : $this->model->Registrar($datos);
        
        header('Location: indexCitas.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_cita']);
        header('Location: indexCitas.php');
    }
}

	
?>

