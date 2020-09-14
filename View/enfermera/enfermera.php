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
                            <li><a href="?c=Enfermera&a=Crud"><span class="icon-Nuevo" ></span>Crear Enfermera 💾</a></center></li>

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
                                            <th>TELEFONO</th>
                                            <th>DIRECCION</th>
                                            <th>TURNO</th>
                                            <th>OPCIONES</th>     
                                        </tr>
                                    </thead>
                                   <?php foreach($this->model->ListarEnfermera() as $r): ?>

                                    <tbody>
                                        <tr>
                                           <TD><?php echo $r->id_enfermera;?></TD>
                                            <TD><?php echo $r->nombre_enfermera;?></TD>
                                            <TD><?php echo $r->telefono;?></TD>
                                            <TD><?php echo $r->direccion;?></TD>
                                            <TD><?php echo $r->turno;?></TD>
                                            
                                           <TD><a class="btn btn-warning btn-sm" href="?c=Enfermera&a=Crud&id_enfermera=<?php echo $r->id_enfermera; ?>">Editar 📝 </a>
                                                <a class="btn btn-danger btn-sm" href="?c=Enfermera&a=Eliminar&id_enfermera=<?php echo $r->id_enfermera; ?>">Eliminar 🗑️</a>
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

    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>

    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
