<?php
 include "welcomeadmin.php";

?>

<body>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                      ---
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="registroempleados.php"><span class="icon-Nuevo" ></span>Crear usuario 💾</a></center></li>

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
											<th>Usuario</th>
											<th>Cargo</th>
											<th>Opciones</th> 
                                        </tr>
                                    </thead>
                                    <?php foreach($this->model->ListarUsuarios() as $r): ?>
                                    <tbody>
                                        <tr>
                                             <TD><?php echo $r->Userid;?></TD>
                                          <TD><?php echo $r->username;?></TD>
                                            <TD><?php echo $r->id_cargo;?></TD>

                                            
                                           <TD><a class="btn btn-warning btn-sm" href="?c=Usuarios&a=Crud&Userid=<?php echo $r->Userid; ?>">Editar 📝 </a>
                                                <a class="btn btn-danger btn-sm" href="?c=Usuarios&a=Eliminar&Userid=<?php echo $r->Userid; ?>">Eliminar 🗑️</a>
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
