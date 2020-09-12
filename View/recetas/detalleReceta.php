<?php
 include "welcomeadmin.php";

?>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                     Recetas
                    </div>
                    <a href="indexRecetas.php"><button type="button" class="btn btn-secondary">VOLVER</button></a>
                </div>
            </div>
            
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                           <li><a href="?c=Recetas&a=Crud"><span class="icon-Nuevo" ></span>Crear nueva receta 💾</a></center></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
<div class="col-lg-6">

                <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><?php echo $datos->id_receta;?></strong>
                            </div>
                            <div class="card-body">

         <table class="table">


          <thead>
            <th>Medico: </th>
            <th>Fecha: </th>
          </thead>
          <tbody>
          <td><?php echo $datos->id_medico;?></td>
          <td><?php echo $datos->fecha;?></td>
          </tbody>

           <thead>
           <th>Paciente: </th>
          </thead>
          <tbody>
          <td><?php echo $datos->id_paciente;?></td>
          </tbody>

          <thead>
            <th>Medicamentos: </th>
          </thead>
          <tbody>
          <td><?php echo $datos->descripcion;?></td>
          </tbody>

        </table>
                            </div>
                        </div>
                    </div>
 </div>
  </div>
   </div>
   