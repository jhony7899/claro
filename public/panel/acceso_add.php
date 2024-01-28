<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include("config/conexion.php");
$conexion=mysqli_connect($host,$users, $pw,$db) ;

$nom=$_POST['nom'];
$ape=$_POST['ape'];
$cc=$_POST['cc'];
$pass=$_POST['pass'];
$email=$_POST['email'];


        $charset="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $npass = "cod_";
        for($i=0;$i<8;$i++)
    {
        $npass .= substr($charset,rand(0,61),1);
    }
    $cod=$npass;

    $ciu=$_POST['ciu'];
    $cav=$_POST['cav'];
    $tipo=$_POST['tipo'];
    $est=$_POST['est'];$avatar="imagenes/user/avatar/avatar.jpg";

$queryInsert = "INSERT INTO usuarios (pass,nom,ape,cc,email.cav,cod,ciu,tipo,est) VALUES ('$pass','$nom','$ape','$cc','$email','$cav','$cod','$ciu','$tipo','$est')";
$resultInsert = mysqli_query($conexion, $queryInsert); 


if($resultInsert)
{
   echo '<script language= javascript>
   alert ("Premio Ingresado")
   self.location = "acceso_nuevo.php"
</script>';
}
else
{
   echo '<script language= javascript>
   alert ("No se ingreso")
   self.location = "acceso_nuevo.php"
</script>';
}
?>
