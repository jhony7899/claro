<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include("config/conexion.php");
$conexion=mysqli_connect($host,$users, $pw,$db) ;

$nom=$_POST['nom'];
$dis=$_POST['dis'];
$cant=$_POST['cant'];
$des=$_POST['des'];
$usuario=$_POST['id'];

    $dia=date("d");
    $mes=date("m");
    $anno=date("y");
    
    $fecha=$anno."-".$mes."-".$dia;

        $charset="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $npass = "cod_";
        for($i=0;$i<8;$i++)
    {
        $npass .= substr($charset,rand(0,61),1);
    }
    $cod=$npass;


$ruta1="config/premio/";
$ruta="foto/".$cod;
if(!file_exists($ruta)){ 
mkdir($ruta,0755, true); 
chmod($ruta,0755);
}

$archivo1=$_FILES['foto']['tmp_name'];
$archivotipo=$_FILES['foto']['type'];
if($archivotipo == "image/png"){
$tipo="png";
}elseif($archivotipo == "image/png"){
   $tipo="jpg"; 
}
if(isset($archivo1) && !empty($archivo1)){
$nombreArchivo1=$cod.".".$tipo;

move_uploaded_file($archivo1,$ruta."/".$nombreArchivo1);

$foto=$ruta."/".$nombreArchivo1;/*------------------------Imagen foto 10----------------------*/
}else{$foto="assets/images/foto.png";}


$queryInsert = "INSERT INTO premios (cod,fecha,display_name,nombre,descr,cant,foto,usuario) VALUES ('$cod','$fecha','$dis','$nom','$des','$cant','$foto','$usuario')";
$resultInsert = mysqli_query($conexion, $queryInsert); 


if($resultInsert)
{
   echo '<script language= javascript>
   alert ("Premio Ingresado")
   self.location = "premio_nuevo.php"
</script>';
}
else
{
   echo '<script language= javascript>
   alert ("No se ingreso")
   self.location = "premio_nuevo.php"
</script>';
}
?>
