<?php
 include "welcomeadmin.php";
?>

<body>
   
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                       <a>Registro de Recepcionista</button></a>
                    </div>
                    <a href="indexRecepcionista.php"><button type="button" class="btn btn-secondary">VOLVER</button></a>
                </div>
            </div>
  </div>

 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Crear recepcionista </strong>
                            </div>
                            <div class="card-body">

			<form action="?c=Enfermera&a=Guardar" method="POST">

				<input type="hidden" name="id_enfermera" value="<?php echo $datos->id_enfermera; ?>" />

				<div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="Nombre" id="nombre_enfermera" name="nombre_enfermera" value="<?php echo $datos->nombre_enfermera; ?>"class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>
                <div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="telefono" id="telefono" name="telefono" value="<?php echo $datos->telefono; ?>"class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>
                <div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="Direccion" id="direccion" name="direccion" value="<?php echo $datos->direccion; ?>"class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

                <div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="Turno" id="turno" name="turno" value="<?php echo $datos->turno; ?>"class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

            				 <div class="form-actions form-group">
                    <button type="submit" name="btn_register" class="btn btn-primary btn-sm">Guardar</button>
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
