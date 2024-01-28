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
        <?php require('config/header.php'); ?>
        <div class="container-fluid bg-all">
            <div class="row">
                <div class="col-md-1 pad1">

                </div>
                <div class="col-md-10 pad4">
                    <div class="cont-form">
                        <div class="row pad1">
                            <div class="col-md-6">
                                <h2 class="title1">Agregar Usuarios</h2>
                            </div>
                            <div class="col-md-6"><a class="btn-cot" href="acceso.php">
                                    <p>Volver</p>
                                </a></div>

                        </div>
                        <form action="acceso_add.php" method="post">
                            <div class="formulario pad2">
                                <div class="row pad1">
                                    <div class="col-md-3"><label for="">Nombre</label> <input type="text" name="nom" id=""></div>
                                    <div class="col-md-3"><label for="">Apellido</label> <input type="text" name="ape" id=""></div>
                                    <div class="col-md-3"><label for="">Cedula</label> <input type="text" name="cc" id=""></div>
                                    <div class="col-md-3"><label for="">Contraseña</label> <input type="text" name="pass" id=""></div>
                                </div>
                                <div class="row pad1">
                                    <div class="col-md-4"><label for="">Email</label> <input type="text" name="email" id=""></div>
                                    <div class="col-md-3"><label for="">Ciudad</label>
                                        <?php
                                        // Paso 1: Conectar a la base de datos
                                        $conexion = mysqli_connect('localhost', 'losimpar_claro_user', 'xilionx31047371134', 'losimpar_claro_db');

                                        if (!$conexion) {
                                            die('Error de conexión: ' . mysqli_connect_error());
                                        }

                                        // Paso 2: Obtener datos para el primer select
                                        $query = "SELECT id, nombre FROM ciudades";
                                        $resultado = mysqli_query($conexion, $query);

                                        if (!$resultado) {
                                            die('Error en la consulta: ' . mysqli_error($conexion));
                                        }


                                        echo "<select id='primerSelect' class='form-control' name='ciu' onchange='cargarSegundoSelect()'>";
                                        echo "<option value=''>Selecciona...</option>";

                                        while ($fila = mysqli_fetch_assoc($resultado)) {
                                            /*     if ($user_ciu == $fila['nombre']) {
                              $selected = "selected";
                            } else {
                              $selected = "";
                            }*/
                                            echo "<option value='{$fila['id']}' {$selected}>{$fila['nombre']}</option>";
                                        }

                                        echo "</select>";


                                        ?>
                                    </div>
                                    <div class="col-md-3"><label for="">CAV</label>
                                        <?php
                                        // Paso 3: Configurar evento onchange y crear contenedor para el segundo select
                                        echo "<div id='segundoSelectContainer'>
                            <select  class='form-control'><option value=''>Selecciona la Ciudad</option></select>
                            </div>";
                                        ?>
                                    </div>
                                    <div class="col-md-1"><label for="">Tipo</label> 
                                       <select name="tipo" id="">
                                        <option value="Administrador">Administrador</option>
                                        <option value="Vendedor">Vendedor</option>
                                       </select>
                                </div>
                                    <div class="col-md-1"><label for="">Estado</label>
                                    <select name="est" id="">
                                        <option value="on">Activo</option>
                                        <option value="off">Inactivo</option>
                                       </select>
                                </div>
                                </div>
                                <div class="row pad2">
                                    <div class="config_botons">
                                        <div class="salir"><input type="submit" value="AGREGAR"></div>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
                <div class="col-md-1 pad1">

                </div>
            </div>
        </div>
    </div>
    <script>
    // Paso 3: Función JavaScript para cargar el segundo select dinámicamente
    function cargarSegundoSelect() {
      var primerSelectValue = document.getElementById('primerSelect').value;

      // Verificar si se seleccionó una opción en el primer select
      if (primerSelectValue !== '') {
        // Enviar solicitud AJAX para obtener opciones para el segundo select
        $.ajax({
          type: 'POST',
          url: 'obtener_opciones.php', // Archivo PHP que manejará la solicitud AJAX
          data: {
            id: primerSelectValue
          },
          success: function(response) {
            // Actualizar el contenido del contenedor del segundo select
            document.getElementById('segundoSelectContainer').innerHTML = response;
          }
        });
      } else {
        // Limpiar el contenido del segundo select si no se seleccionó ninguna opción en el primero
        document.getElementById('segundoSelectContainer').innerHTML = '';
      }
    }
  </script>
</body>

</html>