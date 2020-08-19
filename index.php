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

	 <div class="login-form">
			<form method="post" class="form-horizontal">
					
				<div class="form-group">
				<label>Usuario o Correo</label>
				<input type="text" name="txt_username_email" class="form-control" placeholder="Ingresa tu email o usuario" />
				</div>

					
				<div class="form-group">
				<label>Contraseña</label>
				<input type="password" name="txt_password" class="form-control" placeholder="ingresa tu contraseña" />
				</div>
			
				
				 <button type="submit" name="btn_login" class="btn btn-success btn-flat m-b-30 m-t-30">Ingresar</button>
				
				<div class="register-link m-t-15 text-center">
				No eres usuario aun? <a href="registro.php"><p class="text-info">Crear una cuenta</p></a>		
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


