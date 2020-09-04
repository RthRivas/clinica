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

<html class="no-js" lang="en">
<!--<![endif]-->

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
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>


    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

           <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo3.png" alt="Logo" width="110"
     height="100"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">


                    <li>
                        <center><a href="#"><span class="glyphicon glyphicon-user"></span>Bienvenido <?php if(isset($_SESSION['user_login'])) {echo $row['username'];}?></a></center>
                    </li>

                    <li class="active">
                        <a href="welcomeadmin.php"> <i class="menu-icon fa fa-dashboard"></i>Inicio </a>
                    </li>
                    <!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-id-badge"></i>Pacientes</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-id-card-o"></i><a href="Index_Ficha.php">Ficha de pacientes</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="indexExpediente.php">Expediente</a></li>
                        </ul>
                    </li>
 <?php if($row['id_cargo'] == 1): ?>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Personal</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user"></i><a href="indexMedico.php">Medicos</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="indexEnfermera.php">Enfermeras</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="indexRecepcionista.php">Recepcionista</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-line-chart"></i>Reportes </a>
                    </li>
  <?php endif;  ?>
 <?php if($row['id_cargo'] == 2): ?>

                    <li>
                        <a href="#"> <i class="menu-icon fa fa-line-chart"></i>Reportes </a>
                    </li>
  <?php endif;  ?>


                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Consultas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="indexCitas.php">Citas</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="#">Agenda</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"> <i class="menu-icon ti-folder"></i>Recetas </a>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>   
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
    <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <div class="header-left">
                        <div class="form-inline">
                        </div>

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/avatar/avatar.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Cerrar Sesion</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

