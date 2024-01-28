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


    <title>Ganadores</title>
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
                        <div class="col-md-6">
                            <h2 class="title1">Listado de Ganadores</h2>
                        </div>
                        <div class="col-md-6"><a class="btn-cot" href="#">
                                <p>Generar reporte</p>
                            </a></div>

                    </div>
                    <div class="row pad1">
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        <p>Nombre Completo</p>
                                    </th>
                                    <th>
                                        <p>Premio</p>
                                    </th>
                                    <th>
                                        <p>CAV</p>
                                    </th>
                                    <th>
                                        <p>Id Empleado</p>
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
      $check1="";
 $con_prod=mysqli_query($con,"SELECT * FROM productos");
 while($prod=mysqli_fetch_array($con_prod)){
    $prod_id=$prod['id'];
    $prod_nom=$prod['nombre']." ".$prod['tipo'];
    $prod_cat=$prod['categoria'];
    $prod_pre=$prod['precio'];
    $prod_gar=$prod['garantia'];
    $prod_est=$prod['est'];



        if($prod_est == "on"){$check1="checked";}else{$check1="";}

        
     
    ?> 

    <tr>
        
          <td><p><?php echo $prod_nom;?></p></td>
          <td><p><?php echo $prod_cat;?></p></td>
          <td><p><?php echo $prod_pre;?></p></td>
          <td><p><?php echo $prod_gar;?></p></td>
          <td><input type="checkbox" name="" id="" <?php echo $check1; ?> disabled></td>
        <td>
          <div class="row">
      <div class="col-md-4">
          <a href="prod_edit.php?id=<?php echo $prod_id;?>">
          <span class="icon-mode-edit" alt="Editar" title="Editar"></span></a> 
        </div>
      <div class="col-md-4">
          <a href="borrar.php?id=<?php echo $arch_id;?>&base=archivo&page=cotizar_residencial">
          <span class="icon-delete" alt="Borrar" title="Borrar"></span></a>
        </div>
      <div class="col-md-4">
          <a href="#">
          <span class="icon-chat" alt="Agregar comentarios" title="Agregar comentarios"></span></a>
        </div>
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
</body>

</html>