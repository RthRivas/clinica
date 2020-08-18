
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<div class="content">

  	<div class="col-12">
		<center><h1>Expedientes</h1>
		<a href="?c=Expediente&a=Crud"><span class="icon-Nuevo" ></span>Agregar Expediente 💾</a></center>
		<br>
		<div class="table-responsive">	
			
			<table class="table table-bordered">
        
				<thead class="thead-dark">
					<tr>
						<th>EXPEDIENTE</th>
						<th>PACIENTE</th>
						<th>PESO</th>
						<th>ALTURA</th> 
						<th>MEDICO</th> 
            <th>OPCIONES</th> 
            <th>DETALLE</th> 
            
					</tr>
				</thead>
<?php foreach($this->model->ListarE() as $r): ?>
				<tbody>
	
				<TR>
            
					<TD><?php echo $r->num_expediente;?></TD>
					<TD><?php echo $r->id_paciente;?></TD>
					<TD><?php echo $r->peso;?></TD>
					<TD><?php echo $r->altura;?></TD>
					<TD><?php echo $r->id_medico;?></TD>

					<TD><a class="btn btn-warning btn-sm" href="?c=Expediente&a=Crud&num_expediente=<?php echo $r->num_expediente; ?>">Editar 📝 </a><br>
						<a class="btn btn-danger btn-sm" href="?c=Expediente&a=Eliminar&num_expediente=<?php echo $r->num_expediente; ?>">Eliminar 🗑️</a>
					</TD>
					<TD><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCart">Ver Expediente</button></TD>

				</TR>	 
<?php endforeach; ?>	  
    </tbody>
</table> 

<!-- Modal: Informacion de expediente -->
<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><?php echo $r->id_paciente;?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">

        <table class="table table-hover">
          <thead>
            <th>DIAGNOSTICO</th>
            <th>MEDICAMENTO</th>
          </thead>
          <tbody>
          <td><?php echo $r->diagnostico;?></td>
           <td><?php echo $r->medicamento;?></td>
          </tbody>

           <thead>
            <th>PESO</th>
            <th>ALTURA</th>
          </thead>
          <tbody>
          <td><?php echo $r->peso;?></td>
           <td><?php echo $r->altura;?></td>
          </tbody>

          <thead>
            <th>CIRUGIAS</th>
            <th>ANTECEDENTESL</th>
          </thead>
          <tbody>
          <td><?php echo $r->cirugias;?></td>
           <td><?php echo $r->antecedentes;?></td>
          </tbody>

           <thead>
            <th>ENFERMEDADES</th>
            <th>VACUNAS</th>
          </thead>
          <tbody>
          <td><?php echo $r->enfermedades;?></td>
           <td><?php echo $r->vacunas;?></td>
          </tbody>

          <thead>
            <th>MEDICO</th>
          </thead>
          <tbody>
          <td><?php echo $r->id_medico;?></td>
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
<html>



