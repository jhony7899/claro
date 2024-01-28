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

                                <h2 class="title1">Nueva Activacion</h2>
                            </div>
                            <div class="col-md-6"><a class="btn-cot" href="ingresar_activaciones_asesor.php">
                                    <p>Volver</p>
                                </a></div>

                        </div>
                        <div class="row pad1">
                            <table class="">
                                <thead>
                                    <tr>

                                        <th>
                                            <p>MIN cliente</p>
                                        </th>
                                       
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="activacion_add.php" method="post" enctype="multipart/form-data">
                                        <tr>

                                            <td><input type="text" name="nom" id=""></td>
                                            <td>
                                                <input type="hidden" name="id" value="<?php echo $id_marca; ?>">
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