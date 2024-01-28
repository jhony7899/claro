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
                        <h2 class="title1">Editar Premio</h2>
                        </div>
                        <div class="col-md-6"><a class="btn-cot" href="premios_admin2.php">
                                <p>Volver</p>
                            </a></div>

                    </div>
                    <div class="row pad1">
                        <table class="table-bordered">
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
                                    <th width="8%">
                                        <p>Cant</p>
                                    </th>
                                    <th width="10%">
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
                            <form action="premio_update.php" method="post" enctype="multipart/form-data">
                                <?php
                                 $id=$_GET['id'];
$con_prem=mysqli_query($con,"SELECT * FROM premios WHERE id = '$id'");
 while($prem=mysqli_fetch_array($con_prem)){
    $prem_nombre=$prem['nombre'];
    $prem_cod=$prem['cod'];
    $prem_dis=$prem['display_name'];
    $prem_cant=$prem['cant'];
    $prem_des=$prem['descr'];
    $prem_foto=$prem['foto'];
    $cont=+1;

?> 
  <tr>
      <td><p><?php echo $cont;?></p></td>
      <td><input type="text" name="nom" id="" placeholder="<?php echo $prem_nombre;?>"></td>
      <td><input type="text" name="dis" id="" placeholder="<?php echo $prem_dis;?>"></td>
      <td><input type="number" min="<?php echo $prem_cant;?>" name="cant" id="" placeholder="<?php echo $prem_cant;?>"></td>
      <td>
      <input type="file" name="foto" id="">
    </td>
    <td><input type="text" name="des" id="" placeholder="<?php echo $prem_des;?>"></td>

      <td>
      <div class="row">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input type="hidden" name="cod" value="<?php echo $prem_cod; ?>">
                                <input type="submit" value="Editar" style="margin: 4px;">
          </div>
      </td>
</tr>

<?php
 
    }

                                ?>
                            </form>
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