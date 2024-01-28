<?php
session_start();

$id_usuario= isset($_POST['id_usuario']) ? $_POST['id_usuario'] : '';
$premios= isset($_POST['premio']) ? $_POST['premio'] : '';
$token= isset($_POST['token']) ? $_POST['token'] : '';
$cant= isset($_POST['cant']) ? $_POST['cant'] : '';

$cant = $cant - 1;
$dia=date("d");
$mes=date("m");
$anno=date("y");

$fecha=$anno."-".$mes."-".$dia;

$estado="off";

$users ="losimpar_claro_user"; 
$pw ="xilionx31047371134";

if (isset($token) && !empty($token)) {

try{
    $conexion = new PDO('mysql:host=localhost;port=3306;dbname=losimpar_claro_db',$users, $pw);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO ganadores(token,id_cliente,id_premio,fecha) values(?,?,?,?)');
    $pdo->bindParam(1, $token);
    $pdo->bindParam(2, $id_usuario);
    $pdo->bindParam(3, $premios);
    $pdo->bindParam(4, $fecha);
    $pdo->execute() or die(print($pdo->errorInfo()));

    $sql = 'UPDATE premios SET cant=? WHERE display_name=?';
    $stmt= $conexion->prepare($sql);
    $stmt->execute([$cant, $premios]);

    $sql_token = 'UPDATE token SET estado=? WHERE cod=?';
    $stmt2= $conexion->prepare($sql_token);
    $stmt2->execute([$estado, $token]);

    echo json_encode('true');

}catch(PDOException $error){
echo $error->getMessage();
die();
}
 }else{}
?>
