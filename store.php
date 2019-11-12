<?php include("modulos/comun.php"); ?>
<?php include("app/controlador/producto_controller.php"); ?>
<?php
 
if(isset($_POST['nombre'])){
    $r=$_POST;  

    $_SESSION["carrito"][]=[
        "nombre"=> $r["nombre"],
        "descripcion"=> $r['descripcion'],
        "precio"=> $r['precio'],
        "imagen"=> $r['imagen']
    ];

    
} 

if(isset($_GET['eliminar'])){
    $indice=$_GET['eliminar'];
  unset($_SESSION["carrito"][$indice]);

header("location:carrito.php?eliminado=true&indice=$indice");


}

 
$productos=listadeproductos();

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

        <h1>Tienda Online</h1>

<div class="row">


    <?php foreach($productos as $producto){ ?>
    <form action="store.php" method="POST" class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="<?= $producto['imagen']; ?>" alt=" ">
            <div class="caption">
            <h3><?= $producto['nombre']; ?></h3>
            <p><?= $producto['descripcion']; ?></p>
            <input type="hidden" name="nombre" value="<?= $producto['nombre']; ?>">
            <input type="hidden" name="descripcion" value="<?= $producto['descripcion']; ?>">
            <input type="hidden" name="precio" value="<?= $producto['precio']; ?>">
            <input type="hidden" name="imagen" value="<?= $producto['imagen']; ?>">
            <p><button class="btn btn-primary" role="button"type="submit" value="ägregar" >Agregar</button>  <b><?= $producto['precio']; ?></b> </p>
            </div>
        </div>
    </form>
    <?php } ?>
 
 

 
 
    
        </section>    <!-- /.content -->
    </div>  <!-- /.content-wrapper -->
<?php include('modulos/footer.php'); ?>
<?php include('modulos/columna_derecha.php'); ?>  <!-- /.control-sidebar -->
  <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
<?php include('modulos/scripts.php'); ?>
</body>
</html>