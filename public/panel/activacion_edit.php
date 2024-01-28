<?php
include("config/session.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include("config/head.php");
    include("config/tables.php");
    ?>


    <title>Reporte de activaciones</title>
</head>

<body>
    <?php
    include("config/conexion.php");
    include("config/ruta.php");
    ?>

    <div class="contenedor">

        <?php require('config/header.php'); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1 pad1">

                </div>
                <div class="col-md-10 pad4">
                    <div class="cont-form">
                        <div class="row pad1">
                            <div class="col-md-6">

                                <h2 class="title1">Editar Activaciones</h2>
                            </div>
                            <div class="col-md-6"><a class="btn-cot" href="activacion_nuevo.php">
                                    <p>Volver</p>
                                </a></div>

                        </div>
                        <div class="row pad1">
                        <table class="">
                                <thead>
                                    <tr>
                                        <th>
                                            <p>Nº</p>
                                        </th>
                                        <th>
                                            <p>MIN Cliente</p>
                                        </th>
                                        <th>
                                            <p>Fecha de Activación</p>
                                        </th>
                                        <th>
                                            <p></p>
                                        </th>                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $act_edit = $_GET['id'];
                                        $con_user=mysqli_query($con,"SELECT * FROM activaciones WHERE id = '$act_edit'");
                                        while($activaciones=mysqli_fetch_array($con_user)){
                                            $user_id=$activaciones['id'];
                                            $user_min=$activaciones['min'];                                          
                                            $user_fecha=$activaciones['fecha_de_reporte'];
                                           
                                                                                     
                                        ?> 
                                        <tr>
                                            <form action="activacion_update.php" method="POST">
                                            <td><p><?php echo $user_id;?></p></td>
                                            <td><input type="text" maxlength="6" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="min" id="" value="<?php echo $user_min;?>"></td>
                                            <td><p><?php echo $user_fecha;?></p></td> 
                                            
                                            <td>
                                            <div class="row">
                                            <div class="config_botons">
                                                <input type="hidden" name="id" value="<?php echo $act_edit;?>">
                                            <div class="salir"><input type="submit" value="EDITAR"></div>
                                            </form>
                                                    </div>
                                        
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    
                                        }

                                                                    ?>
                               

                                    


                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
                <div class="col-md-1 pad1">

                </div>
            </div>
        </div>
    </div>
</body>

</html>