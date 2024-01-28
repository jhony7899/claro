<?php
$var="submenu";

$con_menu2=mysqli_query($con,"SELECT * FROM menu");
while($menu2=mysqli_fetch_array($con_menu2)){
    $menu_id=$menu2['id'];
    $menu_nombre=$menu2['nombre'];
    $menu_url=$menu2['url'];
    $menu_pagina=$menu2['pagina'];
    $menu_subpagina=$menu2['sub_pagina'];
    $menu_ubi=$menu2['ubi'];
    $page=$menu_url . $menu_pagina . $menu_subpagina . $punto;

    if($ruta == $page){
        $active="active";
    }
    else{
        $active=" ";
    }

    if($menu_ubi==$var && $web == $menu_pagina){
?> 
        <a href="<?php echo $page;?>"><div class="submenu <?php echo $active;?>"><?php echo $menu_nombre; ?></div></a>
<?php
    $cont=$cont+1;
    }else{
        }
    }
?>