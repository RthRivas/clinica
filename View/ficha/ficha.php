

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<div class="content">

  	<div class="col-12">
		<center><h1>Control de Pacientes</h1>
		<a href="?c=Ficha&a=Crud"><span class="icon-Nuevo" ></span>Crear Ficha 💾</a></center>
		<br>
		<div class="table-responsive">	
			
			<table class="table table-bordered">
        
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>DUI</th>
						<th>NOMBRE</th>
						<th>TELEFONO</th> 
						<th>DIRECCION</th> 
						<th>ESTADO</th> 
						<th>OPCIONES</th> 
						<th>DETALLES</th> 
						
					</tr>
				</thead>
<?php foreach($this->model->ListarFicha() as $r): ?>
				<tbody>
	
				<TR>
            
					<TD><?php echo $r->id_paciente;?></TD>
					<TD><?php echo $r->Dui_paciente;?></TD>
					<TD><?php echo $r->nombre_paciente;?></TD>
					<TD><?php echo $r->telefono;?></TD>
					<TD><?php echo $r->direccion;?></TD>
					<TD><?php echo $r->estado;?></TD>
					<TD><a class="btn btn-warning btn-sm" href="?c=Ficha&a=Crud&id_paciente=<?php echo $r->id_paciente; ?>">Editar 📝 </a><br>
						<a class="btn btn-danger btn-sm" href="?c=Ficha&a=Eliminar&id_paciente=<?php echo $r->id_paciente; ?>">Eliminar 🗑️</a>
					</TD>
					<TD><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCart">Ver Paciente</button></TD>

				</TR>	 
<?php endforeach; ?>	  
    </tbody>
</table> 

<!-- Modal: Informacion de Usuario -->

<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><?php echo $r->nombre_paciente;?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">

        <table class="table table-hover">
          <thead>
            <th>DUI</th>
            <th>FECHA DE NACIMIENTO</th>
          </thead>
          <tbody>
          <td><?php echo $r->Dui_paciente;?></td>
           <td><?php echo $r->fecha_nacimiento;?></td>
          </tbody>

           <thead>
            <th>EDAD</th>
            <th>GENERO</th>
          </thead>
          <tbody>
          <td><?php echo $r->edad;?></td>
           <td><?php echo $r->genero;?></td>
          </tbody>

          <thead>
            <th>TELEFONO</th>
            <th>EMAIL</th>
          </thead>
          <tbody>
          <td><?php echo $r->telefono;?></td>
           <td><?php echo $r->email;?></td>
          </tbody>

           <thead>
            <th>RESPONSABLE</th>
            <th>DIRECCION</th>
          </thead>
          <tbody>
          <td><?php echo $r->id_responsable;?> <a href="?c=Responsable&a=Crud"><span class="icon-Nuevo" ></span>Agregar Responsable</a></td>

           <td><?php echo $r->direccion;?></td>
          </tbody>

          <thead>
            <th>DEPARTAMENTO</th>
            <th>MUNICIPIO</th>
          </thead>
          <tbody>
          <td><?php echo $r->id_departamento;?></td>
           <td><?php echo $r->id_municipio;?></td>
          </tbody>

          <thead>
            <th>ALERGIA</th>
            <th>TIPO DE SANGRE</th>
          </thead>
          <tbody>
          <td><?php echo $r->alergia;?></td>
           <td><?php echo $r->grupo_sanguineo;?></td>
          </tbody>
        </table>

      </div>

      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</body>
