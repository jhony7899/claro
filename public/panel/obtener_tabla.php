<?php
// Conectar a la base de datos
include("config/conexion.php");

if (!$conexion) {
    die('Error de conexión: ' . mysqli_connect_error());
}

// Obtener el ID del segundo select enviado por AJAX
$idsegundoSelect = $_POST['id'];

// Realizar una consulta SQL para obtener las opciones correspondientes para el segundo select
$query1 = "SELECT cc FROM usuarios WHERE cav = $idsegundoSelect";
$resultado1 = mysqli_query($conexion, $query1);

if (!$resultado1) {
    die('Error en la consulta: ' . mysqli_error($conexion));
}

// Construir el contenido del segundo select
$cont = 0;

echo "<tbody>";


while ($fila1 = mysqli_fetch_assoc($resultado1)) {
    $cc = $fila1['cc'];

    $r_act = mysqli_query($conexion, "SELECT * FROM activaciones WHERE user_id = $cc");
    $t_act = mysqli_num_rows($r_act);

    $cont = $cont + 1;
    echo "<tr><td><p>{$cont}</p></td><td><p>{$fila1['cc']}</p></td><td><p>{$t_act}</p></td></tr>";
}
echo " </tbody>";

mysqli_close($conexion);
