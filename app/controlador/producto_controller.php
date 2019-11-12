<?php


function registrar($producto){
    include("app/modelo/PDO.php");

    $query='INSERT INTO productos VALUES(:id, :nombre, :precio, :descripcion, :imagen)';

    $valores=array(
        ':id' => null,
        ':nombre' => $producto['nombre'],
        ':precio' => $producto['precio'],
        ':descripcion' => $producto['descripcion'],
        ':imagen' =>"tienda/".$producto['imagen']
        
        );
    
    return insertar($query, $valores);
      
} 

function listadeproductos(){
    include("app/modelo/PDO.php");
    $query='select * from usuarios' ;
    $valores=array( );
    return seleccionar($query, $valores);
}


?>