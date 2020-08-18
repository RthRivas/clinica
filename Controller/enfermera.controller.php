<?php
include 'model/Enfermera.php';

class EnfermeraController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Enfermera();
    }
    
    public function Index(){
       
        require_once 'view/enfermera/enfermera.php';
       
    }
    
    public function Crud(){
        $datos = new Enfermera();
        
        if(isset($_REQUEST['id_enfermera'])){
            $datos = $this->model->Obtener($_REQUEST['id_enfermera']);
        }
        
       
        require_once 'view/enfermera/enfermera-editar.php';
       
    }
    
    public function Guardar(){
        $datos = new Enfermera();
		
        $datos->id_enfermera= $_REQUEST['id_enfermera'];
		$datos->nombre_enfermera=$_REQUEST['nombre_enfermera'];
		$datos->id_cargo= $_REQUEST['id_cargo'];
		$datos->telefono= $_REQUEST['telefono'];
        

        $datos->id_enfermera > 0 
            ? $this->model->Actualizar($datos)
            : $this->model->Registrar($datos);
        
        header('Location: indexEnfermera.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_enfermera']);
        header('Location: indexEnfermera.php');
    }
}