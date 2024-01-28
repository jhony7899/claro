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

                                <h2 class="title1">Reporte de Activaciones</h2>
                            </div>
                            <div class="col-md-6"><a class="btn-cot" href="ingresar_activaciones_asesor.php">
                                    <p>Volver</p>
                                </a></div>

                        </div>
                        <div class="row pad1">
                        <table id="table_id" class="display nowrap" style="width:100%">
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
                                            <p>Acciones</p>
                                        </th>                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $cont=1;
                                        $con_act=mysqli_query($con,"SELECT * FROM activaciones WHERE user_id = '$user_cc'");
                                        while($activaciones=mysqli_fetch_array($con_act)){
                                            $act_id=$activaciones['id'];

                                            $user_min=$activaciones['min'];
                                          
                                            $user_fecha=$activaciones['fecha_de_reporte'];
                                           
                                                                                     
                                        ?> 
                                        <tr>
                                            <td><p><?php echo $cont;?></p></td>
                                            <td><p><?php echo $user_min;?></p></td>
                                            <td><p><?php echo $user_fecha;?></p></td>
                                            
                                            <td>
                                            <div class="row">
                                            <div class="config_botons">
                                            <div class="salir"><div class="col-md-4"><a href="activacion_edit.php?id=<?php echo $act_id;?>"><span  placeholder="editar" class="icon-mode-edit" alt="Editar"></span></a> </div></div>
                                            <div class="salir"><div class="col-md-4"><a href="config/borrar.php?id=<?php echo $act_id;?>&base=activaciones&page=activacion_nuevo"><span class="icon-delete" alt="Borrar"></span></a></div></div>
                                                    </div>
                                        
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    $cont = $cont + 1;
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