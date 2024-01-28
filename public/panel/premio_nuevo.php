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


    <title>Activaciones</title>
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

                                <h2 class="title1">Nuevo Premio</h2>
                            </div>
                            <div class="col-md-6"><a class="btn-cot" href="premios_admin2.php">
                                    <p>Volver</p>
                                </a></div>

                        </div>
                        <div class="row pad1">
                            <table class="">
                                <thead>
                                    <tr>
                                    <th>
                                        <p>Nombre</p>
                                    </th>
                                    <th>
                                        <p>Nombre Dis</p>
                                    </th>
                                    <th>
                                        <p>Cant</p>
                                    </th>
                                    <th>
                                        <p>Foto</p>
                                    </th>
                                    <th>
                                        <p>Descripcion</p>
                                    </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="premios_add.php" method="post" enctype="multipart/form-data">
                                        <tr>

                                            <td><input type="text" name="nom" id=""></td>
                                            <td><input type="text" name="dis" id=""></td>
                                            <td><input type="number" name="cant" id=""></td>
                                            <td><input type="file" name="foto" id=""></td>
                                            <td><input type="text" name="des" id=""></td>
                                           
                                            <td>
                                                <input type="hidden" name="id" value="<?php echo $user_cc; ?>">
                                                <input type="submit" value="Ingresar">
                                            </td>
                                        </tr>

                                    </form>
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