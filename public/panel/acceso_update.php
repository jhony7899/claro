<?php
session_start();
include("config/conexion.php");
$conexion = mysqli_connect($host, $users, $pw, $db);

$id = $_POST['id'];

if (isset($_POST['nom']) && !empty($_POST['nom'])) {
    mysqli_query($conexion, "UPDATE usuarios set nom='$_POST[nom]' WHERE id='$id'");
}
if (isset($_POST['ape']) && !empty($_POST['ape'])) {
    mysqli_query($conexion, "UPDATE usuarios set ape='$_POST[ape]' WHERE id='$id'");
}
if (isset($_POST['est']) && !empty($_POST['est'])){
    $est="on";
    }else{
     $est="off";
    }
    mysqli_query($conexion, "UPDATE usuarios set est='$est' WHERE id='$id'");


echo '<script language= javascript>
                    self.location = "acceso_edit.php?id=' . $id . '"
                 </script>';
