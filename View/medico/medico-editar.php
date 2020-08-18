
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Paciente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="Assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="?c=Medico&a=Guardar" method="POST" onSubmit="return validacion();">
				<span class="contact100-form-title">
					<h4>Registro de Medico</h4>
				</span>

				<input type="hidden" name="id_medico" value="<?php echo $datos->id_medico; ?>" />

				<div class="wrap-input100 validate-input bg1" data-validate="Ingresar nombre de Medico">
					<span class="label-input100">Nombre *</span>
					<input class="input100" type="text" name="nombre_medico" placeholder="Nombre" value="<?php echo $datos->nombre_medico; ?>">

				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Ingresar JVPM">
					<span class="label-input100">Nombre *</span>
					<input class="input100" type="text" name="JVPM" placeholder="JVPM"  id="JVPM" value="<?php echo $datos->JVPM; ?>">

				</div>


				
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "">
					<label for="Especialidad">Especialidad</label>
								<select name="id_especialidad" id="id_especialidad">
								<?php foreach($this->model->ListarEsp() as $r): ?>	
								  <option value="<?php echo $r->id_especialidad;?>"><?php echo $r->nombre_esp;?></option>
								  <?php endforeach; ?>
								</select>
				</div>


				
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "">
					<label for="Cargos">Cargo</label>
								<select name="id_cargo" id="id_cargo">
								<?php foreach($this->model->ListarCargo() as $r): ?>	
								  <option value="<?php echo $r->id_cargo;?>"><?php echo $r->nombre_cargo;?></option>
								  <?php endforeach; ?>
								</select>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							<span>
							Guardar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
						</span>
					</button>
				</div>
			</form>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
