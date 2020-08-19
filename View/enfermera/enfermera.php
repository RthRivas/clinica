
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<div class="content">

  	<div class="col-12">
		<center><h1>Enfermeras</h1>
		<a href="?c=Enfermera&a=Crud"><span class="icon-Nuevo" ></span>Registrar Enfermera 💾</a></center>
		<br>
		<div class="table-responsive">	
			
			<table class="table table-bordered">
        
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>NOMBRE</th>
						<th>OPCIONES</th> 				
					</tr>
				</thead>
<?php foreach($this->model->ListarEnfermera() as $r): ?>
				<tbody>
	
				<TR>
					<TD><?php echo $r->id_enfermera;?></TD>
					<TD><?php echo $r->nombre_enfermera;?></TD>

					<TD><a class="btn btn-warning btn-sm" href="?c=Enfermera&a=Crud&id_enfermera=<?php echo $r->id_enfermera; ?>">Editar 📝 </a><br>
						<a class="btn btn-danger btn-sm" href="?c=Enfermera&a=Eliminar&id_enfermera=<?php echo $r->id_enfermera; ?>">Eliminar 🗑️</a>
					</TD>
				</TR>	 
<?php endforeach; ?>	  
    </tbody>
</table> 

