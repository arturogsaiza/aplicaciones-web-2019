<?php include("modulos/comun.php"); ?>
<?php
 
if(isset($_POST['nombre'])){
    $r=$_POST; 

    $_SESSION["carrito"][]=[
        "nombre"=> $r["nombre"],
        "descripcion"=> $r['descripcion'],
        "precio"=> $r['precio'],
        "imagen"=> $r['imagen']
    ];

    /*  echo "<pre>";
        print_r($_SESSION["carrito"]);
        echo "</pre>";
    */

    foreach ($_SESSION["carrito"] as   $producto) {
    echo $producto["nombre"]."<br>";
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

        <h1>Tienda Online</h1>

<div class="row">

    <form action="store.php" method="POST" class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="https://images-na.ssl-images-amazon.com/images/I/61iLd1K5NML._SX679_.jpg" alt="Redmi Note 7">
            <div class="caption">
            <h3>Redmi Note 7 </h3>
            <p>Xiaomi Redmi Note 7, 64GB/4GB RAM, 6.30'' FHD+, Snapdragon 660, Negro</p>
            <input type="hidden" name="nombre" value="Redmi Note 7">
            <input type="hidden" name="descripcion" value="Xiaomi Redmi Note 7, 64GB/4GB RAM, 6.30'' FHD+, Snapdragon 660, Negro">
            <input type="hidden" name="precio" value="100">
            <input type="hidden" name="imagen" value="https://images-na.ssl-images-amazon.com/images/I/61iLd1K5NML._SX679_.jpg">
            <p><button class="btn btn-primary" role="button"type="submit" value="ägregar" >Agregar</button>  <b>$100.00</b> </p>
            </div>
        </div>
    </form>

    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="https://images-na.ssl-images-amazon.com/images/I/51nsNYVA%2BdL._SL1000_.jpg" alt="Mi 9T">
            <div class="caption">
            <h3>Xiaomi Mi 9T</h3>
            <p>Smartphone Xiaomi Mi 9T Desbloqueado - 64GB - Color Negro</p>
            <p><a href="#" class="btn btn-primary" role="button">Agregar</a></p>
            </div>
        </div>
    </div>


    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="https://images-na.ssl-images-amazon.com/images/I/61CCvvEJxDL._SL1000_.jpg" alt="Mi Mix 2">
            <div class="caption">
            <h3>Mi Mix 2</h3>
            <p>Xiaomi Mi Mix 2 - Smartphone de 5.9", 128 GB, 6 GB RAM, Ceramic Negro, Desbloqueado</p>
            <p><a href="#" class="btn btn-primary" role="button">Agregar</a></p>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="https://images-na.ssl-images-amazon.com/images/I/51Z1jkudQGL._SX569_.jpg" alt="Airdots">
            <div class="caption">
            <h3>Redmi Airdots</h3>
            <p>Xiaomi Audífonos Bluetooth Redmi Airdots</p>
            <p><a href="#" class="btn btn-primary" role="button">Agregar</a></p>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="https://http2.mlstatic.com/xiaomi-laptop-notebook-air-ultra-delgado-y-delgado-125-D_NQ_NP_927386-MLM31495704115_072019-O.webp" alt="Xiaomi Air">
            <div class="caption">
            <h3>Xiaomi Air 12.5</h3>
            <p>Xiaomi Laptop Notebook Air Ultra Delgado Y Delgado 12.5</p>
            <p><a href="#" class="btn btn-primary" role="button">Agregar</a></p>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="https://images-na.ssl-images-amazon.com/images/I/71Wm1I%2BThaL._SL1500_.jpg" alt="mi band4">
            <div class="caption">
            <h3>Mi Band 4</h3>
            <p>Xiaomi Mi Band 4 Pantalla a Color multilenguaje</p>
            <p><a href="#" class="btn btn-primary" role="button">Agregar</a></p>
            </div>
        </div>
    </div>
</div>

    
        </section>    <!-- /.content -->
    </div>  <!-- /.content-wrapper -->
<?php include('modulos/footer.php'); ?>
<?php include('modulos/columna_derecha.php'); ?>  <!-- /.control-sidebar -->
  <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
<?php include('modulos/scripts.php'); ?>
</body>
</html>