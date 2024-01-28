<?php
session_start();
include("config/conexion.php");
$conexion = mysqli_connect($host, $users, $pw, $db);

$id = $_POST['id'];

if (isset($_POST['ciudad']) && !empty($_POST['ciudad'])) {
    $ciudad = $_POST['ciudad'];
 
    mysqli_query($conexion, "UPDATE usuarios set ciu='$ciudad' WHERE id='$id'");
}
if (isset($_POST['cav']) && !empty($_POST['cav'])) {
    $cav = $_POST['cav'];

    mysqli_query($conexion, "UPDATE usuarios set cav='$cav ' WHERE id='$id'");
}

echo '<script language= javascript>
                    self.location = "profile.php"
                 </script>';
