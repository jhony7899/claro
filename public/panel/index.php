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
        <?php require('config/header.php'); ?>
        <div class="container-fluid bg-all">
            <div class="container">

                <?php
                if ($webpage == "index") {
                ?>

                    <h2 class="title1">Dash Board Seguro Celular Claro up</h2>
                    <!--
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
                -->
                    <?php
                    $r_usuarios = mysqli_query($con, "SELECT * FROM usuarios WHERE tipo = 'Vendedor'");
                    $t_usuarios = mysqli_num_rows($r_usuarios);

                    $r_act = mysqli_query($con, "SELECT * FROM activaciones");
                    $t_act = mysqli_num_rows($r_act); 

                    $r_token = mysqli_query($con, "SELECT * FROM token");
                    $t_token = mysqli_num_rows($r_token);

                    $r_gan = mysqli_query($con, "SELECT * FROM ganadores");
                    $t_gan = mysqli_num_rows($r_gan);

                    ?>
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1">
                                    <svg class="icon-db" width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5 9.5C5 7.01472 7.01472 5 9.5 5C11.9853 5 14 7.01472 14 9.5C14 11.9853 11.9853 14 9.5 14C7.01472 14 5 11.9853 5 9.5Z" />
                                        <path d="M14.3675 12.0632C14.322 12.1494 14.3413 12.2569 14.4196 12.3149C15.0012 12.7454 15.7209 13 16.5 13C18.433 13 20 11.433 20 9.5C20 7.567 18.433 6 16.5 6C15.7209 6 15.0012 6.2546 14.4196 6.68513C14.3413 6.74313 14.322 6.85058 14.3675 6.93679C14.7714 7.70219 15 8.5744 15 9.5C15 10.4256 14.7714 11.2978 14.3675 12.0632Z" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.64115 15.6993C5.87351 15.1644 7.49045 15 9.49995 15C11.5112 15 13.1293 15.1647 14.3621 15.7008C15.705 16.2847 16.5212 17.2793 16.949 18.6836C17.1495 19.3418 16.6551 20 15.9738 20H3.02801C2.34589 20 1.85045 19.3408 2.05157 18.6814C2.47994 17.2769 3.29738 16.2826 4.64115 15.6993Z" />
                                        <path d="M14.8185 14.0364C14.4045 14.0621 14.3802 14.6183 14.7606 14.7837V14.7837C15.803 15.237 16.5879 15.9043 17.1508 16.756C17.6127 17.4549 18.33 18 19.1677 18H20.9483C21.6555 18 22.1715 17.2973 21.9227 16.6108C21.9084 16.5713 21.8935 16.5321 21.8781 16.4932C21.5357 15.6286 20.9488 14.9921 20.0798 14.5864C19.2639 14.2055 18.2425 14.0483 17.0392 14.0008L17.0194 14H16.9997C16.2909 14 15.5506 13.9909 14.8185 14.0364Z" />
                                    </svg>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-number"><?php echo $t_usuarios; ?></span>
                                    <span class="info-box-text">Asesores <br>registrados</span>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1">
                                    <svg class="icon-db" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                        <style type="text/css">
                                            .st0 {
                                                fill: none;
                                            }
                                        </style>
                                        <path d="M12.1,2c-0.2,0-0.5,0.1-0.7,0.3l-2,1.8L6.9,3.7C6.3,3.6,5.8,4,5.7,4.6L5.3,7.1L3,8.3C2.5,8.6,2.3,9.2,2.5,9.7L3.7,12
	l-1.1,2.3c-0.2,0.5,0,1.1,0.4,1.4l2.3,1.2l0.4,2.5c0.1,0.6,0.6,0.9,1.2,0.9l2.5-0.4l1.8,1.8c0.4,0.4,1,0.4,1.4,0l1.8-1.8l2.5,0.4
	c0.6,0.1,1.1-0.3,1.2-0.9l0.4-2.5l2.3-1.2c0.5-0.3,0.7-0.9,0.4-1.4L20.3,12l1.1-2.3c0.2-0.5,0-1.1-0.4-1.4l-2.3-1.2l-0.4-2.5
	c-0.1-0.6-0.6-0.9-1.2-0.9l-2.5,0.4l-1.8-1.8C12.6,2.1,12.3,2,12.1,2z M9.9,7c0.6,0,1.1,0.2,1.4,0.6C11.7,8,11.8,8.4,11.8,9v0.5
	c0,0.6-0.2,1.1-0.5,1.4c-0.3,0.4-0.8,0.6-1.4,0.6S8.8,11.3,8.5,11C8.2,10.6,8,10.1,8,9.5V9c0-0.6,0.2-1,0.5-1.4S9.3,7,9.9,7z M9.9,8
	C9.7,8,9.5,8.2,9.4,8.3C9.3,8.5,9.2,8.7,9.2,9v0.5c0,0.3,0.1,0.5,0.2,0.7s0.3,0.3,0.5,0.3s0.4-0.1,0.5-0.3s0.2-0.4,0.2-0.7V9
	c0-0.3-0.1-0.5-0.2-0.7S10.1,8,9.9,8z M13.6,8l0.9,0.5l-4.1,7.6l-0.9-0.5L13.6,8z M14.1,12.5c0.6,0,1.1,0.2,1.4,0.6S16,14,16,14.5
	V15c0,0.6-0.2,1.1-0.5,1.4S14.7,17,14.1,17s-1.1-0.2-1.4-0.6s-0.5-0.9-0.5-1.4v-0.5c0-0.6,0.2-1,0.5-1.4S13.5,12.5,14.1,12.5z
	 M14.1,13.5c-0.2,0-0.4,0.1-0.5,0.3s-0.2,0.4-0.2,0.7V15c0,0.3,0.1,0.5,0.2,0.7s0.3,0.3,0.5,0.3c0.3,0,0.4-0.1,0.5-0.3
	s0.1-0.4,0.1-0.7v-0.5c0-0.3-0.1-0.5-0.2-0.7C14.5,13.6,14.3,13.5,14.1,13.5z" />
                                        <rect class="st0" width="24" height="24" />
                                    </svg>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-number"><?php echo $t_act; ?></span>
                                    <span class="info-box-text">Ventas totales <br>Seguro</span>
                                </div>

                            </div>

                        </div>



                        <!--<div class="clearfix hidden-md-up"></div>-->

                        <div class="col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1">
                                    <svg class="icon-db" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 21L5.04743 17.234C4.40205 16.8844 4 16.2094 4 15.4754V7.66667M12 21L18.9526 17.234C19.598 16.8844 20 16.2094 20 15.4754L20 7.66667M12 21V15M4 7.66667L11.0761 3.98118C11.6551 3.67962 12.3449 3.67962 12.9239 3.98118L20 7.66667M4 7.66667L9.36162 10.5709M20 7.66667L14.6384 10.5709M12 15C13.6569 15 15 13.6569 15 12C15 11.4826 14.869 10.9958 14.6384 10.5709M12 15C10.3431 15 9 13.6569 9 12C9 11.4826 9.13099 10.9958 9.36162 10.5709M14.6384 10.5709C14.1305 9.63523 13.1394 9 12 9C10.8606 9 9.8695 9.63523 9.36162 10.5709" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-number"><?php echo $t_token; ?></span>
                                    <span class="info-box-text">Tokens <br>generados </span>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1">
                                    <svg class="icon-db" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 23.382 23.382" xml:space="preserve">
                                        <g>
                                            <path d="M14.58,15.181c0.438-0.732,1.082-1.107,1.936-1.117c0.854-0.01,1.285-0.445,1.299-1.301
		c0.012-0.852,0.383-1.496,1.115-1.932c0.734-0.438,0.893-1.027,0.475-1.773c-0.416-0.744-0.416-1.488,0-2.234
		c0.418-0.744,0.26-1.332-0.475-1.77c-0.732-0.439-1.104-1.082-1.115-1.938c-0.014-0.852-0.445-1.287-1.299-1.297
		c-0.854-0.012-1.498-0.385-1.936-1.117c-0.438-0.734-1.027-0.893-1.771-0.475c-0.744,0.416-1.49,0.416-2.234,0
		C9.83-0.19,9.241-0.032,8.803,0.702C8.366,1.435,7.721,1.808,6.868,1.819c-0.852,0.01-1.285,0.445-1.297,1.297
		C5.557,3.972,5.186,4.614,4.454,5.054C3.72,5.492,3.559,6.079,3.979,6.824c0.418,0.746,0.418,1.49,0,2.234
		c-0.42,0.746-0.26,1.336,0.475,1.773c0.732,0.436,1.104,1.08,1.117,1.932c0.012,0.855,0.445,1.291,1.297,1.301
		c0.854,0.01,1.498,0.385,1.936,1.117c0.438,0.734,1.027,0.893,1.771,0.473c0.744-0.412,1.49-0.412,2.234,0
		C13.553,16.073,14.143,15.915,14.58,15.181z M11.694,12.614c-2.582,0-4.674-2.092-4.674-4.674c0-2.58,2.092-4.672,4.674-4.672
		c2.58,0,4.672,2.092,4.672,4.672C16.366,10.522,14.274,12.614,11.694,12.614z" />
                                            <path d="M6.793,14.749c-0.898,0-1.018-0.418-1.018-0.418l-3.507,6.893l2.812-0.316l1.555,2.34c0,0,3.24-6.76,3.24-6.715
		C8.196,16.491,8.864,14.794,6.793,14.749z" />
                                            <path d="M17.563,14.601c-2.562,0.268-2.041,0.904-2.627,1.398c-0.674,0.719-1.516,0.578-1.516,0.578l3.955,6.805l0.973-2.52
		l2.766,0.361L17.563,14.601z" />
                                            <polygon points="12.67,6.909 11.692,4.929 10.713,6.909 8.524,7.229 10.106,8.772 9.733,10.954 11.692,9.925 13.651,10.954 
		13.278,8.772 14.86,7.229 	" />
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                        </g>
                                    </svg>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-number"><?php echo $t_gan; ?></span>
                                    <span class="info-box-text">Premios <br>redimidos</span>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="registro pad2">
                                <div class="pad1">
                                    <p class="nom-cat">CAV con registros</span></p>
                                </div>
                                <div class="progress" style="height:27px">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <p>30/112</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-7">
                            <div class="controw  info-box">
                                <a href="ventas_informes.php">
                                    <div class="categoria pad2">
                                        <p class="nom-cat">Informes </span></p>
                                    </div>
                                </a>

                                <a href="ventas_por_asesor.php">
                                    <div class="categoria pad2">
                                        <p class="nom-cat">Ventas por asesor </span></p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="categoria pad2">
                                        <p class="nom-cat">Usuarios por día </span></p>
                                    </div>
                                </a>
                            </div>

                        </div>


                    </div>


                <?php
                } else {
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
                        <a class="boton-claro" href="config/aceptar.php?acepto=ok">
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