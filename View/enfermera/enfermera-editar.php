<?php
 include "welcomeadmin.php";

?>

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
			<center><h2>Agregar Enfermera</h2></center>
			<form class="form-horizontal" action="?c=Enfermera&a=Guardar" method="POST">

				<input type="hidden" name="id_enfermera" value="<?php echo $datos->id_enfermera; ?>" />

				<div class="form-group">
					<span class="col-sm-3 control-label">Nombre *</span>
					<div class="col-sm-6">
					<input class="form-control" type="text" name="nombre_enfermera"value="<?php echo $datos->nombre_enfermera; ?>">
				</div>	
				</div>

				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_register" class="btn btn-primary " value="Guardar">
				</div>
				</div>

			</form>

</body>
	