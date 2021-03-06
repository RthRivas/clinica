<?php
 include "welcomeadmin.php";

?>

<body>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                      PACIENTES
                    </div>
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
                                <strong class="card-title">Registros</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>DUI</th>
                                            <th>NOMBRE</th>
                                            <th>TELEFONO</th>
                                            <th>OPCIONES</th>
                                            <th>DETALLES</th>
                                        </tr>
                                    </thead>

                                    <?php foreach($this->model->ListarFicha() as $r): ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $r->id_paciente;?></td>
                                            <td><?php echo $r->Dui_paciente;?></td>
                                            <td><?php echo $r->nombre_paciente;?></td>
                                            <td><?php echo $r->telefono;?></td>
                                            <td><a class="btn btn-warning btn-sm" href="?c=Ficha&a=Crud&id_paciente=<?php echo $r->id_paciente; ?>">Editar 📝 </a>
            <a class="btn btn-danger btn-sm" href="?c=Ficha&a=Eliminar&id_paciente=<?php echo $r->id_paciente; ?>">Eliminar 🗑️</a></td>

                                        <td><a class="btn btn-success" href="?c=Ficha&a=MostrarD&id_paciente=<?php echo $r->id_paciente; ?>">Ver Ficha</a></td>

                                        </tr>
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
