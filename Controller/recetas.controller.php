<?php
include 'model/Recetas.php';

class RecetasController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Recetas();
    }
    
    public function Index(){
       
        require_once 'view/recetas/recetas.php';

    }
    

    public function Crud(){
        $datos = new Recetas();
        
        if(isset($_REQUEST['id_receta'])){
            $datos = $this->model->Obtener($_REQUEST['id_receta']);
        }
        
       
        require_once 'view/recetas/recetas-editar.php';
       
    }

    public function MostrarR(){
        $datos = new Recetas();
        
        if(isset($_REQUEST['id_receta'])){
            $datos = $this->model->Obtener($_REQUEST['id_receta']);
        }
               
        require_once 'view/recetas/detalleReceta.php';
    }
    
    
    public function Guardar(){

        $datos = new Recetas();

        $datos->id_receta= $_REQUEST['id_receta'];
        $datos->id_paciente = $_REQUEST['id_paciente'];
        $datos->id_medico = $_REQUEST['id_medico']; 
        $datos->descripcion = $_REQUEST['descripcion'];
        $datos->fecha = $_REQUEST['fecha'];       
   

   $datos->id_paciente > 0 
            ? $this->model->Actualizar($datos)
            : $this->model->Registrar($datos);
        
        
        header('Location: indexRecetas.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_receta']);
        header('Location: indexRecetas.php');
    }

       
     }