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


    <title>Panel de Control</title>
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
                            <h2 class="title1">Agregar Marca de Vehiculo</h2>
                        </div>
                        <div class="col-md-6"><a class="btn-cot <?php echo $none;?>" href="clientes.php">
                                <p>Volver</p>
                            </a></div>

                    </div>
                    <div class="row pad1">
                    <table>
                                    <thead>
                                        <tr>
                                            <th><p>Nombre</p></th>
                                            <th><p>Cargo</p></th>
                                            <th><p>Documento</p></th>
                                            <th><p>Telefono</p></th>
                                            <th><p>Email</p></th>
                                            <th><p>Direccion</p></th>
                                            <th><p>Ciudad</p></th>
                                        </tr>
                                    </thead>
                                    <form action="cliente_add.php" method="post"  enctype="multipart/form-data">
                                        <tbody>
                                            <tr>
                                                <input type="hidden" name="cod" value="">
                                                <td><input type="text" name="nom" id="" placeholder="Nombre"></td>
                                                <td><input type="text" name="cargo" id="" placeholder="Cargo"></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <select name="tipodoc" id="">
                                                                <?php 
                                                                $con_doc=mysqli_query($con,"SELECT * FROM documento");
                                                                while($docu=mysqli_fetch_array($con_doc)){
                                                                    $doc_nom=$docu['nom'];
                                                                  echo "<option value=".$doc_nom.">".$doc_nom."</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-9"> <input type="text" name="doc" id="" placeholder=""></div>
                                                    </div>
                                                </td>
                                                <td><input type="text" name="tel" id="" placeholder="Telefono"></td>
                                                <td><input type="text" name="email" id="" placeholder="Email"></td>
                                                <td><input type="text" name="dir" id="" placeholder="Direccion"></td>
                                                <td><input type="text" name="ciu" id="" placeholder="Ciudad"></td>
                                               <input type="hidden" name="usuario" value="<?php echo $user_cod;?> ">
                                            </tr>
                                            <tr>
                                                <td colspan='6'></td>
                                                <td> <input type="submit" value="Ingresar"></td>
                                            </tr>
                                        </tbody>
                                    </form>
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