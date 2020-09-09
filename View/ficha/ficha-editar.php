
<?php
 include "welcomeadmin.php";
?>

<body>
    <?php
		if(isset($errorMsg))
		{
			foreach($errorMsg as $error)
			{
			?>
				<div class="alert alert-danger">
					<strong>WRONG ! <?php echo $error; ?></strong>
				</div>
            <?php
			}
		}
		if(isset($registerMsg))
		{
		?>
			<div class="alert alert-success">
				<strong><?php echo $registerMsg; ?></strong>
			</div>
        <?php
		}
		?>  

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                       <a>Ficha de Paciente</button></a>
                    </div>
                    <a href="Index_Ficha.php"><button type="button" class="btn btn-secondary">VOLVER</button></a>
                </div>
            </div>
  </div>

 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Crear Ficha</strong>
                            </div>
                            <div class="card-body">



			<form action="?c=Ficha&a=Guardar" method="POST">

				<input type="hidden" name="id_paciente" value="<?php echo $datos->id_paciente; ?>" />


				<div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="Dui" id="Dui_paciente" name="Dui_paciente" value="<?php echo $datos->Dui_paciente; ?>"class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

                <div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="Nombre" id="nombre_paciente" name="nombre_paciente" value="<?php echo $datos->nombre_paciente; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

                <div class="form-group">
                     <div class="input-group">
                            <div class="input-group-addon">Fecha de Nacimiento *</div>
                                 <input type="date" id="username3" name="fecha_nacimiento" value="<?php echo $datos->fecha_nacimiento; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

                <div class="form-group">
                     <div class="input-group">                
                                 <input type="text" placeholder="Edad" id="edad" name="edad" value="<?php echo $datos->edad; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

    
				<div class="row form-group">
					<span class="col-sm-3 control-label">Genero</span>
					 <div class="col-12 col-md-9">
						<input class="form-control" placeholder="Genero" type="text"  
         				list="genero" >
                    <datalist id="genero">
                         <option value="Femenino">
                         <option value="Masculino">
                    </datalist>
                    </div>
				</div>

				<div class="form-group">
                     <div class="input-group">
                                 <input type="text" id="telefono" placeholder="Telefono" name="telefono" value="<?php echo $datos->telefono; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

                   <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Departamento</label></div>
                            <div class="col-12 col-md-9">
                                        <select name="id_departamento" id="id_departamento" class="form-control-sm form-control">
                                        	<?php foreach($this->model->ListarDepa() as $r): ?>	
                                                <option value="<?php echo $r->id_departamento;?>"><?php echo $r->nombre_dep;?></option>
                                            <?php endforeach; ?>
                                        </select>
                            </div>
                   </div>

                 <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Municipio</label></div>
                            <div class="col-12 col-md-9">
                                        <select name="id_municipio" id="id_municipio" class="form-control-sm form-control">
                                        	<?php foreach($this->model->ListarMunicipio() as $r): ?>	
								  <option value="<?php echo $r->id_municipio;?>"><?php echo $r->nombre_mun;?></option>
								  <?php endforeach; ?>
                                        </select>
                            </div>
                   </div>


                <div class="form-group">
                     <div class="input-group">
                                 <input type="text" id="direccion" placeholder="direccion" name="direccion"  id="direccion" value="<?php echo $datos->direccion; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

                 <div class="form-group">
                     <div class="input-group">
                                 <input type="text" id="email" name="email" placeholder="Email" id="email" value="<?php echo $datos->email; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

                  <div class="form-group">
                     <div class="input-group">
                                 <input type="text" id="id_responsable" name="id_responsable" placeholder="Responsable" id="id_responsable" value="<?php echo $datos->id_responsable; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

                <div class="form-group">
                     <div class="input-group">
                                 <input type="text" name="alergia" placeholder="Alergia" id="alergia" value="<?php echo $datos->alergia; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

                <div class="form-group">
                     <div class="input-group">
                                 <input type="text" name="grupo_sanguineo" placeholder="Grupo sanguineo" id="grupo_sanguineo" value="<?php echo $datos->grupo_sanguineo; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

                <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Cargo</label></div>
                            <div class="col-12 col-md-9">
                                        <select name="id_cargo" id="id_cargo" class="form-control-sm form-control">
                                        	<?php foreach($this->model->ListarCargo() as $r): ?>	
								  <option value="<?php echo $r->id_cargo;?>"><?php echo $r->nombre_cargo;?></option>
								  <?php endforeach; ?>
                                        </select>
                            </div>
                   </div> 

                 <div class="form-group">
                     <div class="input-group">
                                 <input type="text" name="estado" placeholder="estado" id="estado" value="<?php echo $datos->estado; ?>" class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

                <div class="form-actions form-group">
                    <button type="submit"name="btn_register" class="btn btn-primary btn-sm">Guardar</button>
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
