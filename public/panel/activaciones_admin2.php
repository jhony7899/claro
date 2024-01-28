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
    <title>Reporte de Activaciones</title>
</head>

<body>
<?php
include("config/conexion.php");
include("config/ruta.php");
?>
    <div class="contenedor">
<?php require ('config/header.php');?>
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-1 pad1">
 
            </div>
            <div class="col-md-10 pad4">
                <div class="cont-form">
                    <div class="row pad1">
                        <div class="col-md-6">
                        <h2 class="title1">Reporte de Activaciones</h2>
                        </div>
                        <div class="col-md-6"><a class="btn-cot" href="excel/reporte_activaciones.php">
                                <p>Exportar a Excel</p>
                            </a></div>

                    </div>
                    <div class="row pad1">
                        <table id="table_id" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>
                                        <p>Id</p>
                                    </th>
                                    <th>
                                        <p>Min</p>
                                    </th>
                                    <th>
                                        <p>Id Empleado</p>
                                    </th>
                                    <th>
                                        <p>Fecha de Activación</p>
                                    </th>
                                    <th>
                                        <p>Fecha de Reporte en Plataforma</p>
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                         $cont=1;       
$con_prem=mysqli_query($con,"SELECT * FROM activaciones");
 while($prem=mysqli_fetch_array($con_prem)){
    
    $prem_id=$prem['id'];
    $prem_min=$prem['min'];
    $prem_user_id=$prem['user_id'];
    $prem_fecha_de_reporte=$prem['fecha_de_reporte'];
    $prem_fecha_de_creacion=$prem['fecha_de_creacion'];
    
    

?> 
  <tr>
      <td><p><?php echo $prem_id;?></p></td>
      <td><p><?php echo $prem_min;?></p></td>
      <td><p><?php echo $prem_user_id;?></p></td>
      <td><p><?php echo $prem_fecha_de_reporte;?></p></td>
      <td><p><?php echo $prem_fecha_de_creacion;?></p></td>
   </tr>

<?php
 $cont=$cont + 1;
    }

                                ?>
                               
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
</body>

</html>