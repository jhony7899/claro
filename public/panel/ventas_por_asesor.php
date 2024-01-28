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
    <title>Ventas por CAV</title>
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
                                <h2 class="title1">Ventas por Asesor</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="row formulario" style="margin: 0px;">
                                    <div class="col-md-6 pad1">
                                        <?php

                                        
                                        // Paso 1: Conectar a la base de datos
                                        if (!$conexion) {
                                            die('Error de conexión: ' . mysqli_connect_error());
                                        }

                                        // Paso 2: Obtener datos para el primer select
                                        $query = "SELECT id, nombre FROM ciudades";
                                        $resultado = mysqli_query($conexion, $query);

                                        if (!$resultado) {
                                            die('Error en la consulta: ' . mysqli_error($conexion));
                                        }


                                        echo "<select id='primerSelect' class='form-control' name='ciudad' onchange='cargarSegundoSelect()'>";
                                        echo "<option value=''>Selecciona...</option>";

                                        while ($fila = mysqli_fetch_assoc($resultado)) {
                                            /*     if ($user_ciu == $fila['nombre']) {
                              $selected = "selected";
                            } else {
                              $selected = "";
                            }*/
                                            echo "<option value='{$fila['id']}' {$selected}>{$fila['nombre']}</option>";
                                        }

                                        echo "</select>";


                                        ?>
                                    </div>
                                    <div class="col-md-6 pad1">
                                        <?php
                                        // Paso 3: Configurar evento onchange y crear contenedor para el segundo select
                                        echo "<div id='segundoSelectContainer'>
                            <select  class='form-control'><option value=''>Selecciona la Ciudad</option></select>
                            </div>";
                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row pad1">
                            <table id="table_id" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>
                                            <p>N°</p>
                                        </th>
                                        <th>
                                            <p>Id Empleado</p>
                                        </th>
                                        <th>
                                            <p>Cantidad de activaciones</p>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody id="cargaTabla">


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
    <script>
        // Paso 3: Función JavaScript para cargar el segundo select dinámicamente
        function cargarSegundoSelect() {
            var primerSelectValue = document.getElementById('primerSelect').value;

            // Verificar si se seleccionó una opción en el primer select
            if (primerSelectValue !== '') {
                // Enviar solicitud AJAX para obtener opciones para el segundo select
                $.ajax({
                    type: 'POST',
                    url: 'obtener_filtro.php', // Archivo PHP que manejará la solicitud AJAX
                    data: {
                        id: primerSelectValue
                    },
                    success: function(response) {
                        // Actualizar el contenido del contenedor del segundo select
                        document.getElementById('segundoSelectContainer').innerHTML = response;
                    }
                });
            } else {
                // Limpiar el contenido del segundo select si no se seleccionó ninguna opción en el primero
                document.getElementById('segundoSelectContainer').innerHTML = '';
            }
        }
        // Paso 3: Función JavaScript para cargar el segundo select dinámicamente
        function cargarTabla() {
            var segundoSelectValue = document.getElementById('segundoSelect').value;

            // Verificar si se seleccionó una opción en el primer select
            if (segundoSelectValue !== '') {
                // Enviar solicitud AJAX para obtener opciones para el segundo select
                $.ajax({
                    type: 'POST',
                    url: 'obtener_tabla.php', // Archivo PHP que manejará la solicitud AJAX
                    data: {
                        id: segundoSelectValue
                    },
                    success: function(response) {
                        // Actualizar el contenido del contenedor del segundo select
                        document.getElementById('cargaTabla').innerHTML = response;
                    }
                });
            } else {
                // Limpiar el contenido del segundo select si no se seleccionó ninguna opción en el primero
                document.getElementById('cargaTabla').innerHTML = '';
            }
        }
    </script>
</body>

</html>