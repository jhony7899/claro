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
                            <h2 class="title1">Nuevo Productos</h2>
                        </div>
                        <div class="col-md-6"><a class="btn-cot" href="productos.php">
                                <p>Volver</p>
                            </a></div>

                    </div>
                    <div class="row pad1">
                        <table>
                            <thead>
                            <tr>
                                    <th>
                                        <p>Nombre</p>
                                    </th>
                                    <th>
                                        <p>Tipo</p>
                                    </th>
                                    <th>
                                        <p>categoria</p>
                                    </th>
                                    <th>
                                        <p>Precio</p>
                                    </th>
                                    <th>
                                        <p>garantia</p>
                                    </th>
                                    <th>
                                        <p>Estado</p>
                                    </th>
                                    <th>
                                        <p>Acciones</p>
                                    </th>
                                </tr>
                            </thead>
                            <form action="prod_add.php" method="post">
                            <tbody>
                                <tr>
                                    <td><input type="text" name="nom" id=""></td>
                                    <td><input type="text" name="tipo" id=""></td>
                                    <td>
                                      <select name="cat" id="">
                                          <option value="Lamina de proteccion solar">Lamina de proteccion solar</option>
                                          <option value="Servicio">Servicio</option>
                                          <option value="cat3">Categoria 3</option>
                                      </select>
                                    </td>
                                    <td><input type="text" name="pre" id=""></td>
                                    <td>
                                    <input type="number" name="gar" id="">
                                    </td>
                                    
                                    <td>
                                    <input type="checkbox" name="est" id="">
</td>
<td>
    <input type="submit" value="Ingresar">
</td>
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