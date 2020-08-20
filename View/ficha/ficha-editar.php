<?php
 include "welcomeadmin.php";

?>

<body>
	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		
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
			<center><h2>Crear Ficha</h2></center>
					
			<form class="form-horizontal" action="?c=Ficha&a=Guardar" method="POST">

				<input type="hidden" name="id_paciente" value="<?php echo $datos->id_paciente; ?>" />

				<div class="form-group">
					<span class="col-sm-3 control-label">Dui de Paciente *</span>
					<div class="col-sm-6">
					<input class="form-control" type="text" name="Dui_paciente" placeholder="DUI" value="<?php echo $datos->Dui_paciente; ?>">
				</div>	
				</div>

				<div class="form-group">
					<span class="col-sm-3 control-label">Nombre *</span>
					<div class="col-sm-6">
					<input class="form-control" type="text" name="nombre_paciente" placeholder="Nombre"  id="nombre_paciente" value="<?php echo $datos->nombre_paciente; ?>">
				</div>	
				</div>

				<div class="form-group">
					<span class="col-sm-3 control-label">Fecha de Nacimiento</span>
					<div class="col-sm-6">
					<input class="form-control" type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento"  id="fecha_nacimiento" value="<?php echo $datos->fecha_nacimiento; ?>">
				</div>
				</div>

				<div class="form-group">
					<span class="col-sm-3 control-label">Edad *</span>
					<div class="col-sm-6">
					<input class="form-control" type="text" name="edad" placeholder="Edad" id="edad" value="<?php echo $datos->edad; ?>">
				</div>
				</div>

				
				<div class="form-group">
					<span class="col-sm-3 control-label">Genero *</span>
					 <div class="col-sm-6">
						<input class="form-control" placeholder="Genero" type="text" name="genero" 
         				list="genero" value="<?php echo $datos->genero; ?>">
                    <datalist id="genero">
                         <option value="Femenino">
                         <option value="Masculino">
                    </datalist>
                    </div>
				</div>


				<div class="form-group">
					<span class="col-sm-3 control-label">Telefono *</span>
					<div class="col-sm-6">
					<input class="form-control" type="text" name="telefono" placeholder="Telefono" id="telefono" value="<?php echo $datos->telefono; ?>">
				</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label" for="Departamentos">Departamentos</label>
					<div class="col-sm-6">
								<select class="form-control" name="id_departamento" id="id_departamento">
								<?php foreach($this->model->ListarDepa() as $r): ?>	
								  <option value="<?php echo $r->id_departamento;?>"><?php echo $r->nombre_dep;?></option>
								  <?php endforeach; ?>
								</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label" for="Municipios">Municipios</label>
					<div class="col-sm-6">
								<select class="form-control" name="id_municipio" id="id_municipio">
								<?php foreach($this->model->ListarMunicipio() as $r): ?>	
								  <option value="<?php echo $r->id_municipio;?>"><?php echo $r->nombre_mun;?></option>
								  <?php endforeach; ?>
								</select>
					</div>
				</div>

				<div class="form-group">
					<span class="col-sm-3 control-label">Direccion *</span>
					<div class="col-sm-6">
					<input class="form-control"  type="text" name="direccion" placeholder="Direccion" id="direccion" value="<?php echo $datos->direccion; ?>">
				</div>
				</div>

				<div class="form-group">
					<span class="col-sm-3 control-label">Email *</span>
					<div class="col-sm-6">
					<input class="form-control"  type="text" name="email" placeholder="Email" id="email" value="<?php echo $datos->email; ?>">
				</div>
				</div>


				<div class="form-group">
					<span class="col-sm-3 control-label">Responsable</span>
					<div class="col-sm-6">
					<input class="form-control" name="id_responsable" placeholder="Responsable" id="id_responsable" value="<?php echo $datos->id_responsable; ?>">
				</div>
				</div>


				<div class="form-group">
					<span class="col-sm-3 control-label">Alergia</span>
					<div class="col-sm-6">
					<input class="form-control" name="alergia" placeholder="Alergia" id="alergia" value="<?php echo $datos->alergia; ?>">
				</div>
				</div>

				<div class="form-group">
					<span class="col-sm-3 control-label">Grupo Sanguineo</span>
					<div class="col-sm-6">
					<input class="form-control" type="text" name="grupo_sanguineo" placeholder="Grupo sanguineo" id="grupo_sanguineo" value="<?php echo $datos->grupo_sanguineo; ?>">
				</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label" for="Cargos">Cargo</label>
					<div class="col-sm-6">
								<select class="form-control" name="id_cargo" id="id_cargo">
								<?php foreach($this->model->ListarCargo() as $r): ?>	
								  <option value="<?php echo $r->id_cargo;?>"><?php echo $r->nombre_cargo;?></option>
								  <?php endforeach; ?>
								</select>
				</div>
				</div>

				<div class="form-group">
					<span class="col-sm-3 control-label">Estado</span>
					<div class="col-sm-6">
					<input class="form-control" name="estado" placeholder="estado" id="estado" value="<?php echo $datos->estado; ?>">
				</div>
				</div>
				

				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_register" class="btn btn-primary " value="Guardar Ficha">
				</div>
				</div>

			</form>
		</div>
	</div>


</body>
</html>
