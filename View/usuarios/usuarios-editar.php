<?php
 include "welcomeadmin.php";
?>

<body>
   
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                       <a>Registro de Usuarios</button></a>
                    </div>
                    <a href="indexUsuarios.php"><button type="button" class="btn btn-secondary">VOLVER</button></a>
                </div>
            </div>
  </div>

 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Crear usuario</strong>
                            </div>
                            <div class="card-body">

			<form action="?c=Usuarios&a=Guardar" method="POST">

          <input type="hidden" name="Userid" value="<?php echo $datos->Userid; ?>" />
			

                  <div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="Nombre de usuario" id="fecha" name="username" value="<?php echo $datos->username; ?>"class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>

                    <div class="form-group">
                     <div class="input-group">
                                 <input type="text" placeholder="Email" id="email" name="email" value="<?php echo $datos->email; ?>"class="form-control">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     </div>
                </div>


                   <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Cargo</label></div>
                            <div class="col-12 col-md-9">
                                        <select name="id_cargo" id="id_cargo" class="form-control-sm form-control">
                                            <?php foreach($this->model->ListarCargos() as $r): ?>   
                                  <option value="<?php echo $r->id_cargo;?>"><?php echo $r->nombre_cargo;?></option>
                                  <?php endforeach; ?>
                                        </select>
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
