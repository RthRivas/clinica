<?php
include 'model/Medico.php';

class MedicoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Medico();
    }
    
    public function Index(){
       
        require_once 'view/medico/medico.php';
       
    }
    
    public function Crud(){
        $datos = new Medico();
        
        if(isset($_REQUEST['id_medico'])){
            $datos = $this->model->Obtener($_REQUEST['id_medico']);
        }
        
       
        require_once 'view/medico/medico-editar.php';
       
    }
    
    public function Guardar(){
        $datos = new Medico();
		
        $datos->id_medico= $_REQUEST['id_medico'];
		$datos->nombre_medico=$_REQUEST['nombre_medico'];
		$datos->JVPM= $_REQUEST['JVPM'];
        $datos->telefono= $_REQUEST['telefono'];
        $datos->direccion= $_REQUEST['direccion'];        
		$datos->id_especialidad= $_REQUEST['id_especialidad'];
        $datos->estado= $_REQUEST['estado'];
        $datos->Userid= $_REQUEST['Userid'];



        $datos->id_medico > 0 
            ? $this->model->Actualizar($datos)
            : $this->model->Registrar($datos);
        
        header('Location: indexMedico.php');
    }
    
    public function GuardarEsp(){
        $datos = new Medico();
        
        $datos->id_especialidad= $_REQUEST['id_especialidad'];
        $datos->nombre_esp=$_REQUEST['nombre_esp'];
        

        $datos->id_especialidad > 0 
            ? $this->model->ActualizarEsp($datos)
            : $this->model->RegistrarEsp($datos);
        
        header('Location: medico-editar.php');
    }


    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_medico']);
        header('Location: indexMedico.php');
    }
}