<?php
session_start(); 
if($_SESSION['idRol']== null){
  header('Location: login.php');
} 
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Author Meta -->
	<meta name="author" content="Holiday Travel">
	 <!-- Meta Keyword -->
	 <meta name="keywords" content="Holiday Travel">
    <!-- Meta Description -->
    <meta name="description" content="">
  <!--Icon-->
  <link rel="shortcut icon" href="assets/img/favicon.png">
  <title>CPANEL | HolidayTravel</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link" target="_blank">Ver sitio</a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="https://analytics.google.com/analytics/web" target="_blank" class="nav-link">Analytics</a>
      </li> -->

      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://webmail.hostinger.mx" target="_blank" class="nav-link">Webmail</a>
      </li>

    <!--   <li class="nav-item d-none d-sm-inline-block">
        <a href="https://auth-db270.hostinger.mx/" target="_blank" class="nav-link">PHPMyAdmin</a>
      </li> -->
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?php echo $_SESSION['nombre']; ?>
     </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="logout.php">Cerrar Sesión</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="assets/img/gears.png" alt="Mi Acámbaro" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CPANEL</span><br>
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
          <?php
         if($_SESSION['idRol']==1){
            echo 'Super Administrador';
         }elseif($_SESSION['idRol']==2){
          echo 'Administrador';
         }else{
          echo 'Colaborador';
         }
         ?>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Módulos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php if ($_SESSION['idRol']!=3){ ?>
              <li class="nav-item">
                <a href="modules/users/index.php" class="nav-link">
                <i class="fas fa-users"></i>
                  <p>Administrar usuarios</p>
                </a>
              </li>
              <?php } ?>
              <li class="nav-item">
                <a href="modules/travel_agencies/index.php" class="nav-link">
                  <i class="fa fa-hotel"></i>
                  <p>Solicitudes de Agencias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="modules/slider/index.php" class="nav-link">
                  <i class="far fa-image"></i>
                  <p>Slider Principal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="modules/promos/index.php" class="nav-link">
                  <i class="fas fa-tags"></i>
                  <p>Promociones</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Panel de Administración</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">CPANEL</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <img src="assets/img/logo_HT.png" alt="Holiday Travel" class="img-fluid d-block mx-auto" style="width: 70%;">
          </div>
          <!-- /.col-12 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

  <!-- Main Footer -->
  <footer class="main-footer text-center">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      
    </div>
    <!-- Default to the left -->
    <p>Copyright &copy; <?php echo date('Y') ?>. Todos los derechos reservados | Holiday Travel</p>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.min.js"></script>
</body>
</html>
