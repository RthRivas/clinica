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
			<center><h2>Ingresar nuevo medico</h2></center>
			<form class="form-horizontal" action="?c=Medico&a=Guardar" method="POST">

				<input type="hidden" name="id_medico" value="<?php echo $datos->id_medico; ?>" />

				<div class="form-group">
					<span class="col-sm-3 control-label">Nombre *</span>
					<div class="col-sm-6">
					<input class="form-control" type="text" name="nombre_medico"value="<?php echo $datos->nombre_medico; ?>">
				</div>	
				</div>

				<div class="form-group">
					<span class="col-sm-3 control-label">JVPM</span>
					<div class="col-sm-6">
					<input class="form-control"  type="text" name="JVPM" placeholder="JVPM"  id="JVPM" value="<?php echo $datos->JVPM; ?>">
				</div>
				</div>


				
				<div class="form-group">
				<label class="col-sm-3 control-label" for="Especialidad">Especialidad</label><div class="col-sm-6">
								<select class="form-control" name="id_especialidad" id="id_especialidad">
								<?php foreach($this->model->ListarEsp() as $r): ?>	
								  <option value="<?php echo $r->id_especialidad;?>"><?php echo $r->nombre_esp;?></option>
								  <?php endforeach; ?>
								</select>
						</div>
				</div>


				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_register" class="btn btn-primary " value="Guardar">
				</div>
				</div>

			</form>

</body>
	