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
                            <li><a href="?c=Recepcionista&a=Crud"><span class="icon-Nuevo" ></span>Crear Recepcionista 💾</a></center></li>

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
                                            <th>TURNO</th>
                                            <th>TELEFONO</th>
                                            <th>DIRECCION</th>
                                            <th>OPCIONES</th>     
                                        </tr>
                                    </thead>
                                   <?php foreach($this->model->ListarRecepcionista() as $r): ?>

                                    <tbody>
                                        <tr>
                                           <TD><?php echo $r->id_recepcionista;?></TD>
                                            <TD><?php echo $r->nombre_recepcionista;?></TD>
                                            <TD><?php echo $r->turno;?></TD>
                                            <TD><?php echo $r->telefono;?></TD>
                                            <TD><?php echo $r->direccion;?></TD>                                       

                                            <TD><a class="btn btn-warning btn-sm" href="?c=Recepcionista&a=Crud&id_recepcionista=<?php echo $r->id_recepcionista; ?>">Editar 📝 </a>
                                                <a class="btn btn-danger btn-sm" href="?c=Recepcionista&a=Eliminar&id_recepcionista=<?php echo $r->id_recepcionista; ?>">Eliminar 🗑️</a>
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
