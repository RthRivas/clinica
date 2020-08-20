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
                            <li><a href="?c=Expediente&a=Crud"><span class="icon-Nuevo" ></span>Crear Expediente 💾</a></center></li>

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
                                            <th>EXPEDIENTE</th>
                                            <th>PACIENTE</th>
                                            <th>PESO</th>
                                            <th>ALTURA</th>
                                            <th>MEDICO</th>
                                            <th>OPCIONES</th>
                                            <th>DETALLES</th>
                                        </tr>
                                    </thead>

                                    <?php foreach($this->model->ListarE() as $r): ?>
                                    <tbody>
                                        <tr>
                                            <TD><?php echo $r->num_expediente;?></TD>
                                            <TD><?php echo $r->id_paciente;?></TD>
                                            <TD><?php echo $r->peso;?></TD>
                                            <TD><?php echo $r->altura;?></TD>
                                            <TD><?php echo $r->id_medico;?></TD>

                                            <TD><a class="btn btn-warning btn-sm" href="?c=Expediente&a=Crud&num_expediente=<?php echo $r->num_expediente; ?>">Editar 📝 </a>
                                                <a class="btn btn-danger btn-sm" href="?c=Expediente&a=Eliminar&num_expediente=<?php echo $r->num_expediente; ?>">Eliminar 🗑️</a>
                                            </TD>
                                            <TD><button type="button" class="btn btn-primary">Ver Expediente</button></TD>

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
</body>
<html>



