<?php
include("config/session.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
<?php
include("config/head.php");
?>
<!-- Datatables-->
<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable({
         "order": [[ 1, 'asc' ]],
         "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
    });
} );
</script>

    <title>Premios</title>
</head>

<body>
<?php
include("config/conexion.php");
include("config/ruta.php");
?>
    <div class="contenedor">
<?php require ('config/header.php');?>
        <div class="container-fluid bg-all">
            <div class="title-all">
                <img src="assets/images/letra 1.png" alt="">
            </div>
            <div class="container pad1 contenpre">
<?php 
 $con_prem = mysqli_query($con, "SELECT * FROM premios");
 while ($prem = mysqli_fetch_array($con_prem)) {
    $prem_nombre = $prem['display_name'];
    $prem_cant = $prem['cant'];
    $prem_foto = $prem['foto'];

?>
<div class="contpre">
    <div class="img-bg"  style="background-image: url(assets/images/base.png);background-position:center;">
    <div  style="background-image: url(<?php echo $prem_foto; ?>);background-position:top center;background-size:75%;background-repeat:no-repeat">
    <img src="assets/images/bg1.png" alt="">
    </div> 
    <?php
if($prem_cant == 0){
    $none ="style='display:none'";
    ?>
    <div class="entregado"><P>ENTREGADO</P></div>   
    <?php
}else{$none ="";}
?>
    </div>

<div class="title-prem-1"><P><?php echo $prem_nombre; ?></P></div>
<div class="title-prem-2" <?php echo $none; ?>><P><?php echo $prem_cant; ?> UNIDADES</P></div>
</div>
<?php
 }
 ?>

            </div>
           <!-- <div class="col-md-10 der">
                <div class="cont-form">
                    <div class="row pad1">
                        <div class="col-md-8">
                            <h2 class="title1">Listado de Premios</h2>
                        </div>
                        <div class="col-md-4">
                            <div class="row cont-form">
                            <form action="marca_add.php" method="post">
                        <div class="col-md-8">
                            <input type="text" name="nom" placeholder="Agregar Marca">
                        </div>
                        <div class="col-md-4"><input type="submit" value="Agregar"></div>
                            </form>
                            </div>
                        </div>
                      

                    </div>

                    <div class="row pad1 cont-table">
                    
                    <table id="table_id" class="table table-striped table-bordered">
    <thead>
        <tr>
          <th><p>Nº</p></th>
          <th><p>Nombre</p> </th>
          <th><p>Descripcion </p> </th>
        <th><p>Acciones</p></th>
        </tr>
      </thead>
     <tbody>
     <?php
     $cont=0;
   $con_marca=mysqli_query($con,"SELECT * FROM marca ");
while($marca=mysqli_fetch_array($con_marca)){
    $mar_id=$marca['id'];
    $mar_nom=$marca['nombre'];
    $cont=$cont+1;
    ?> 

    <tr>
    <td><p><?php echo $cont;?></p></td>
          <td><p><?php echo $mar_nom;?></p></td>
          <td class="cont-flex">
              <div class="btn-table">
                  <?php 
                  $cont_mar=0;
                  $con_modelo=mysqli_query($con,"SELECT * FROM modelo WHERE id_marca='$mar_id'");
                  while($modelo=mysqli_fetch_array($con_modelo)){
                       $cont_mar=$cont_mar+1;
                   }
                  ?>
                  <p><?php echo $cont_mar;?></p>
              </div>
          <div class="btn-table">
              <a href="modelos.php?id=<?php echo $mar_id;?>"><p>Agregar Descripcion</p></a>
              </div>
              <div class="btn-table">
              <a href="modelo_nuevo.php?id=<?php echo $mar_id;?>"><p>Agregar Foto</p></a>
              </div>         
          </td>
          <td>
          <div  class="cont-flex">
      <div><a class="<?php echo $none;?>" href="vehiculos.php?id=<?php echo $mar_id;?>"><span class="icon-mode-edit" alt="Editar"></span></a></div> 
       <div><a class="<?php echo $none;?>" href="borrar.php?id=<?php echo $mar_id;?>&base=marca&page=vehiculos.php"><span class="icon-delete" alt="Borrar"></span></a></div>
                </div>
          </td>
          
    </tr>
    <?php }?>

       
      </tbody>
</table>
                    </div>


                </div>
            </div>-->
            <div class="col-md-1 pad1">
                
            </div>
        </div>
    </div>
</body>

</html>