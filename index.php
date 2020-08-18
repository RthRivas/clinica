<?php

require_once 'Login/database.php';

session_start();

if(isset($_SESSION["user_login"]))	//check condition user login not direct back to index.php page
{
	header("location: welcomeadmin.php");
}

if(isset($_REQUEST['btn_login']))	//button name is "btn_login" 
{
	$username	=strip_tags($_REQUEST["txt_username_email"]);	//textbox name "txt_username_email"
	$email		=strip_tags($_REQUEST["txt_username_email"]);	//textbox name "txt_username_email"
	$password	=strip_tags($_REQUEST["txt_password"]);		
	
		
	if(empty($username)){						
		$errorMsg[]="Ingresa tu usuario o correo";	//check "username/email" textbox not empty 
	}
	else if(empty($email)){
		$errorMsg[]="Ingresa tu usuario o correo ";	//check "username/email" textbox not empty 
	}
	else if(empty($password)){
		$errorMsg[]="Ingresar contraseña";	//check "passowrd" textbox not empty 
	}
else
	{
		try
		{
			$select_stmt=$db->prepare("SELECT * FROM usuarios WHERE username=:uname OR email=:uemail"); //sql select query
			$select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email));	//execute query with bind parameter
			$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
			
			if($select_stmt->rowCount() > 0)	//check condition database record greater zero after continue
			{
				if($username==$row["username"] OR $email==$row["email"]) //check condition user taypable "username or email" are both match from database "username or email" after continue
				{
					if(password_verify($password, $row["pass"])) //check condition user taypable "password" are match from database "password" using password_verify() after continue
					{
						$_SESSION["user_login"] = $row["Userid"];	
						header("location: welcomeadmin.php");		//refresh 2 second after redirect to "welcome.php" page
					}
					else
					{
						$errorMsg[]="Contraseña erronea";
					}
				}
				else
				{
					$errorMsg[]="Usuario incorrecto";
				}
			}
			else
			{
				$errorMsg[]="usuario incorrecto";
			}
		}
		catch(PDOException $e)
		{
			$e->getMessage();
		}		
	}
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
		<div class="jumbotron text-center">
		  <h1>Clinica </h1>
		</div>
	
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
					<strong><?php echo $error; ?></strong>
				</div>
            <?php
			}
		}
		if(isset($loginMsg))
		{
		?>
        <?php
		}
		?>   
			<center><h2>Ingresar</h2></center>
			<form method="post" class="form-horizontal">
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Usuario o Correo</label>
				<div class="col-sm-6">
				<input type="text" name="txt_username_email" class="form-control" placeholder="enter username or email" />
				</div>
				</div>
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Contraseña</label>
				<div class="col-sm-6">
				<input type="password" name="txt_password" class="form-control" placeholder="enter passowrd" />
				</div>
				</div>
				
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit" name="btn_login" class="btn btn-success" value="Login">
				</div>
				</div>
				
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				No eres usuario aun? <a href="Login/registro.php"><p class="text-info">Crear una cuenta</p></a>		
				</div>
				</div>
					
			</form>		
		</div>		
	</div>

</body>
</html>
