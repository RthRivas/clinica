<?php
include 'model/Ficha.php';

class FichaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Ficha();
    }
    
    public function Index(){
       
        require_once 'view/ficha/ficha.php';

    }
    

    public function Crud(){
        $datos = new Ficha();
        
        if(isset($_REQUEST['id_paciente'])){
            $datos = $this->model->Obtener($_REQUEST['id_paciente']);
        }
        
       
        require_once 'view/ficha/ficha-editar.php';
       
    }

    public function MostrarD(){
        $datos = new Ficha();
        
        if(isset($_REQUEST['id_paciente'])){
            $datos = $this->model->Obtener($_REQUEST['id_paciente']);
        }
               
        require_once 'view/ficha/detalleficha.php';
    }
    
    
    public function Guardar(){

        $datos = new Ficha();

        $datos->id_paciente= $_REQUEST['id_paciente'];
		$datos->Dui_paciente = $_REQUEST['Dui_paciente']; 
        $datos->nombre_paciente = $_REQUEST['nombre_paciente'];
        $datos->fecha_nacimiento = $_REQUEST['fecha_nacimiento'];
        $datos->edad = $_REQUEST['edad'];
        $datos->genero = $_REQUEST['genero'];
        $datos->telefono = $_REQUEST['telefono'];
        $datos->id_departamento = $_REQUEST['id_departamento'];
        $datos->id_municipio = $_REQUEST['id_municipio'];
        $datos->direccion = $_REQUEST['direccion'];
        $datos->email = $_REQUEST['email'];
        $datos->id_responsable = $_REQUEST['id_responsable'];
        $datos->alergia = $_REQUEST['alergia'];
        $datos->grupo_sanguineo = $_REQUEST['grupo_sanguineo'];
        $datos->id_cargo= $_REQUEST['id_cargo'];
        $datos->estado= $_REQUEST['estado'];

       
   

   $datos->id_paciente > 0 
            ? $this->model->Actualizar($datos)
            : $this->model->Registrar($datos);
        
        
        header('Location: Index_Ficha.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_paciente']);
        header('Location: Index_Ficha.php');
    }

       

}