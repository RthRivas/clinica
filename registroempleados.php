<?php


require_once 'Login/database.php';

if(isset($_REQUEST['btn_register'])) //button name "btn_register"
{
    $username   = strip_tags($_REQUEST['txt_username']);    //textbox name "txt_email"
    $email      = strip_tags($_REQUEST['txt_email']);       //textbox name "txt_email"
    $password   = strip_tags($_REQUEST['txt_password']);
    $cargo   = strip_tags($_REQUEST['txt_cargo']);
    
    
        //textbox name "txt_password"
        
    if(empty($username)){
        $errorMsg[]="Ingresa tu nombre de usuario"; //check username textbox not empty 
    }
    else if(empty($email)){
        $errorMsg[]="Ingresa tu correo electronico";    //check email textbox not empty 
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorMsg[]="Ingresa un correo electronico valido"; //check proper email format 
    }
    else if(empty($password)){
        $errorMsg[]="Ingresa tu contraseña";    //check passowrd textbox not empty
    }
    else if(strlen($password) < 6){
        $errorMsg[] = "La contraseña debe tener mas de 6 caracteres";   //check passowrd must be 6 characters
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
                $errorMsg[]="Nombre de usuario ya existe actualmente";  //check condition username already exists 
            }
            else if($row["email"]==$email){
                $errorMsg[]="Correo electrolico ya existe actualmente"; //check condition email already exists 
            }
            else if(!isset($errorMsg)) //check no "$errorMsg" show then continue
            {
                $new_password = password_hash($password, PASSWORD_DEFAULT); //encrypt password using password_hash()
                
                $insert_stmt=$db->prepare("INSERT INTO usuarios (username,email,pass, id_cargo) VALUES(:uname,:uemail,:upassword, :ucargo)");       //sql insert query                  
                
                if($insert_stmt->execute(array( ':uname'    =>$username, 
                                                ':uemail'   =>$email, 
                                                ':upassword'=>$new_password,
                                                ':ucargo'=>$cargo
                                                    ))){
                                                    
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
                <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Cargo</label></div>
                            <div class="col-12 col-md-9">
                                        <select name="txt_cargo" class="form-control-sm form-control">
                                            
                                  <option value="1">Administrador</option>
                                  <option value="2">Medico</option>
                                  <option value="3">Enfermera</option>
                                  <option value="4">Recepcionista</option>
                                  <option value="5">Paciente</option>
                                  
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

