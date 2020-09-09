<?php
 include "welcomeadmin.php";

?>

<body>
		 
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                       <a>Expedientes</button></a>
                    </div>
                    <a href="indexExpediente.php"><button type="button" class="btn btn-secondary">VOLVER</button></a>
                </div>
            </div>
  </div>

 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Crear Expediente</strong>
                            </div>
                            <div class="card-body">




			<form  action="?c=Expediente&a=Guardar" method="POST">

				<input type="hidden" name="num_expediente" value="<?php echo $datos->num_expediente; ?>" />

				<div class="form-group">
                     <div class="input-group">
                                 <input type="text" name="id_paciente" placeholder="DUI" value="<?php echo $datos->id_paciente; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div> 

               <div class="form-group">
                     <div class="input-group">
                                 <input type="text" name="diagnostico" placeholder="Diagnostico"  id="diagnostico" value="<?php echo $datos->diagnostico; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div> 

                <div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="Medicamento" name="medicamento" id="medicamento" value="<?php echo $datos->medicamento; ?>"class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div> 

                 <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Medico</label></div>
                            <div class="col-12 col-md-9">
                                        <select name="id_medico" id="id_medico" class="form-control-sm form-control">
                                        	<?php foreach($this->model->ListarMedico() as $r): ?>	
								  <option value="<?php echo $r->id_medico;?>"><?php echo $r->nombre_medico;?></option>
								  <?php endforeach; ?>
                                        </select>
                            </div>
                   </div>

                   <div class="form-group">
                     <div class="input-group">
                                 <input type="text"name="peso" placeholder="Peso" id="peso" value="<?php echo $datos->peso; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div> 

                <div class="form-group">
                     <div class="input-group">
                                 <input type="text" name="altura" placeholder="Altura" id="altura" value="<?php echo $datos->altura; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div> 

                <div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="Cirugias" name="cirugias" id="cirugias" value="<?php echo $datos->cirugias; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

                <div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="Antecedentes"  name="antecedentes" id="antecedentes" value="<?php echo $datos->antecedentes; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div> 

                  <div class="form-group">
                     <div class="input-group">
                                 <input type="text"  placeholder="Enfermedades" name="enfermedades" id="enfermedades" value="<?php echo $datos->enfermedades; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div> 

                <div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="Vacunas" name="vacunas" id="vacunas" value="<?php echo $datos->vacunas; ?>" class="form-control">
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
