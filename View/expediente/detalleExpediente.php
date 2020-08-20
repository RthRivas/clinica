<?php
 include "welcomeadmin.php";

?>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                      PACIENTES
                    </div>
                    <a href="indexExpediente.php"><button type="button" class="btn btn-secondary">VOLVER</button></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                           
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><?php echo $datos->id_paciente;?></strong>
                            </div>
                            <div class="card-body">											
											

         <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
          <thead>
            <th>DIAGNOSTICO</th>
            <th>MEDICAMENTO</th>
          </thead>
          <tbody>
          <td><?php echo $datos->diagnostico;?></td>
           <td><?php echo $datos->medicamento;?></td>
          </tbody>

           <thead>
            <th>PESO</th>
            <th>ALTURA</th>
          </thead>
          <tbody>
          <td><?php echo $datos->peso;?></td>
           <td><?php echo $datos->altura;?></td>
          </tbody>

          <thead>
            <th>CIRUGIAS</th>
            <th>ANTECEDENTESL</th>
          </thead>
          <tbody>
          <td><?php echo $datos->cirugias;?></td>
           <td><?php echo $datos->antecedentes;?></td>
          </tbody>

           <thead>
            <th>ENFERMEDADES</th>
            <th>VACUNAS</th>
          </thead>
          <tbody>
          <td><?php echo $datos->enfermedades;?></td>
           <td><?php echo $datos->vacunas;?></td>
          </tbody>

          <thead>
            <th>MEDICO</th>
          </thead>
          <tbody>
          <td><?php echo $datos->id_medico;?></td>
          </tbody>

        </table>



 </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
