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
                            <li><a href="?c=Medico&a=Crud"><span class="icon-Nuevo" ></span>Crear Medico 💾</a></center></li>

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
                                            <th>NOMBRE</th>
                                            <th>JVPM</th> 
                                            <th>ESPECIALIDAD</th>
                                            <th>TELEFONO</th>
                                            <th>DIRECCION</th>
                                            <th>ESTADO</th>
                                            <th>OPCIONES</th>   
                                        </tr>
                                    </thead>
                                    <?php foreach($this->model->ListarMedico() as $r): ?>
                                    <tbody>
                                        <tr>
                                           <TD><?php echo $r->id_medico;?></TD>
                                            <TD><?php echo $r->nombre_medico;?></TD>
                                            <TD><?php echo $r->JVPM;?></TD>
                                            <TD><?php echo $r->id_especialidad;?></TD>
                                            <TD><?php echo $r->telefono;?></TD>
                                            <TD><?php echo $r->direccion;?></TD>
                                            <TD><?php echo $r->estado;?></TD>                                     
                                            
                                            <TD><a class="btn btn-warning btn-sm" href="?c=Medico&a=Crud&id_medico=<?php echo $r->id_medico; ?>">Editar 📝 </a>
                                                <a class="btn btn-danger btn-sm" href="?c=Medico&a=Eliminar&id_medico=<?php echo $r->id_medico; ?>">Eliminar 🗑️</a>
                                            </TD>

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
