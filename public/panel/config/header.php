<?php
$conuser=mysqli_query($con,"SELECT * FROM usuarios");
while($sel=mysqli_fetch_array($conuser)){
    $selid=$sel['id'];
   
    if($selid == $id_usuario){
        $user_name=$sel['nom']." ".$sel['ape'];;
        $seltipo=$sel['tipo'];
        $user_cod=$sel['cod'];
        $user_cc=$sel['cc'];
        $inicio=$sel['inicio'];
        $user_email=$sel['email'];
        $user_avatar=$sel['avatar'];
        $user_ciu=$sel['ciu'];
        $user_cav=$sel['cav'];
    }
}
if($seltipo == "Vendedor"){
    $none="none";
    $none2="";
    $disabled="disabled";
    $disabled2="";
    $consulta1=$user_cod."%";
    $volver="ingresar_activaciones_asesor.php";

    if(isset($inicio) && !empty($inicio)){
$webpage="index";
    }else{
        $webpage="inicio";
    }
}
if($seltipo == "Administrador"){
    $none="";
    $none2="";
    $disabled="";
    $disabled2="";
    $consulta1="cod%";
    $webpage="index";
    $volver="acceso.php";
}
if($seltipo == "Usuario"){
    $none="";
    $none2="none";
    $disabled="";
    $disabled2="disabled";
    $consulta1="cod%";
    $webpage="index";
}  

?>
<div class="header">
<header>
    <div class="container ">
            <div class="row">
                <div class="col-2">
                    <div class="cont-img">
                        <div class="pad2"></div>
                        <img src="assets/images/logoseguro.png" alt="">
                    </div>
                </div>
                
                <div class="col-3">
                    
                </div>
                <div class="col-2">
                    <div class="cont-img">
                        <img src="assets/images/Logo_LosImparables_2023.png"    width="auto">
                    </div>
                </div>
                <div class="col-5">
                    <div class="config_boton"> 
                    <div class="salir"><a href="config/cerrar.php"><span class="icon-power"></span></a></div>
                    <div class="salir"><a href="acceso_edit.php?id=<?php echo $id_usuario;?>"><span class="icon-mode-edit" alt="Editar"></span></a></div>
                    </div>
                    
                </div>
            </div>
            </div>
        </header>
        <div class="subheader">
            <div class="desk">
            
                <nav>
                    <div class="row">
                        <div class="menu">
                        <?php
$principal=$seltipo;
$punto=".php";
$cont=0;

$con_menu=mysqli_query($con,"SELECT * FROM menu");
while($menu=mysqli_fetch_array($con_menu)){
    $menu_id=$menu['id'];
    $menu_nombre=$menu['nombre'];
    $menu_url=$menu['url'];
    $menu_pagina=$menu['pagina'];
    $menu_ubi=$menu['ubi'];
    $page=$menu_url . $menu_pagina . $punto;

    if($ruta2 == $page){
        $active="active";
    }
    else{
        $active=" "; 
    }

    if($menu_ubi==$principal){
?> 
        <div class="elemento e<?php echo $menu_id." ".$active;?>"><a href="<?php echo $page;?>"><?php echo $menu_nombre; ?></a></div>
<?php
    $cont=$cont+1;
    }else{
        }
    }


                    ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
</div>
<div class="header_movile">
<nav class="navbar subheader fixed-top">
  <div class="container-fluid">
    <div class="logomobile">
        <img src="assets/images/favicon.png" alt="">
    </div>
    <a class="navbar-brand" href="#">Los Imparables</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
         
          <?php
$principal=$seltipo;
$punto=".php";
$cont=0;

$con_menu=mysqli_query($con,"SELECT * FROM menu");
while($menu=mysqli_fetch_array($con_menu)){
    $menu_id=$menu['id'];
    $menu_nombre=$menu['nombre'];
    $menu_url=$menu['url'];
    $menu_pagina=$menu['pagina'];
    $menu_ubi=$menu['ubi'];
    $page=$menu_url . $menu_pagina . $punto;

    if($ruta == $page){
        $active="active";
    }
    else{
        $active=" "; 
    }

    if($menu_ubi==$principal){
?>
    <li class="nav-item <?php echo $active;?>">
            <a class="nav-link active" aria-current="page" href="<?php echo $page;?>"><?php echo $menu_nombre; ?></a>
          </li>
<?php
    $cont=$cont+1;
    }else{
        }
    }


                    ?>
        </ul>
      </div>
    </div>
  </div>
</nav>
</div>
       