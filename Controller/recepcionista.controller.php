<?php
include 'model/Recepcionista.php';

class RecepcionistaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Recepcionista();
    }
    
    public function Index(){
       
        require_once 'view/recepcionista/recepcionista.php';
       
    }
    
    public function Crud(){
        $datos = new Recepcionista();
        
        if(isset($_REQUEST['id_recepcionista'])){
            $datos = $this->model->Obtener($_REQUEST['id_recepcionista']);
        }
        
       
        require_once 'view/recepcionista/recepcionista-editar.php';
       
    }
    
    public function Guardar(){
        $datos = new Recepcionista();
		
        $datos->id_recepcionista= $_REQUEST['id_recepcionista'];
		$datos->nombre_recepcionista=$_REQUEST['nombre_recepcionista'];
        $datos->apellido=$_REQUEST['apellido'];
        $datos->telefono=$_REQUEST['telefono'];
        $datos->turno=$_REQUEST['turno'];
        $datos->direccion=$_REQUEST['direccion'];
		$datos->id_cargo= $_REQUEST['id_cargo'];

        $datos->id_recepcionista > 0 
            ? $this->model->Actualizar($datos)
            : $this->model->Registrar($datos);
        
        header('Location: indexRecepcionista.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_recepcionista']);
        header('Location: indexRecepcionista.php');
    }
}