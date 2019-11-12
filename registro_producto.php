<?php include("modulos/comun.php"); ?>
<?php
if(isset($_POST['nombre'])){
include("app/controlador/producto_controller.php");



if(registrar($_POST)){
 $mensaje= "El producto se registro satisfactoriamente";
}else{
  $mensaje="No se puede agregar el producto";
}

}
?> 
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
      
        <h1>Registro de Productos</h1>

        
    <form action="" method="post">

<div class="form-group has-feedback">
  <input type="text" class="form-control" placeholder="Nombre" name="nombre">
  <span class=""></span>
</div>

<div class="form-group has-feedback">
  <input type="text" class="form-control" placeholder="Precio" name="precio">
  <span class=""></span>
</div>

<div class="form-group has-feedback">
  <input type="text" class="form-control" placeholder="Descripcion" name="descripcion">
  <span class=""></span>
</div>

<div class="form-group has-feedback">
  <input type="file" class="form-control" placeholder="Imagen" name="imagen" accept="image/*">
  <span class=""></span>
</div>



<?php
if(isset($mensaje)){
  echo $mensaje;
}

?>


<div class="row">
  
  <!-- /.col -->
  <div class="col-xs-4">
    <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
  </div>

  <a class="btn btn-success" href="store.php">Regresar a Dashboard</a>
  <!-- /.col -->
</div>
</form>
        
    
        </section>    <!-- /.content -->
    </div>  <!-- /.content-wrapper -->
<?php include('modulos/footer.php'); ?>
<?php include('modulos/columna_derecha.php'); ?>  <!-- /.control-sidebar -->
  <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
<?php include('modulos/scripts.php'); ?>
</body>
</html>


    