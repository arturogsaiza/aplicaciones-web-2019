<?php

function  login($correo, $contrasena){

    if($correo=="Ulises@gmail.com" and $contrasena=="gatito"){
        session_start();
        $_SESSION['usuario']['nombre']="Ulises";
        $_SESSION['usuario']['apellidos']="Lopez";
        $_SESSION['usuario']['semestre']=7;
        $_SESSION['usuario']['edad']=30;
        $_SESSION['usuario']['id']=15598;
        $_SESSION['usuario']['correo']=$correo;
        return true;
    }else{
        return false;
    }

}

function logout(){
    session_destroy();
}


function registrar($usuario){
     include("app/modelo/PDO.php"); 

     $query='INSERT INTO usuarios VALUES(:id, :nombre, :apellidos, :edad, :semestre, :correo, :contrasena)';

     $valores=array(
        ':id' => null,
        ':nombre' => $usuario['nombre'],
        ':apellidos' => $usuario['apellidos'],
        ':edad' => $usuario['edad'],
        ':semestre' =>$usuario['semestre'],
        ':correo' => $usuario['correo'],
        ':contrasena' => $usuario['contrasena']
        );

       return insertar($query,$valores);

}
 

