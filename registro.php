<?php


require_once 'Login/database.php';

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clinica</title>
    <meta name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/logo3.png">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body class="bg-white">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo3.png" width="200"
     height="141">
                    </a>
                </div>

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
			<div class="login-form">
			<form method="post" class="form-horizontal">
				
				<div class="form-group">
				<label >Nombre de usuario</label>
				<input type="text" name="txt_username" class="form-control" placeholder="Usuario" />
				</div>
				
				<div class="form-group">
				<label>Correo Electronico</label>
				<input type="text" name="txt_email" class="form-control" placeholder="Email" />
				</div>
					
				<div class="form-group">
				<label>Contraseña</label>
				<input type="password" name="txt_password" class="form-control" placeholder="Contraseña" />
				</div>
					
				<button type="submit" name="btn_register" class="btn btn-success btn-flat m-b-30 m-t-30">Registrarme</button>
				
				<div class="register-link m-t-15 text-center">
				Ya estas registrado!<a href="index.php"><p class="text-info">Ingresar</p></a>		
				</div>
			</form>    
                </div>
            </div>
        </div>
    </div>

  <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>