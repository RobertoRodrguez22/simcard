<?php

$conexion = new mysqli("localhost", "root", "", "consolidado");

if (mysqli_connect_errno()) {
   //echo "Error de conexion";
    exit();
}else
{
 echo "conexion establecida";
}

?>

