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
    <title>Administrar premios</title>
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
                        <h2 class="title1">Listado de Premios</h2>
                        </div>
                        <div class="col-md-6"><a class="btn-cot" href="premio_nuevo.php">
                                <p>Premio nuevo</p>
                            </a></div>

                    </div>
                    <div class="row pad1">
                        <table id="table_id" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>
                                        <p>No</p>
                                    </th>
                                    <th>
                                        <p>Nombre</p>
                                    </th>
                                    <th>
                                        <p>Nombre Dis</p>
                                    </th>
                                    <th>
                                        <p>Cant</p>
                                    </th>
                                    <th>
                                        <p>Foto</p>
                                    </th>
                                    <th>
                                        <p>Descripcion</p>
                                    </th>
                                    <th>
                                        <p>Acciones</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                         $cont=1;       
$con_prem=mysqli_query($con,"SELECT * FROM premios");
 while($prem=mysqli_fetch_array($con_prem)){
    $prem_id=$prem['id'];

    $prem_nombre=$prem['nombre'];
    $prem_dis=$prem['display_name'];
    $prem_cant=$prem['cant'];
    $prem_des=$prem['descr'];
    $prem_foto=$prem['foto'];
    

?> 
  <tr>
      <td><p><?php echo $cont;?></p></td>
      <td><p><?php echo $prem_nombre;?></p></td>
      <td><p><?php echo $prem_dis;?></p></td>
      <td><p><?php echo $prem_cant;?></p></td>
      <td>
        <div class="cont-img" style="width: 90px;background-image: url(<?php echo $prem_foto;?>);background-size:contain;background-repeat:no-repeat">
            <img src="assets/images/bg1.png" alt="">
        </div>
    </td>
    <td><p><?php echo $prem_des;?></p></td>

      <td>
      <div class="row">
      <div class="config_botons"> 
                    <div class="salir"><a href="premio_edit.php?id=<?php echo $prem_id;?>"><span class="icon-mode-edit" alt="Editar"></span></a> </div>
                    <div class="salir"><a href="config/borrar.php?id=<?php echo $prem_id;?>&base=premios&page=premios_admin2"><span class="icon-delete" alt="Borrar"></span></a></div>
                    </div>

          </div>
      </td>
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