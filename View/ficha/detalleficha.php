<?php
 include "welcomeadmin.php";

?>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                      PACIENTES
                    </div>
                    <a href="Index_Ficha.php"><button type="button" class="btn btn-secondary">VOLVER</button></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="?c=Ficha&a=Crud"><span class="icon-Nuevo" ></span>Crear Ficha Medica 💾</a></center></li>

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
                                <strong class="card-title"><?php echo $datos->nombre_paciente;?></strong>
                            </div>
                            <div class="card-body">											
											

         <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
          <thead>
            <th>DUI</th>
            <th>FECHA DE NACIMIENTO</th>
          </thead>
          <tbody>
          <td><?php echo $datos->Dui_paciente;?></td>
           <td><?php echo $datos->fecha_nacimiento;?></td>
          </tbody>

           <thead>
            <th>EDAD</th>
            <th>GENERO</th>
          </thead>
          <tbody>
          <td><?php echo $datos->edad;?></td>
           <td><?php echo $datos->genero;?></td>
          </tbody>

          <thead>
            <th>TELEFONO</th>
            <th>EMAIL</th>
          </thead>
          <tbody>
          <td><?php echo $datos->telefono;?></td>
           <td><?php echo $datos->email;?></td>
          </tbody>

           <thead>
            <th>RESPONSABLE</th>
            <th>DIRECCION</th>
          </thead>
          <tbody>
          <td><?php echo $datos->id_responsable;?> </td>

           <td><?php echo $datos->direccion;?></td>
          </tbody>

          <thead>
            <th>DEPARTAMENTO</th>
            <th>MUNICIPIO</th>
          </thead>
          <tbody>
          <td><?php echo $datos->id_departamento;?></td>
           <td><?php echo $datos->id_municipio;?></td>
          </tbody>

          <thead>
            <th>ALERGIA</th>
            <th>TIPO DE SANGRE</th>
          </thead>
          <tbody>
          <td><?php echo $datos->alergia;?></td>
           <td><?php echo $datos->grupo_sanguineo;?></td>
          </tbody>
        </table>

 </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
