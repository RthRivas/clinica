
<?php
 include "welcomeadmin.php";
?>


<body>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                       <a>Registro de Medicos</button></a>
                    </div>
                    <a href="indexMedico.php"><button type="button" class="btn btn-secondary">VOLVER</button></a>
                </div>
            </div>
  </div>

 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Registrar medico </strong>
                            </div>
                            <div class="card-body">



			<form action="?c=Medico&a=Guardar" method="POST">

				<input type="hidden" name="id_medico" value="<?php echo $datos->id_medico; ?>" />

				<div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="Nombre" id="nombre_medico" name="nombre_medico" value="<?php echo $datos->nombre_medico; ?>"class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>
                <div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="JVPM" id="JVPM" name="JVPM" value="<?php echo $datos->JVPM; ?>"class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>
               
                   <div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="Telefono" id="telefono" name="telefono" value="<?php echo $datos->telefono; ?>"class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

                <div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="Direccion" id="direccion" name="direccion" value="<?php echo $datos->direccion; ?>"class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>
                 <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Especialidad</label></div>
                            <div class="col-12 col-md-9">
                                        <select class="form-control" name="id_especialidad" id="id_especialidad">
								<?php foreach($this->model->ListarEsp() as $r): ?>	
								  <option value="<?php echo $r->id_especialidad;?>"><?php echo $r->nombre_esp;?></option>
								  <?php endforeach; ?>
								</select>
                            </div>
                   </div>

                    <div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="Estado" id="estado" name="estado" value="<?php echo $datos->estado; ?>"class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>
        
                  <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Usuario Asignado</label></div>
                            <div class="col-12 col-md-9">
                                        <select class="form-control" name="Userid" id="Userid">
                                <?php foreach($this->model->ListarUsuarios() as $r): ?>  
                                  <option value="<?php echo $r->Userid;?>"><?php echo $r->username;?></option>
                                  <?php endforeach; ?>
                                </select>
                            </div>
                   </div>



                <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#scrollmodal">
                            Crear usuario
                        </button>



	<div class="form-actions form-group">
                    <button type="submit" name="btn_register" class="btn btn-primary btn-sm">Guardar</button>
                </div> 
 </form>  
       </div>
                        </div>
                    </div>
 </div>
  </div>
   </div>


                    <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="scrollmodalLabel">Scrolling Long Content Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <?php
                                 include "registroempleados.php";
                                        ?>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>

     <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

   
</body>
</html>
