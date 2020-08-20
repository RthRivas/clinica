<?php
 include "welcomeadmin.php";

?>

<body>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                      PERSONAL
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="?c=Citas&a=Crud"><span class="icon-Nuevo" ></span>Crear Cita 💾</a></center></li>

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
                                <strong class="card-title">Registros</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
											<th>Medico</th>
											<th>Enfermera</th>
											<th>Paciente</th>
											<th>Hecha</th>
											<th>Hora</th>
											<th>Opciones</th> 
                                        </tr>
                                    </thead>
                                    <?php foreach($this->model->ListarCitas() as $datos): ?>
                                    <tbody>
                                        <tr>
                                           <td><?php echo $datos->id ?></td>
											<td><?php echo $datos->Medico ?></td>
											<td><?php echo $datos->Enfermera ?></td>
											<td><?php echo $datos->Paciente ?></td>
											<td><?php echo $datos->fecha ?></td>
											<td><?php echo $datos->hora ?></td>
											<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $datos->id?>">Editar 📝</a>
											<a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $datos->id?>">Eliminar 🗑️</a></td>

                                        </TR>    
                                    <?php endforeach; ?>      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
