<?php

// Ejemplo de conexión a diferentes tipos de bases de datos.
# Conectamos a la base de datos
 
$host='localhost';
$dbname='clasedb';
$username='root';
$password='zapato1';
try {
  $GLOBALS['pdo'] = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  $GLOBALS['pdo']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
  // $query de insertar 
  // $parametros: es un arreglo donde se colocaran todos los registros que se quieren insertar
function insertar($query, $valores){
  $consulta =  $GLOBALS['pdo']->prepare($query);  
    try {
       $consulta->execute($valores);
       echo $GLOBALS['pdo']->lastInsertId();
    } catch (\Throwable $th) {
       return $consulta->errorInfo();
    }
}
 
function seleccionar($query, $parametros){
  $stmt = $GLOBALS['pdo']->prepare($query);
  $stmt->execute($parametros);
  if( $stmt ->rowCount() ){
      while ($row = $stmt->fetch()) {
         $resultado[]=$row;         
      }
      return $resultado;
  }else{
      return array();
  }
  }
  


