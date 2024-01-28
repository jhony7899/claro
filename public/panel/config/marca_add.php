<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include("conexion.php");
$conexion=mysqli_connect($host,$users, $pw,$db) ;

$nom=$_POST['nom'];

$queryInsert = "INSERT INTO marca (nombre) VALUES ('$nom')";
$resultInsert = mysqli_query($conexion, $queryInsert); 


if($resultInsert)
{
   echo '<script language= javascript>
   self.location = "vehiculos.php"
</script>';
}
else
{
   echo '<script language= javascript>
   alert ("No se ingreso")
   self.location = "vehiculos.php"
</script>';
}
?>
