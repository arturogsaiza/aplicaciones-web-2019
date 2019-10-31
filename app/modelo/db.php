<?php
$host="localhost";
$usuario="root";
$contrasena="zapato1";
$baseDatos="clasedb";


$conexion= mysqli_connect($host,$usuario,$contrasena,$baseDatos);

 //mysqli_select_db($conexion,$baseDatos);

 $query="Select * from usuarios ";
 $resultado=mysqli_query($conexion,$query) or die("La consulta fallo: ".mysqli_error($conexion));

 while($line=mysqli_fetch_array($resultado)){

        echo $line['nombre']." ".$line['apellidos']."<br>";

 }

 mysqli_close($conexion);


