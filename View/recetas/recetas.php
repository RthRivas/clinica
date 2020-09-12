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
                            <li><a href="?c=Recetas&a=Crud"><span class="icon-Nuevo" ></span>Crear nueva receta 💾</a></center></li>

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
                                            <th># de receta</th>
											<th>Paciente</th>
											<th>Medico</th>
											<th>fecha</th>
											<th>Opciones</th> 
                                            <th>Detalle</th> 
                                        </tr>
                                    </thead>
                                    <?php foreach($this->model->ListarReceta() as $r): ?>
                                    <tbody>
                                        <tr>
                                             <TD><?php echo $r->id_receta;?></TD>
                                          <TD><?php echo $r->id_paciente;?></TD>
                                            <TD><?php echo $r->id_medico;?></TD>
                                            <TD><?php echo $r->fecha;?></TD>
                                            
                                           <TD><a class="btn btn-warning btn-sm" href="?c=Recetas&a=Crud&id_receta=<?php echo $r->id_receta; ?>">Editar 📝 </a>
                                                <a class="btn btn-danger btn-sm" href="?c=Recetas&a=Eliminar&id_receta=<?php echo $r->id_receta; ?>">Eliminar 🗑️</a>
                                            </TD>

                                            <td><a class="btn btn-success" href="?c=Recetas&a=MostrarR&id_receta=<?php echo $r->id_receta; ?>">Ver Receta</a></td>

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
