<?php
include("config/session.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include("config/head.php");
    ?>
    <title>Ganadores</title>
</head>

<body>
    <?php
    include("config/conexion.php");
    include("config/ruta.php");
    ?>
    <div class="contenedor">
        <?php require('config/header.php'); ?>
        <div class="container-fluid bg-all">
            <div class="title-all">
                <img src="assets/images/ganadores.png" alt="" width="400px">

                <a href="pdf/listado_ganadores.php" target="_blank">
                    <div class="boton-claro">
                        <p>Ver todos los Ganadores</p>
                    </div>
                </a>
            </div>
            <div class="container pad1">
                <div class="contengan">
                    <?php
                    $con_gan = mysqli_query($con, "SELECT * FROM ganadores ORDER BY id DESC LIMIT 0,8");
                    while ($gan = mysqli_fetch_array($con_gan)) {
                        $gan_id = $gan['id_cliente'];
                        $gan_premio = $gan['id_premio'];

                        $conuser = mysqli_query($con, "SELECT * FROM usuarios WHERE cc = '$gan_id'");
                        while ($sel = mysqli_fetch_array($conuser)) {
                            $user_nom = $sel['nom'];
                            $user_ciu = $sel['ciu'];
                            $user_cav = $sel['cav'];
                            $user_avatar = $sel['avatar'];
                        }



                    ?>

                        <div class="contgan cont-img">
                            <div class="img-bg" style="background-image: url(<?php echo $user_avatar; ?>);background-position:center;">
                                <img src="assets/images/bg1.png" alt="">
                            </div>

                            <div class="title-gan-1 pad1">
                                <P>ID <?php echo $gan_id; ?></P>
                                <P>
                                    <?php
                                    $r_ciu = mysqli_query($con, "SELECT * FROM ciudades WHERE id = '$user_ciu'");
                                    while ($ciudades = mysqli_fetch_array($r_ciu)) {
                                        $ciudad = $ciudades['nombre'];
                                    }
                                    $r_cav = mysqli_query($con, "SELECT * FROM cavs WHERE id = '$user_cav'");
                                    while ($cav = mysqli_fetch_array($r_cav)) {
                                        $cavs = $cav['cav'];
                                    }
                                    echo $ciudad . " - " . $cavs;
                                    ?>
                                </P>
                            </div>
                            <div class="title-gan-2 pad1">
                                <P>PREMIO: <span><?php echo $gan_premio; ?></span></P>
                            </div>
                        </div>
                    <?php

                    }

                    ?>

                </div>
                <div class="col-md-1 pad1">

                </div>
            </div>
        </div>
    </div>
</body>

</html>