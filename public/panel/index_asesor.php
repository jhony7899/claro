<?php
include("config/session.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
<?php
include("config/head.php");
?>
<title>Los Imparables de Claro up</title>
</head>

<body>
<?php
include("config/conexion.php");
include("config/ruta.php"); 
?>
    <div class="contenedor">
<?php require ('config/header.php');?>
<div class="container-fluid bg-all">
<div class="container">

<?php
if($webpage == "index"){
?>

                <h2 class="title1">Dash Board Seguro Celular Claro up</h2>
                <div class="controw">
                    <div class="pad2">
                        <div class="cont-block b01 pad4">
                            <p class="text-1">1044</p>
                            <p class="text-2">Asesores registrados</p>
                        </div>
                    </div>
                    <div class="pad2">
                        <div class="cont-block b02 pad4">
                            <p class="text-1">30/112</p>
                            <p class="text-2">CAV con registros</p>
                        </div>
                    </div>
                    <div class="pad2">
                        <div class="cont-block b03 pad4">
                            <p class="text-1">2567</p>
                            <p class="text-2">Ventas totales Seguro</p>
                      
                        </div>
                    </div>
                    <div class="pad2">
                        <div class="cont-block b04 pad4">
                            <p class="text-1">123</p>
                            <p class="text-2">Premios redimidos</p>
                        </div>
                    </div>
                </div>
                <div class="cont-form">

                    <div class="controw">
                        <div class="pad4">
                            <div class="cont-img"><img src="images/residencial.png" alt="">

                                <p class="nom-cat">Ventas por CAV </span></p>
                            </div>
                        </div>
                        <div class="pad4">
                            <div class="cont-img"><img src="images/building.png" alt="">

                                <p class="nom-cat">Ventas por asesor  </span></p>
                            </div>
                        </div>
                        <div class="pad4">
                            <div class="cont-img"><img src="images/automotriz.png" alt="">

                                <p class="nom-cat">Usuarios por día </span></p>
                            </div>
                        </div>
                        <div class="pad4">
                            <div class="cont-img"><img src="images/maritima.png" alt="">

                                <p class="nom-cat">Tokens  generados </span></p>
                            </div>
                        </div>
                    </div>

                </div>
<?php
}else{
?>
<div class="cont-inicio pad4">
<div class="title-inicio">
    <P><span class="title-1">BIENVENIDO </span><span class="title-11">IMPARABLE</span></P>
    <p class="title-2">Es un placer tenerte en la plataforma</p>
</div>
<div class="video-inicio">
<iframe src="https://player.vimeo.com/video/76979871?autoplay=1&loop=1&autopause=0&muted=1" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
</div>
<div class="text-bottom">
    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing<br>
industries for previewing layouts and visual mockups.
</p>
</div>
<a  class="boton-claro" href="config/aceptar.php?acepto=ok">
    <p>ACEPTO EL RETO</p>
</a>

</div>
        <div class="col-1 pad1">
            </div>

<?php
}

?>
            
      
        </div>
    </div>
</body>

</html>