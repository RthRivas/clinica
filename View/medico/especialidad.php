
<?php
 include "welcomeadmin.php";
?>

<body>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                       <a>Agregar Especialidad</button></a>
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
   
</body>
</html>
