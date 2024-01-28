<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

session_start();
include("config/conexion.php");
$conexion=mysqli_connect($host,$users, $pw,$db);

if (isset($_POST['nom']) && !empty($_POST['nom']) ) {
   $nom=$_POST['nom'];
}

if(isset($_POST['fecha']) && !empty($_POST['fecha'])){
   $data=$_POST['fecha'];
}
$id=$_POST['id'];
$ciu=$_POST['ciu'];
$cav=$_POST['cav'];

$tot= count($nom);


for($i = 0;$i < $tot; $i++){
   if (isset($nom[$i]) && !empty($nom[$i])) {
    $queryInsert  ="INSERT INTO activaciones (min,user_id,ciu,cav,fecha_de_reporte) VALUES ('$nom[$i]','$id','$ciu','$cav','$data[$i]')";
    $resultInsert = mysqli_query($conexion, $queryInsert); 
   }else{}
}

if($resultInsert)
{
   echo '<script language= javascript>
   alert ("Las Activaciones se ingresaron correctamente")
   self.location = "ingresar_activaciones_asesor.php"
</script>';
}
else
{
   echo '<script language= javascript>
   alert ("No se ingreso")
   self.location = "ingresar_activaciones_asesor.php"
</script>';
}
?>
