<?php

// Ejemplo de conexión a diferentes tipos de bases de datos.
# Conectamos a la base de datos
$host='localhost';
$dbname='clasedb';
$username='root';
$password='zapato1';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    $stmt = $pdo->prepare('INSERT INTO usuarios VALUES(:id, :nombre, :apellidos, :edad, :semestre, :correo, :contrasena)');
    $stmt->execute(array(
      ':id' => null,
      ':nombre' => 'Justin',
      ':apellidos' => 'JBieber',
      ':edad' => 20,
      ':semestre' =>5,
      ':correo' => 'JustinBiseber@gmail.com',
      ':contrasena' => 'asdssas'
    ));
   
    # Affected Rows?
    echo $stmt->rowCount(); // 1
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }