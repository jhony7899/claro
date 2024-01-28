<?php
session_start();

if(!$_SESSION){
echo '<script language= javascript>
          alert ("Registrate o Inicia Sesion")
          self.location = "https://cotizar.nanoplush.com/"
	  </script>';
}
$id_usuario=$_SESSION['id_usuario'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="css/iconos/style.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
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
include("conexion.php");
$con=mysqli_connect($host,$users, $pw,$db);

if (!$con) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$ruta= "https://" . $host . $url;


?>
    <div class="contenedor">
<?php require ('header.php');?>
        <div class="container-fluid">
            <div class="col-md-1 pad1">

            </div>
            <div class="col-md-10 der">
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
            </div>
            <div class="col-md-1 pad1">
                
            </div>
        </div>
    </div>
</body>

</html>