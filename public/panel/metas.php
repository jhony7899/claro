<?php
$ano_actual=date("y");

$ene=0;$feb=0;$mar=0;$abr=0;$may=0;$jun=0;
$jul=0;$ago=0;$sep=0;$oct=0;$nov=0;$dic=0;


$r_activaciones = mysqli_query($con, "SELECT * FROM activaciones WHERE user_id = '$user_cc'");
//$t_activaciones = mysqli_num_rows($r_activaciones);
while ($act2 = mysqli_fetch_array($r_activaciones)) {
    $act_fecha = $act2['fecha_de_reporte'];
$mes=substr($act_fecha, -5, 2);
$ano=substr($act_fecha,2, 2);

if($ano == $ano_actual){
    if($mes == 01){$ene = $ene + 1;} 
    if($mes == 02){$feb = $feb + 1;} 
    if($mes == 03){$mar = $mar + 1;} 
    if($mes == 04){$abr = $abr + 1;} 
    if($mes == 05){$may = $may + 1;} 
    if($mes == 06){$jun = $jun + 1;} 
}
  }

?>