<?php


require_once 'database.php';

if(isset($_REQUEST['btn_register'])) //button name "btn_register"
{
	$username	= strip_tags($_REQUEST['txt_username']);	//textbox name "txt_email"
	$email		= strip_tags($_REQUEST['txt_email']);		//textbox name "txt_email"
	$password	= strip_tags($_REQUEST['txt_password']);
	
		//textbox name "txt_password"
		
	if(empty($username)){
		$errorMsg[]="Ingresa tu nombre de usuario";	//check username textbox not empty 
	}
	else if(empty($email)){
		$errorMsg[]="Ingresa tu correo electronico";	//check email textbox not empty 
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errorMsg[]="Ingresa un correo electronico valido";	//check proper email format 
	}
	else if(empty($password)){
		$errorMsg[]="Ingresa tu contraseña";	//check passowrd textbox not empty
	}
	else if(strlen($password) < 6){
		$errorMsg[] = "La contraseña debe tener mas de 6 caracteres";	//check passowrd must be 6 characters
	}
	else
	{	
		try
		{	
			$select_stmt=$db->prepare("SELECT username, email FROM usuarios 
										WHERE username=:uname OR email=:uemail"); // sql select query
			
			$select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email)); //execute query 
			$row=$select_stmt->fetch(PDO::FETCH_ASSOC);	
			
			if($row["username"]==$username){
				$errorMsg[]="Nombre de usuario ya existe actualmente";	//check condition username already exists 
			}
			else if($row["email"]==$email){
				$errorMsg[]="Correo electrolico ya existe actualmente";	//check condition email already exists 
			}
			else if(!isset($errorMsg)) //check no "$errorMsg" show then continue
			{
				$new_password = password_hash($password, PASSWORD_DEFAULT); //encrypt password using password_hash()
				
				$insert_stmt=$db->prepare("INSERT INTO usuarios	(username,email,pass, id_Cargo) VALUES(:uname,:uemail,:upassword, '3')"); 		//sql insert query					
				
				if($insert_stmt->execute(array(	':uname'	=>$username, 
												':uemail'	=>$email, 
												':upassword'=>$new_password))){
													
					$registerMsg="Registro exitoso"; //execute query success message
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Login y registro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

</head>

	<body>
	
	
	<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
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
			<center><h2>Registro</h2></center>
			<form method="post" class="form-horizontal">
					
				
				<div class="form-group">
				<label class="col-sm-3 control-label">Nombre de usuario</label>
				<div class="col-sm-6">
				<input type="text" name="txt_username" class="form-control" placeholder="Usuario" />
				</div>
				</div>
				
				<div class="form-group">
				<label class="col-sm-3 control-label">Correo Electronico</label>
				<div class="col-sm-6">
				<input type="text" name="txt_email" class="form-control" placeholder="Email" />
				</div>
				</div>
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Contraseña</label>
				<div class="col-sm-6">
				<input type="password" name="txt_password" class="form-control" placeholder="Contraseña" />
				</div>
				</div>
					

				


				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_register" class="btn btn-primary " value="Registrarme">
				</div>
				</div>
				
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				Ya estas registrado!<a href="../index.php"><p class="text-info">Ingresar</p></a>		
				</div>
				</div>
					
			</form>
			
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>