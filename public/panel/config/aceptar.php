<?php
session_start();

$id_usuario=$_SESSION['id_usuario'];
include("conexion.php");
$conexion=mysqli_connect($host,$users,$pw,$db) ;

mysqli_query($conexion, "UPDATE usuarios set inicio='$_GET[acepto]' WHERE id='$id_usuario'");

echo '<script language= javascript>
self.location = "../index.php"
	  </script>';
?>