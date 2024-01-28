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
                                        <p>tipo</p>
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
                            <form action="prod_update.php" method="post">
                            <tbody>
                                <?php
                                $id=$_GET['id'];
                            $check1="";
                            $con_prod=mysqli_query($con,"SELECT * FROM productos");
                            while($prod=mysqli_fetch_array($con_prod)){
                             $prod_id=$prod['id'];

                             if($prod_id == $id){
                             $prod_nom=$prod['nombre'];
                             $prod_tipo=$prod['tipo'];
                             $prod_cat=$prod['categoria'];
                             $prod_pre=$prod['precio'];
                             $prod_gar=$prod['garantia'];
                             $prod_est=$prod['est'];
                              if($prod_est == "on"){$check1="checked";}else{$check1="";}
                            }}

        
     
    ?> 

                                <tr>
                                    <td><input type="text" name="nom" id="" placeholder="<?php echo $prod_nom;?>"></td>
                                    <td><input type="text" name="tipo" id="" placeholder="<?php echo $prod_tipo;?>"></td>
                                    <td>
                                      <select name="cat" id="">
                                      <?php

// Array simple:
$array = array("Peliculas de Control", "Servicios", "Otro");
$count = count($array);
for ($i = 0; $i < $count; $i++) {
     if($array[$i] == $prod_cat){
         $selected = "selected";
     }else{
         $selected="";
     }
    echo "<option value='" . $array[$i] ."' ".$selected.">" . $array[$i] ."</option>";
}
?>
                                          
                                          
                                      </select>
                                    </td>
                                    <td><input type="text" name="pre" id="" placeholder="<?php echo $prod_pre;?>"></td>
                                    <td>
                                    <input type="number" name="gar" id="" placeholder="<?php echo $prod_gar;?>">
                                    </td>
                                    
                                    <td>
                                    <input type="checkbox" name="est" id="" <?php echo $check1;?>>
</td>
<td>
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <input type="submit" value="Modificar">
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