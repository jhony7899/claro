<?php
$host ="localhost";
$users ="losimpar_claro_user";
$pw ="xilionx31047371134"; 
$db ="losimpar_claro_db";

$conexion = mysqli_connect('localhost', 'losimpar_claro_user', 'xilionx31047371134', 'losimpar_claro_db');
/*
$host ="localhost";
$users ="root";
$pw ="123456789"; 
$db ="cotizarn_data";

Usuario: cotizarn_cotizarnan0plushuser
Base de datos: cotizarn_data
xilionx31047371134
*/
$con=mysqli_connect($host,$users, $pw,$db);

if (!$con) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>
 