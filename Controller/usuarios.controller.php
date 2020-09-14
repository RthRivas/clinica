<?php	
	include 'model/Usuarios.php';

	class UsuariosController
	{
		private $model;
			
		public function __CONSTRUCT()
		{
			$this->model= new Usuarios();
		}

		public function Index()
		{	
			require_once 'view/usuarios/usuarios.php';
		}



    public function Crud(){
        $datos = new Usuarios();
        
        if(isset($_REQUEST['Userid'])){
            $datos = $this->model->Obtener($_REQUEST['Userid']);
        }
        
       
        require_once 'view/usuarios/usuarios-editar.php';
       
    }
    
    public function Guardar(){
      {
        $datos = new Usuarios();
        
        $datos->Userid= $_REQUEST['Userid'];
        $datos->username=$_REQUEST['username'];
        $datos->email= $_REQUEST['email'];
        $datos->id_cargo= $_REQUEST['id_cargo'];
        $datos->pass= $_REQUEST['pass'];
               


        $datos->Userid > 0 
            ? $this->model->ActualizarUs($datos)
            : $this->model->RegistrarUsuario($datos);

        header('Location: indexUsuarios.php');

    }
    }


    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['Userid']);
        header('Location: indexUsuarios.php');
    }
}

	
?>

