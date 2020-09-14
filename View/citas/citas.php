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
											<th>Paciente</th>
											<th>Medico</th>
											<th>Enfermera</th>
											<th>Hecha</th>
											<th>Hora</th>
											<th>Opciones</th> 
                                        </tr>
                                    </thead>
                                    <?php foreach($this->model->ListarCitas() as $r): ?>
                                    <tbody>
                                        <tr>
                                             <TD><?php echo $r->id_cita;?></TD>
                                          <TD><?php echo $r->id_paciente;?></TD>
                                            <TD><?php echo $r->id_medico;?></TD>
                                            <TD><?php echo $r->id_enfermera;?></TD>
                                            <TD><?php echo $r->fecha;?></TD>
                                            <TD><?php echo $r->hora;?></TD>
                                            
                                           <TD><a class="btn btn-warning btn-sm" href="?c=Citas&a=Crud&id_cita=<?php echo $r->id_cita; ?>">Editar 📝 </a>
                                                <a class="btn btn-danger btn-sm" href="?c=Citas&a=Eliminar&id_cita=<?php echo $r->id_cita; ?>">Eliminar 🗑️</a>
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
