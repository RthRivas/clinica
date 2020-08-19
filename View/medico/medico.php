<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<div class="content">

  	<div class="col-12">
		<center><h1>Medicos</h1>
		<a  href="?c=Medico&a=Crud"><span class="icon-Nuevo" ></span>Registrar Medico 💾</a></center>
		<br>
		<div class="table-responsive">	
			
			<table class="table table-bordered">
        
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>NOMBRE</th>
						<th>JVPM</th> 
						<th>ESPECIALIDAD</th> 
						<th>OPCIONES</th> 				
					</tr>
				</thead>
<?php foreach($this->model->ListarMedico() as $r): ?>
				<tbody>
	
				<TR>
            
					<TD><?php echo $r->id_medico;?></TD>
					<TD><?php echo $r->nombre_medico;?></TD>
					<TD><?php echo $r->JVPM;?></TD>
					<TD><?php echo $r->id_especialidad;?></TD>

					<TD><a class="btn btn-warning btn-sm" href="?c=Medico&a=Crud&id_medico=<?php echo $r->id_medico; ?>">Editar 📝 </a><br>
						<a class="btn btn-danger btn-sm" href="?c=Medico&a=Eliminar&id_medico=<?php echo $r->id_medico; ?>">Eliminar 🗑️</a>
					</TD>
				</TR>	 
<?php endforeach; ?>	  
    </tbody>
</table> 

