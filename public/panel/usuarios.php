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
    <title>Panel de Control</title>
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
                            <h2 class="title1">Listado de Usuarios</h2>
                        </div>
                        <div class="col-md-6"><a class="btn-cot" href="acceso_nuevo.php">
                                <p>Nuevo Usuario</p>
                            </a></div>

                    </div>
                    <div class="row pad1">
                        <table id="table_id" class="table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        <p>Codigo</p>
                                    </th>
                                    <th>
                                        <p>Nombre</p>
                                    </th>
                                    <th>
                                        <p>Cedula</p>
                                    </th>
                                    <th>
                                        <p>email</p>
                                    </th>
                                    <th>
                                        <p>Telefono</p>
                                    </th>
                                    <th>
                                        <p>Ciudad</p>
                                    </th>
                                    <th>
                                        <p>Tipo</p>
                                    </th>
                                    <th>
                                        <p>Estado</p>
                                    </th>
                                    <th>
                                        <p>Acciones</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$con_user=mysqli_query($con,"SELECT * FROM usuarios");
while($usuarios=mysqli_fetch_array($con_user)){
    $user_id=$usuarios['id'];

    $user_cod=$usuarios['cod'];
    $user_nombre=$usuarios['nom']." ".$usuarios['ape'];
    $user_doc=$usuarios['cc'];
    $user_email=$usuarios['email'];
    $user_tel=$usuarios['tel'];
    $user_ciu=$usuarios['ciu'];
    $user_tipo=$usuarios['tipo'];
    $user_est=$usuarios['est'];

    if($user_est == "on"){
        $active="active";
    }
    else{
        $active=" ";
    }
?> 
  <tr>
      <td><p><?php echo $user_cod;?></p></td>
      <td><p><?php echo $user_nombre;?></p></td>
      <td><p><?php echo $user_doc;?></p></td>
      <td><p><?php echo $user_email;?></p></td>
      <td><p><?php echo $user_tel;?></p></td>
      <td><p><?php echo $user_ciu;?></p></td>
      <td><p><?php echo $user_tipo;?></p></td>
      <td><p><?php echo $user_est;?></p></td>
      <td>
      <div class="row">
  <div class="col-md-4"><a href="acceso_edit.php?id=<?php echo $user_id;?>"><span class="icon-mode-edit" alt="Editar"></span></a> </div>
  <div class="col-md-4"><a href="borrar.php?id=<?php echo $user_id;?>&base=usuarios&page=acceso"><span class="icon-delete" alt="Borrar"></span></div>
          </div>
      </td>
</tr>

<?php
 
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