<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include("conexion.php");
$conexion=mysqli_connect($host,$users, $pw,$db) ;

$nom=$_POST['nom'];
$tipo=$_POST['tipo'];
$cat=$_POST['cat'];
$pre=$_POST['pre'];
$gar=$_POST['gar'];

$est=$_POST['est'];
if ($est == "on"){$est="on";}
else{$est="off";}


//echo $nom." ".$cat." ".$pre." ".$gar." ".$est;

$queryInsert = "INSERT INTO productos (nombre,tipo,categoria,precio,garantia,est) VALUES ('$nom','$tipo','$cat','$pre','$gar','$est')";
$resultInsert = mysqli_query($conexion, $queryInsert); 


if($resultInsert)
{
   echo '<script language= javascript>
   alert ("el producto ha sido creado")
   self.location = "prod_nuevo.php"
</script>';
}
else
{
   echo '<script language= javascript>
   alert ("No se ingreso el producto.")
   self.location = "prod_nuevo.php"
</script>';
}
?>
