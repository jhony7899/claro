<?php
include("config/session.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  include("config/head.php");
  ?>
  <!--<link rel='stylesheet' href='https://sass-template.calvinong.tech/css/common.css'>
   <link rel="stylesheet" href="assets/ruleta/style.css">-->
  <link rel="stylesheet" href="ruleta/css/estilo.css">
  <title>Jugar Ruleta</title>
</head>

<body>

  <?php
  include("config/conexion.php");
  include("config/ruta.php");
  ?>
  <div class="contenedor">

    <?php

    require('config/header.php');

    ?>


    <div class="container-fluid bg-all" style="padding-top:50px;">
      <div class="container">
        <div class="validartoken" id="validartoken">
          <div class="validador pad2 cont-form">
            <p>Para poder participar seleccione un tóken del siguiente listado</p>

            <select name="usar_token" id="usar_token">
              <option value="">Selecciona un Token</option>
              <?php
              $con_token = mysqli_query($con, "SELECT * FROM token WHERE id_asesor = '$user_cc'");
              while ($token = mysqli_fetch_array($con_token)) {
                $cod_token = $token['cod'];
                $estado_token = $token['estado'];

                if ($estado_token == "on") {
                  echo  "<option value='" . $cod_token . "'>" . $cod_token . "</option>";
                }
              } ?>
            </select>
            <input type="submit" value="USAR" id="btnusar">

            <script>

            </script>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 pad2">

          </div>
          <div class="col-md-6 pad2">
            <div id="app">
              <div id="premio">
                <p class="elije">Presiona sobre la Ruleta para girar</p>

                <form id="formulario" method="POST">

                  <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $user_cc; ?>">
                  <input type="hidden" id="premios" name="premio" value="">
                  <input type="hidden" id="cant" name="cant" value="">
                  <input type="hidden" id="token" name="token" value="">
                </form>

              </div>
              <div class="contenedor_rueda">
                <div class="vara"></div>
                <div class="spinbtn">Girar</div>
                <div class="wheel">
                  <?php
                  $cont = 1;

                  for ($i = $cont; $i <= 12; $i++) {
                    $con_prem = mysqli_query($con, "SELECT * FROM premios WHERE cant > 0 ORDER BY RAND() LIMIT 1");
                    while ($prem = mysqli_fetch_array($con_prem)) {
                      $prem_nombre = $prem['display_name'];
                      $prem_cant = $prem['cant'];
                      $prem_foto = $prem['foto'];



                  ?>
                      <input type="hidden" name="" value="<?php echo $prem_nombre; ?>" id="premio<?php echo $i; ?>">
                      <input type="hidden" name="" value="<?php echo $prem_cant; ?>" id="cant_premio<?php echo $i; ?>">
                      <input type="hidden" name="" value="<?php echo $prem_foto; ?>" id="foto_premio<?php echo $i; ?>">
                      <div class="number number<?php echo $i; ?>" style="--i: <?php echo $i; ?>;"><span><?php echo $prem_nombre; ?></span></div>
                  <?php

                    }
                  }


                  ?>
                </div>
              </div>

              <script src="ruleta/js/script.js"></script>

              <div class="base">
                <img src="ruleta/image/base.png" alt="">
              </div>
              <div>

              </div>

              <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

            </div>
          </div>

          <div class="col-md-3 pad2">

          </div>
        </div>

      </div>
    </div>
  </div>
</body>

</html>