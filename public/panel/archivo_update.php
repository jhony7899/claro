<?php
session_start();
include("config/conexion.php");
$conexion = mysqli_connect($host, $users, $pw, $db);

$tipo = $_POST['tipo'];

if ($tipo == "term") {     
    mysqli_query($conexion, "UPDATE archivo set contenido='$_POST[contenido]' WHERE tipo='$tipo'");
}
if ($tipo == "cond") {     
    mysqli_query($conexion, "UPDATE archivo set contenido='$_POST[contenido]' WHERE tipo='$tipo'");
}


echo '<script language= javascript>
                    self.location = "archivo.php"
                 </script>';
