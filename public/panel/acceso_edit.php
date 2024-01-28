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
    <title>Panel de Control</title>
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
                                <h2 class="title1">Editar Usuario</h2>
                            </div>
                            <div class="col-md-6"><a class="btn-cot" href="<?php echo $volver;?>">
                                    <p>Volver</p>
                                </a></div>

                        </div>
                        <div class="row pad1">
                            <table class="table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            <p>Codigo</p>
                                        </th>
                                        <th>
                                            <p>Nombre</p>
                                        </th>
                                        <th>
                                            <p>Apellido</p>
                                        </th>
                                       
                                        <th>
                                            <p>email</p>
                                        </th>
                                        <th>
                                            <p>Ciudad</p>
                                        </th> 
                                        <th>
                                            <p>CAV</p>
                                        </th>
                                        <th>
                                            <p>Tipo</p>
                                        </th>
                                        <th>
                                            <p>Estado</p>
                                        </th>
                                        <th>
                                            <p>Acciones</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                     $user_id = $_GET['id'];
                                    $con_user = mysqli_query($con, "SELECT * FROM usuarios WHERE id = '$user_id'");
                                    while ($usuarios = mysqli_fetch_array($con_user)) {
                                        

                                        $user_cod = $usuarios['cod'];
                                        $user_nombre = $usuarios['nom'];
                                        $user_apellido = $usuarios['ape'];
                                        $user_doc = $usuarios['cc'];
                                        $user_email = $usuarios['email'];
                                        $user_tel = $usuarios['tel'];
                                        $user_ciu = $usuarios['ciu'];
                                        $user_cav = $usuarios['cav'];
                                        $user_tipo = $usuarios['tipo'];
                                        $user_est = $usuarios['est'];

                                        if ($user_est == "on") {
                                            $active = "checked";
                                        } else {
                                            $active = " ";
                                        }
                                    ?>
                                        <tr>
                                        <form action="acceso_update.php" method="POST">
                                            <td>
                                                <p><?php echo $user_cod; ?></p>
                                            </td>
                                            <td>
                                            <input type="text" name="nom" id="" value="<?php echo $user_nombre;?>">
                                            </td>
                                            <td>
                                            <input type="text" name="ape" id="" value="<?php echo $user_apellido;?>">
                                            </td>
                                           
                                            <td>
                                                <p><?php echo $user_email; ?></p>
                                            </td>
                                                    
                                            <td>
                                                <p><?php echo $user_ciu; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $user_cav; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $user_tipo; ?></p>
                                            </td>
                                            <td>
                                               <input type="checkbox" name="est" id="" <?php echo $active;?>>
                                            </td>
                                            <td>
                                                <div class="row">

                                                    <div class="config_botons">
                                                    <input type="hidden" name="id" value="<?php echo $user_id;?>">
                                            <div class="salir"><input type="submit" value="EDITAR"></div>
                                                    </div>

                                                </div>
                                            </td>
                                        </form>
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