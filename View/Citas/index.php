<?php
 include "welcomeadmin.php";

?>

<main role="main" class="container">
<div class="row">
<!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->
	
	<div class="col-12">
		<h1>Citas Generadas</h1>
		<a class="btn btn-danger" href="<?php echo "eliminar.php";?>">Crear nueva cita 💾</a>
		<br>
		<div class="table-responsive">	
			
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Medico</th>
						<th>Enfermera</th>
						<th>Paciente</th>
						<th>Hecha</th>
						<th>Hora</th>
						<th>Opciones</th> 
					</tr>
				</thead>
				<tbody>

					<!--
					Atención aquí, sólo esto cambiará
					Pd: no ignores las llaves de inicio y cierre {}
					
					-->
					<?php foreach($this->model->ListarCitas()  as $datos){ ?>
						<tr>
							<td><?php echo $datos->id ?></td>
							<td><?php echo $datos->Medico ?></td>
							<td><?php echo $datos->Enfermera ?></td>
							<td><?php echo $datos->Paciente ?></td>
							<td><?php echo $datos->fecha ?></td>
							<td><?php echo $datos->hora ?></td>
							<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $datos->id?>">Editar 📝</a>
							<a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $datos->id?>">Eliminar 🗑️</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</main>
