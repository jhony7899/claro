<?php
include("conexion.php");
$con=mysqli_connect($host,$users, $pw,$db);

$cod=$_GET['value'];

$con_cliente=mysqli_query($con,"SELECT * FROM cliente" );
while($cliente=mysqli_fetch_array($con_cliente)){
   $codigo=$cliente['cod'];   
   if($cod == $codigo){
      $desvalue=$cliente['desvalue'];
   }else{}
}

 $id=$_GET['id'];

 if($id == "%"){
    echo "<input type='number' name='desvalue' min='0' max='100' placeholder='".$desvalue."'>";
 }
 if($id == "$"){
    echo   "<input type='text' name='desvalue' placeholder='".$desvalue."'>";
 }
?>
