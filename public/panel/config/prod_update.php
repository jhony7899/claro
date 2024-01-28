<?php
session_start();
include("conexion.php");
$conexion=mysqli_connect($host,$users,$pw,$db) ;
 
$id=$_POST['id'];

                if (isset($_POST['nom']) && !empty($_POST['nom'])){
                    mysqli_query($conexion, "UPDATE productos set nombre='$_POST[nom]' WHERE id='$id'");
                    }
                    if (isset($_POST['tipo']) && !empty($_POST['tipo'])){
                        mysqli_query($conexion, "UPDATE productos set tipo='$_POST[tipo]' WHERE id='$id'");
                        }
                    if (isset($_POST['cat']) && !empty($_POST['cat'])){
                        mysqli_query($conexion, "UPDATE productos set categoria='$_POST[cat]' WHERE id='$id'");
                        }
                        if (isset($_POST['pre']) && !empty($_POST['pre'])){
                            mysqli_query($conexion, "UPDATE productos set precio='$_POST[pre]' WHERE id='$id'");
                            }
                            if (isset($_POST['gar']) && !empty($_POST['gar'])){
                                mysqli_query($conexion, "UPDATE productos set garantia='$_POST[gar]' WHERE id='$id'");
                                }
                                if (isset($_POST['est']) && !empty($_POST['est'])){
                                    $est="on";
                                    }else{
                                     $est="off";
                                    }
                                    mysqli_query($conexion, "UPDATE productos set est='$est' WHERE id='$id'");
    


                    echo '<script language= javascript>
                    self.location = "prod_edit.php?id='.$id.'"
                 </script>';
?>