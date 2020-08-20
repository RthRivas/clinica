<?php
include 'model/Expediente.php';

class ExpedienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Expediente();
    }
    
    public function Index(){
       
        require_once 'view/expediente/expediente.php';
       
    }

    public function MostrarE(){
        $datos = new Expediente();
        
        if(isset($_REQUEST['num_expediente'])){
            $datos = $this->model->Obtener($_REQUEST['num_expediente']);
        }
               
        require_once 'view/expediente/detalleExpediente.php';
    }
    

    
    public function Crud(){
        $datos = new Expediente();
        
        if(isset($_REQUEST['num_expediente'])){
            $datos = $this->model->Obtener($_REQUEST['num_expediente']);
        }
               
        require_once 'view/expediente/expediente-editar.php';
    }
    
    public function Guardar(){

        $datos = new Expediente();
		
        $datos->num_expediente= $_REQUEST['num_expediente'];
		$datos->id_paciente=$_REQUEST['id_paciente'];
		$datos->diagnostico= $_REQUEST['diagnostico'];
		$datos->medicamento= $_REQUEST['medicamento'];
        $datos->id_medico= $_REQUEST['id_medico'];
        $datos->peso= $_REQUEST['peso'];
        $datos->altura= $_REQUEST['altura'];
        $datos->cirugias= $_REQUEST['cirugias'];
        $datos->antecedentes= $_REQUEST['antecedentes'];
        $datos->enfermedades= $_REQUEST['enfermedades'];
        $datos->vacunas= $_REQUEST['vacunas'];
        
        

        $datos->num_expediente > 0 
            ? $this->model->Actualizar($datos)
            : $this->model->Registrar($datos);
        
        header('Location: indexExpediente.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['num_expediente']);
        header('Location: indexExpediente.php');
    }

    public function Mostrar(){

        $datos = new Expediente();

       $datos->num_expediente= $_REQUEST['num_expediente'];
        $datos->id_paciente=$_REQUEST['id_paciente'];
        $datos->diagnostico= $_REQUEST['diagnostico'];
        $datos->medicamento= $_REQUEST['medicamento'];
        $datos->id_medico= $_REQUEST['id_medico'];
        $datos->peso= $_REQUEST['peso'];
        $datos->altura= $_REQUEST['altura'];
        $datos->cirugias= $_REQUEST['cirugias'];
        $datos->antecedentes= $_REQUEST['antecedentes'];
        $datos->enfermedades= $_REQUEST['enfermedades'];
        $datos->vacunas= $_REQUEST['vacunas'];
        

    
   $datos->num_expediente > 0 
            ? $this->model->ListarEx($datos)
            : $this->model->Registrar($datos);
        
        
        header('Location: indexExpediente.php');
    }
}