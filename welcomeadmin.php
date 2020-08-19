<?php
  include 'Login/database.php';
    session_start();
      if(!isset($_SESSION['user_login'])) //check unauthorize user not access in "welcome.php" page
        {
          header("location: index.php");
        }
        $id = $_SESSION['user_login'];
        
        $select_stmt = $db->prepare("SELECT * FROM usuarios WHERE Userid=:uid");
        $select_stmt->execute(array(":uid"=>$id));
        $row=$select_stmt->fetch(PDO::FETCH_ASSOC);
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <div class="navbar-header">
          <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a href="#" class="navbar-brand">Clinica</a>
          <a class="navbar-brand">I</a>
        </div>

        <div class="navbar-collapse collapse" id="mobile_menu">
          <ul class="nav navbar-nav">
     
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pacientes<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="fichas.php">Ficha de pacientes</a></li>
                <li><a href="expedientes.php">Expediente</a></li>
              </ul>
            </li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Personal<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="medicos.php">Medicos</a></li>
                <li><a href="enfermeras.php">Enfermeras</a></li>
              </ul>
            </li>

            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="citas.php">Citas</a></li>
                <li><a href="agenda.php">Agenda</a></li>
              </ul>
            </li>
            <li><a href="indexRecetas.php">Recetas</a></li>
            <li><a href="indexReportes.php">Reportes</a></li>
          </ul>
          <ul class="nav navbar-nav">
            <li>
             
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>Bienvenido <?php if(isset($_SESSION['user_login'])) {echo $row['username'];}?></a></li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span>Cerrar Sesion<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php">Salir</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>