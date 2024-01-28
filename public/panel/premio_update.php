<?php
session_start();
include("config/conexion.php");
$conexion = mysqli_connect($host, $users, $pw, $db);

$id = $_POST['id'];
$cod = $_POST['cod'];

if (isset($_POST['nom']) && !empty($_POST['nom'])) {
    mysqli_query($conexion, "UPDATE premios set nombre='$_POST[nom]' WHERE id='$id'");
}
if (isset($_POST['dis']) && !empty($_POST['dis'])) {
    mysqli_query($conexion, "UPDATE premios set display_name='$_POST[dis]' WHERE id='$id'");
}
if (isset($_POST['cant']) && !empty($_POST['cant'])) {
    mysqli_query($conexion, "UPDATE premios set cant='$_POST[cant]' WHERE id='$id'");
}
if (isset($_POST['des']) && !empty($_POST['des'])) {
    mysqli_query($conexion, "UPDATE premios set descr='$_POST[des]' WHERE id='$id'");
}

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

mysqli_query($conexion, "UPDATE premios set foto='$foto' WHERE id='$id'");
}




echo '<script language= javascript>
                    self.location = "premio_edit.php?id=' . $id . '"
                 </script>';
