<div class="avatars pad2" id="avatars">
    <div class="btnavatar" onclick="cerrar1()">
        <span class="icon-close" alt="Editar"></span>
    </div>
    <?php
    for ($i = 1; $i <= 18; $i++) {
        $avatar = "imagenes/user/avatar/avt" . $i . ".png";
        if ($avatar == $user_avatar) {
            $style = "style='background: #a31e14;'";
        } else {
            $style = "";
        }
    ?>
        <div class="avatarimg cont-img img_avatar<?php echo $i; ?>" <?php echo $style; ?> id="img_avatar<?php echo $i; ?>">
            <input type="hidden" value="<?php echo $avatar; ?>" id="avatar<?php echo $i; ?>">
            <div class="img-bg" style="background-image: url(<?php echo $avatar; ?>);background-position:center;">
                <img src="assets/images/bg_300.png" alt="">
            </div>
        </div>
    <?php
    }
    ?>
    <form action="cambiar_avatar.php" method="POST">
        <div class="cont-btn">
            <input type="hidden" name="id" value="<?php echo $user_cc; ?>">
            <input type="hidden" name="avatar" value="" id="cargar_avatar">
            <input type="submit" value="Cambiar Avatar" style="margin: 4px;" class="btn-cot">
        </div>
    </form>
    <script>
        //let btnavatar = document.getElementById("btnavatar");
        

        function abrir() {
            let avatars = document.getElementById("avatars");
            avatars.style.display = "flex";
        }

        function cerrar1() {
            let avatars = document.getElementById("avatars");
            avatars.style.display = "none";
        }
    </script>
    <SCRIPT>
        for (let i = 1; i < 19; i++) {
            document.getElementById("img_avatar" + i).addEventListener("click", myFunction);


            function myFunction() {


                document.getElementById("img_avatar" + i).style.backgroundColor = "#D52B1E"

                avatar = document.getElementById("avatar" + i).value
                document.getElementById("cargar_avatar").value = avatar;
                console.log(i);

                for (var a = 1; a < 19; a++) {

                    if (a == i) {

                    } else
                        document.getElementById("img_avatar" + a).style.backgroundColor = "transparent"
                }

            }

        }
    </SCRIPT>
</div>
<div class="update" id="update">
<form action="profile_update.php" method="POST">
    <div class="cont_update pad2">
        <div class="btnavatar" onclick="cerrar()">
            <span class="icon-close" alt="Editar"></span>
        </div>
       
       <div class="cont-form pad1">
       <?php
                                    // Paso 1: Conectar a la base de datos
                                    
                                    if (!$conexion) {
                                        die('Error de conexión: ' . mysqli_connect_error());
                                    }

                                    // Paso 2: Obtener datos para el primer select
                                    $query = "SELECT id, nombre FROM ciudades";
                                    $resultado = mysqli_query($conexion, $query);

                                    if (!$resultado) {
                                        die('Error en la consulta: ' . mysqli_error($conexion));
                                    }


                                    echo "<select id='primerSelect' class='form-control' name='ciudad' onchange='cargarSegundoSelect()'>";
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
       <div class="cont-form pad1">
       <?php
                                    // Paso 3: Configurar evento onchange y crear contenedor para el segundo select
                                    echo "<div id='segundoSelectContainer'>
                            <select  class='form-control'><option value=''>Selecciona la Ciudad</option></select>
                            </div>";
                                    ?>
       </div>
       <div class="cont-form pad1">
       <input type="hidden" name="id" value="<?php echo $id_usuario; ?>">
                                    <input type="submit" value="Cambiar" class="btn-cot">
       </div>
       </div>
        </form>
        <script>
            /*let cambiarcav = document.getElementById("cambiarcav");
            cambiarcav.addEventListener("click", cambiar);*/

            function cambiar() {

                let update = document.getElementById("update");
                update.style.display = "flex";
            }

            /*let cerrar = document.getElementById("cerrar");
            cerrar.addEventListener("click", cerrar);*/

            function cerrar() {

                let update = document.getElementById("update");
                update.style.display = "none";
            }
        </script>
   
</div>