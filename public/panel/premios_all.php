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


    <title>Premios</title>
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
                <div class="col-1 pad1">

                </div>
                <div class="col-10 pad4">
                    <div class="cont-form">
                        <div class="row pad1">
                            <div class="col-6">

                                <h2 class="title1"></h2>
                            </div>
                            <div class="col-6"><a class="btn-cot" href="modelo_nuevo.php?id=">
                                    <p>Agregar Modelo</p>
                                </a></div>

                        </div>
                        <div class="row pad1">
                            <table id="table_id" class="">
                                <thead>
                                    <tr>
                                        <th>
                                            <p>Nº</p>
                                        </th>
                                        <th>
                                            <p>Nombre</p>
                                        </th>
                                        <th>
                                            <p>Tipo</p>
                                        </th>
                                        <th>
                                            <p>Precio</p>
                                        </th>
                                        <th>
                                            <p>Acciones</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>
                                        <td>
                                            <p></p>
                                        </td>
                                        <td>
                                            <p></p>
                                        </td>
                                        <td>
                                            <p></p>
                                        </td>
                                        <td>
                                            <p></p>
                                        </td>
                                        <td>
                                            <div class="cont-flex">
                                                <div><a class="" href="modelo_edit.php?id="><span class="icon-mode-edit" alt="Editar"></span></a></div>
                                                <div><a class="" href="borrar.php?id=&base=modelo&page=modelos.php"><span class="icon-delete" alt="Borrar"></span></a></div>
                                            </div>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
                <div class="col-1 pad1">

                </div>
            </div>
        </div>
    </div>
</body>

</html>