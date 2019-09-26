<!DOCTYPE html>
<html>
<head>
 <?php include("modulos/head.php"); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include("modulos/header.php"); ?>
<?php include("modulos/columna_izquierda.php"); ?>  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">    <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1> Dashboard<small>Control panel</small> </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
        </section>   <!-- Main content -->
        <section class="content">    
        <?php include("modulos/estadisticas.php"); ?>

        <h1>Hello World</h1>
        
    
        </section>    <!-- /.content -->
    </div>  <!-- /.content-wrapper -->
<?php include('modulos/footer.php'); ?>
<?php include('modulos/columna_derecha.php'); ?>  <!-- /.control-sidebar -->
  <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
<?php include('modulos/scripts.php'); ?>
</body>
</html>