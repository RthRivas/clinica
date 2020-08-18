<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Expediente</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

</head>
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
			<center><h2>Expendiente</h2></center>
					
			<form class="form-horizontal" action="?c=Expediente&a=Guardar" method="POST">

				<input type="hidden" name="num_expediente" value="<?php echo $datos->num_expediente; ?>" />

				<div class="form-group">
					<span class="col-sm-3 control-label">Dui de Paciente *</span>
					<div class="col-sm-6">
					<input class="form-control" type="text" name="id_paciente" placeholder="DUI" value="<?php echo $datos->id_paciente; ?>">
				</div>	

				</div>

				<div class="form-group">
					<span class="col-sm-3 control-label">Diagnostico *</span>
					<div class="col-sm-6">
					<input class="form-control" type="text" name="diagnostico" placeholder="Diagnostico"  id="diagnostico" value="<?php echo $datos->diagnostico; ?>">
				</div>	
				</div>

				<div class="form-group">
					<span class="col-sm-3 control-label">Medicamento</span>
					<div class="col-sm-6">
					<input class="form-control" type="text" name="medicamento" id="medicamento" value="<?php echo $datos->medicamento; ?>">
				</div>
				</div>

				<div class="form-group" >
					<label class="col-sm-3 control-label" for="Medico">Medico</label>
					<div class="col-sm-6">
								<select class="form-control" name="id_medico" id="id_medico">
								<?php foreach($this->model->ListarMedico() as $r): ?>	
								  <option value="<?php echo $r->id_medico;?>"><?php echo $r->nombre_medico;?></option>
								  <?php endforeach; ?>
								</select>
					</div>
				</div>


				<div class="form-group">
					<span class="col-sm-3 control-label">Peso</span>
					<div class="col-sm-6">
					<input class="form-control"  type="text" name="peso" placeholder="Peso" id="peso" value="<?php echo $datos->peso; ?>">
				</div>
				</div>

				<div class="form-group">
					<span class="col-sm-3 control-label">Altura</span>
					<div class="col-sm-6">
					<input class="form-control"  type="text" name="altura" placeholder="Altura" id="altura" value="<?php echo $datos->altura; ?>">
				</div>
				</div>


				<div class="form-group">
					<span class="col-sm-3 control-label">Cirugias</span>
					<div class="col-sm-6">
					<input class="form-control" name="cirugias" id="cirugias" value="<?php echo $datos->cirugias; ?>">
				</div>
				</div>


				<div class="form-group">
					<span class="col-sm-3 control-label">Antecedentes</span>
					<div class="col-sm-6">
					<input class="form-control" name="antecedentes" id="antecedentes" value="<?php echo $datos->antecedentes; ?>">
				</div>
				</div>

				<div class="form-group">
					<span class="col-sm-3 control-label">Enfermedades</span>
					<div class="col-sm-6">
					<input class="form-control" type="text" name="enfermedades" id="enfermedades" value="<?php echo $datos->enfermedades; ?>">
				</div>
				</div>
				<div class="form-group">
					<span class="col-sm-3 control-label">Vacunas</span>
					<div class="col-sm-6">
					<input class="form-control" name="vacunas" id="vacunas" value="<?php echo $datos->vacunas; ?>">
				</div>
				</div>
				

				</div>

				

				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_register" class="btn btn-primary " value="Guardar">
				</div>
				</div>

			</form>
		</div>
	</div>

