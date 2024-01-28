<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include("conexion.php");
$conexion=mysqli_connect($host,$users, $pw,$db) ;

$nom=$_POST['nom'];
$tipo=$_POST['tipo'];
$precio=$_POST['precio'];
$id_marca=$_POST['id'];

$queryInsert = "INSERT INTO modelo (nom,id_marca,tipo,precio) VALUES ('$nom','$id_marca','$tipo','$precio')";
$resultInsert = mysqli_query($conexion, $queryInsert); 


if($resultInsert)
{
   echo '<script language= javascript>
   self.location = "modelo_nuevo.php?id='.$id_marca.'"
</script>';
}
else
{
   echo '<script language= javascript>
   alert ("No se ingreso")
   self.location = "modelo_nuevo.php?id='.$id_marca.'"
</script>';
}
?>
