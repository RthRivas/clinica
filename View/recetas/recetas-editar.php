<?php
 include "welcomeadmin.php";
?>

<body>
   
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                       <a>Registro de Recetas</button></a>
                    </div>
                    <a href="indexRecetas.php"><button type="button" class="btn btn-secondary">VOLVER</button></a>
                </div>
            </div>
  </div>

 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Crear nueva receta</strong>
                            </div>
                            <div class="card-body">

      <form action="?c=Recetas&a=Guardar" method="POST">

        <input type="hidden" name="id_receta" value="<?php echo $datos->id_receta; ?>" />
            <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Paciente</label></div>
                            <div class="col-12 col-md-9">
                                        <select name="id_paciente" id="id_paciente" class="form-control-sm form-control">
                                            <?php foreach($this->model->ListarPaciente() as $r): ?>   
                                  <option value="<?php echo $r->id_paciente;?>"><?php echo $r->nombre_paciente;?></option>
                                  <?php endforeach; ?>
                                        </select>
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
                                 <input type="text" placeholder="Medicamento.." id="descripcion" name="descripcion" value="<?php echo $datos->descripcion; ?>"class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>
                 
                <div class="form-group">
                     <div class="input-group">
                                 <input type="date" placeholder="Fecha" id="fecha" name="fecha" value="<?php echo $datos->fecha; ?>"class="form-control">
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
