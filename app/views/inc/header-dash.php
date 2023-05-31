<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= URL . '/css/bootstrap.min.css' ?>">
 
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= URL . '/recursos/plugins/fontawesome-free/css/all.min.css' ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'?>">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= URL . '/recursos/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= URL . '/recursos/plugins/icheck-bootstrap/icheck-bootstrap.min.css'?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= URL . '/recursos/plugins/jqvmap/jqvmap.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= URL . '/recursos/dist/css/adminlte.min.css'?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= URL . '/recursos/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= URL . '/recursos/plugins/daterangepicker/daterangepicker.css'?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= URL . '/recursos/plugins/summernote/summernote-bs4.min.css'?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= URL .'/recursos/dist/img/AdminLTELogo.png' ?>" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href=<?php echo "/mvc-php/views/dashboard" ?> class="nav-link">Inicio</a>
      </li>
    
    </ul>

    <ul class="navbar-nav ml-auto">
   
   
    </ul>
  </nav>
  <div class="content-wrapper">
  <?php require_once APP . '/views/inc/slider.php' ?>
  <!-- /.navbar -->