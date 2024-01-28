<?php
session_start();
include("config/conexion.php");
$conexion = mysqli_connect($host, $users, $pw, $db);

$id = $_POST['id'];

if (isset($_POST['min']) && !empty($_POST['min'])) {
    mysqli_query($conexion, "UPDATE activaciones set min='$_POST[min]' WHERE id='$id'");
}

echo '<script language= javascript>
                    self.location = "activacion_edit.php?id=' . $id . '"
                 </script>';
