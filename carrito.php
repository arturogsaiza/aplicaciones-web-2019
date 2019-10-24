<?php include("modulos/comun.php"); ?>
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
  
  <?php if(isset($_GET['eliminado'])){?>
    <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> SE ELIMINO!</h4>
                El producto con  el indice  <?= $_GET['indice']; ?>, se elimino correctamente.
              </div>        
  <?php } ?>
    <h1>Resumen de Compra</h1>
     

    <div class="col-md-8">
          
           
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Productos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
    
            <table class="table table-bordered">
         <tr>
            <th>id</th>
            <th>nombre</th>
            <th>descripcion</th>
            <th>imagen</th>
            <th>precio</th>
            <th> </th>
        </tr>
        <?php foreach ($_SESSION["carrito"]  as $indice => $producto) {  ?>
        <tr>
            <td>    <?php echo $indice; ?>   </td>
            <td>    <?= $producto['nombre']; ?>  </td>
            <td> <?= $producto['descripcion']; ?> </td>
            <td><img src=' <?= $producto['imagen']; ?>' style="width:50px;"></td>
            <td>  <?= $producto['precio']; ?></td>
            <td><a href="store.php?eliminar=<?=$indice; ?>"><b> X </b></a></td>
        </tr>

        <?php } ?>  
     </table>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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