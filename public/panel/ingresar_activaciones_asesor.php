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
                <div class="col-md-3 pad1">

                </div>
                <div class="col-md-6 pad4">
                    <div class="cont-form pad2">
                        <div class="note1">
                            <ul>
                                <li>
                                    <p>En esta sección podrás ingresar las activaciones del seguro celular Claro up que realices durante el xxx y el xxx.</p>
                                </li>
                                <li>
                                    <p>Una vez se cierre la fecha máxima para ingresar las activaciones, haremos una validación de la información ingresada y podrás obtener tokens para participar de la ruleta.</p>
                                    <ul>
                                        <li>MIN del cliente: debes ingresar los <span>6 últimos dígitos</span> del número de celular del cliente.
                                        </li>
                                        <li>Fecha de Activación: debes ingresar la fecha en que al cliente se le activó el seguro celular.
                                        </li>
                                        <li>Haz clic en el botón "Ingresar" una vez hayas introducido todas tus activaciones.
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="cont-form pad2">
                        <form action="activacion_add.php" method="post" enctype="multipart/form-data">
                            <div class="row pad1">

                                <table class="" id="activaciones">
                                    <thead>
                                        <tr>

                                            <th>
                                                <p>MIN cliente</p>
                                            </th>
                                            <th>
                                                <p>Fecha de Activación</p>
                                            </th>

                                        </tr>
                                    </thead>

                                    <tbody id="tbody">
                                        <?php for ($i = 1; $i < 5; $i++) {
                                            if ($i == 1) {
                                                $required = "required";
                                            } else {
                                                $required = "";
                                            }
                                        ?>
                                            <tr class="cont-prod" data-modal="<?php echo $i; ?>">
                                                <td><input type="text" maxlength="6" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" value="" name="nom[]" id="col1<?php echo $i; ?>" <?php echo $required; ?>></td>
                                                <td><input type="date" value="" name="fecha[]" id="col2<?php echo $i; ?>" <?php echo $required; ?>></td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                            <div class="row pad1">

                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">
                                    <input type="hidden" name="id" value="<?php echo $user_cc; ?>">
                                    <input type="hidden" name="ciu" value="<?php echo $user_ciu; ?>">
                                    <input type="hidden" name="cav" value="<?php echo $user_cav; ?>">
                                    <input type="submit" value="Ingresar" style="margin: 4px;">

                                </div>
                            </div>
                        </form>
                        <div class="row pad1">

                            <div class="col-md-6">
                                <span class="btn-cot  btn-left" onclick="validar()" id="agregar">
                                    <p>Insertar más campos</p>
                                </span>
                            </div>
                            <div class="col-md-6">

                            </div>

                        </div>

                        <script>
                            function validar() {
                                var nrows = 1;
                                var miArray1 = new Array()
                                var miArray2 = new Array()
                                var filas = "";

                                $(".cont-prod").each(function() {
                                    nrows++;
                                })
                                console.log(nrows);

                                for (var i = 1; i < nrows; i++) {
                                    text11 = "col1" + i,
                                        text21 = "col2" + i

                                    var text1 = document.getElementById(text11).value;
                                    miArray1[i] = text1

                                    var text2 = document.getElementById(text21).value;
                                    miArray2[i] = text2

                                    console.log(text11, text21)

                                    filas = filas + `<tr class="cont-prod" data-modal="` + i + `">
                                                 <td><input type="text" maxlength="6" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" value="` + text1 + `" name="nom[]" id="col1` + i + `"></td>
                                                 <td><input type="date" value="` + text2 + `" name="fecha[]" id="col2` + i + `" ></td>
                                           </tr>`
                                }
                                var tbody = document.getElementById("tbody")

                                $(".cont-prod").remove();

                                tbody.innerHTML = filas + `
                                           <tr class="cont-prod" data-modal="` + nrows + `">
                                                 <td><input type="text" maxlength="6" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" value="" name="nom[]" id="col1` + nrows + `"></td>
                                                 <td><input type="date" value="" name="fecha[]" id="col2` + nrows + `" ></td>
                                           </tr>`;

                                /*
                                                                for (var e = 1; e < nrows; e++) {
                                                                    text11 = "col1" + e,
                                                                        text21 = "col2" + e

                                                                    document.getElementById(text11).value = miArray1[e];
                                                                    document.getElementById(text21).value = miArray2[e];
                                                                }*/

                            }
                        </script>
                        <div class="row pad1">

                            <div class="col-10"><a class="btn-cot btn-left" href="activacion_nuevo.php">
                                    <p>Consultar mis activaciones registradas
                                    </p>
                                </a></div>
                            <div class="col-2">

                                <h2 class="title1"></h2>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-3 pad1">

                </div>
            </div>
        </div>
    </div>
</body>

</html>