<?php
include("config/session.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include("config/head.php");
    ?>
    <script src="https://cdn.tiny.cloud/1/z2aagh8l5sum079fpwsfck231odprqt5qz1eilknl43t5395/tinymce/6/tinymce.min.js"></script>


    <title>Terminos y Condiciones</title>
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
                $r_arch = mysqli_query($con, "SELECT * FROM archivo");
                while ($arch = mysqli_fetch_array($r_arch)) {

                    $tipo = $arch['tipo'];
                    $contenido = $arch['contenido'];

                    if ($tipo == "term") {
                        $term = $contenido;
                    }
                    if ($tipo == "cond") {
                        $cond = $contenido;
                    }
                }
                ?>
                <div class="termsandcond">
                    <div class="title-all">
                        <img src="assets/images/term.png" alt="" width="300px">
                        <?php if($seltipo == "Administrador"){?>
                            <div class="btneditar" onclick="abrir1()">
                            <span class="icon-mode-edit" alt="Editar"></span>
                        </div>

                        <?php }else{}  ?>
                       
                    </div>
                    <div class="archivo">
                        <?php echo $term; ?>
                    </div>
                    <?php if($seltipo == "Administrador"){?>
                    <div class="avatars pad2" id="terminos">
                        <div class="btneditar" onclick="cerrar1()">
                            <span class="icon-close" alt="Editar"></span>
                        </div>

                        <form action="archivo_update.php" method="POST">

                            <textarea name="contenido" id="myTextarea1">
                            <?php echo $term; ?>
                            </textarea>
                            <div class="cont-btn">
                                <input type="hidden" name="tipo" value="term" id="">
                                <input type="submit" value="Actualizar Terminos" style="margin: 4px;" class="btn-cot">
                            </div>

                        </form>
                        <script>
                            //let btnavatar = document.getElementById("btnavatar");


                            function abrir1() {
                                let avatars = document.getElementById("terminos");
                                avatars.style.display = "flex";
                            }

                            function cerrar1() {
                                let avatars = document.getElementById("terminos");
                                avatars.style.display = "none";
                            }
                        </script>
                        <script>
                            tinymce.init({
                                selector: '#myTextarea1'
                            });
                        </script>
                    </div>
                    <?php }else{}  ?>
                </div>
                <div class="termsandcond">

                    <div class="title-all">
                        <img src="assets/images/condi.png" alt="" width="300px">
                        <?php if($seltipo == "Administrador"){?>
                        <div class="btneditar" onclick="abrir2()">
                            <span class="icon-mode-edit" alt="Editar"></span>
                        </div>
                        <?php }else{}  ?>
                    </div>
                    <div class="archivo">
                        <?php echo $cond; ?>
                    </div>
                    <?php if($seltipo == "Administrador"){?>
                    <div class="avatars pad2" id="condiciones">
                        <div class="btneditar" onclick="cerrar2()">
                            <span class="icon-close" alt="Editar"></span>
                        </div>

                        <form action="archivo_update.php" method="POST">

                            <textarea name="contenido" id="myTextarea2">
                            <?php echo $cond; ?>
                            </textarea>
                            <div class="cont-btn">
                                <input type="hidden" name="tipo" value="cond" id="">
                                <input type="submit" value="Actualizar Condiciones" style="margin: 4px;" class="btn-cot">
                            </div>


                        </form>
                        <script>
                            //let btnavatar = document.getElementById("btnavatar");


                            function abrir2() {
                                let avatars = document.getElementById("condiciones");
                                avatars.style.display = "flex";
                            }

                            function cerrar2() {
                                let avatars = document.getElementById("condiciones");
                                avatars.style.display = "none";
                            }
                        </script>
                        <script>
                            tinymce.init({
                                selector: '#myTextarea2'
                            });
                        </script>

                    </div>
                    <?php }else{}  ?>
                </div>

            </div>





            <div class="col-md-1 pad1">

            </div>
        </div>
    </div>
</body>

</html>