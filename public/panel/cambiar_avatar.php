<?php
session_start();
include("config/conexion.php");
$conexion=mysqli_connect($host,$users,$pw,$db) ;
 
$id=$_POST['id'];
$avatar=$_POST['avatar'];

            if (isset($_POST['avatar']) && !empty($_POST['avatar'])){
                    mysqli_query($conexion, "UPDATE usuarios set avatar='$_POST[avatar]' WHERE cc='$id'");
                    }


                    echo '<script language= javascript>
                    self.location = "profile.php"
                 </script>';
?>