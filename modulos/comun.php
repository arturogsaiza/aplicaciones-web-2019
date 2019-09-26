<?php

session_start();
 
if(!isset($_SESSION["usuario"])){
    header('location:login.php');
}

if(isset($_GET['logout']) and  $_GET['logout']==true ){
    include("app/controlador/usuario_controller.php");
    logout();
    header('location:login.php');
}

?>