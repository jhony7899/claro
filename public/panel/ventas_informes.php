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
    <title>Informes</title>
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
                                <h2 class="title1">Informes</h2>
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


                                        echo "<select id='primerSelect' class='form-control' name='ciudad' onchange='mostrarResultado()'>";
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
                        <div class="result">
                            <?php
                            $ciudades = array();
                            $t_act = array();
                            $cont_ciu = 0;
                            $r_ciu = mysqli_query($con, "SELECT * FROM ciudades");
                            while ($ciu = mysqli_fetch_array($r_ciu)) {

                                $ciudades[$cont_ciu] = $ciu['nombre'];

                                $r_act = mysqli_query($con, "SELECT * FROM activaciones WHERE ciu =  '$ciu[id]'");
                                $t_act[$cont_ciu] = mysqli_num_rows($r_act);

                                $cont_ciu = $cont_ciu + 1;
                            }
                            $json_ciudades = json_encode($ciudades);
                            $json_act = json_encode($t_act);
                            ?>
                            <input id="ciudades" type="hidden" name="" value='<?php echo $json_ciudades; ?>'>
                            <input id="activaciones" type="hidden" name="" value='<?php echo $json_act; ?>'>
                            <!--<div><?php echo $json_ciudades; ?></div>
                            <div><?php echo $json_act; ?></div>-->
                        </div>
                        <div class="grafica pad1">
                            <canvas id="myChart"></canvas>
                        </div>


                    </div>
                </div>
                <div class="col-md-1 pad1">

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        /*$(document).ready(mostrarResultado(all));

        function mostrarResultados(ciudad) {
            $.ajax({
                type: 'POST',
                url: 'obtener_ciudades.php',
                data: 'ciudad=' + ciudad,
                success: function(data) {

                }
            })
        }*/
        window.addEventListener("load", iniciar)


        function iniciar() {
            let ciudades = document.getElementById("ciudades").value;
            let activaciones = document.getElementById("activaciones").value;
        }

        var valor1 = ["Acacias", "Aguachica", "Apartado", "Armenia", "Barrancabermeja", "Barranquilla", "Bello", "Bogota D.C.", "Bucaramanga", "Buenaventura", "Cali", "Cartagena", "Cartago", "Caucasia", "Chia\n", "Cucuta", "Duitama", "Envigado", "Florencia", "Floridablanca", "Fusagasuga", "Girardot", "Ibague", "Ipiales", "Itagui", "La Dorada", "Manizales", "Medellin\n", "Monteria", "Mosquera", "Neiva", "Palmira", "Pasto", "Pereira", "Popayan", "Quibdo", "Rionegro", "Sabaneta", "San Andres", "Santa Marta", "Sincelejo", "Soacha", "Sogamoso", "Tulua", "Tumaco", "Tunja", "Valledupar", "Villavicencio", "Yopal", "Zipaquira\n", "Riohacha"];
        var valor2 = [3, 3, 11, 2, 5, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        console.log(ciudades, activaciones);

        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: valor1,
                datasets: [{
                    label: 'ventas',
                    data: valor2,
                    borderWidth: 1
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Ciudades"
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>