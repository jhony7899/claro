<?php
// Conectar a la base de datos
include("config/conexion.php");

if (!$conexion) {
    die('Error de conexión: ' . mysqli_connect_error());
}

// Obtener el ID del primer select enviado por AJAX
$idPrimerSelect = $_POST['id'];

// Realizar una consulta SQL para obtener las opciones correspondientes para el segundo select
$query = "SELECT id, cav FROM cavs WHERE ciudad = $idPrimerSelect";
$resultado = mysqli_query($conexion, $query);

if (!$resultado) {
    die('Error en la consulta: ' . mysqli_error($conexion));
}

// Construir el contenido del segundo select

echo "<select class='form-control' name='cav'>";
echo "<option value=''>Selecciona...</option>";

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<option value='{$fila['id']}'>{$fila['cav']}</option>";
}

echo "</select>";

mysqli_close($conexion);
?>
