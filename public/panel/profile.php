<?php
include("config/session.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  include("config/head.php");
  ?>
  <title>Perfil</title>
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
       
       <div class="cont-user">
         <div class="row">
         <div class="col-md-4 ">
             <div class="user mt-3">
               <div class="btnavatar" onclick="abrir()">
                 <span class="icon-mode-edit" alt="Editar"></span>
               </div>
               <div class="user-body">
                 <div class="user-flex flex-column align-items-center text-center">

                   <img src="<?php echo $user_avatar; ?>" alt="Admin" class="rounded-circle" width="150">
                   <div class="mt-3">
                     <h4>Imparable ORO</h4>
                     <p class="text-secondary mb-1">
                       <?php
                       $cont_act = 0;
                       $con_act = mysqli_query($con, "SELECT * FROM activaciones WHERE user_id = '$user_cc'");
                       $cont_act = mysqli_num_rows($con_act);
                       ?>


                       <?php echo $cont_act; ?> ACTIVACIONES

                     </p>


                   </div>
                 </div>
               </div>
             </div>
             <div class="user mt-3">
               <ul class="list-group list-group-flush">
                 <li class="list-group-item user-flex justify-content-between align-items-center flex-wrap">
                   <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                       <circle cx="12" cy="12" r="10"></circle>
                       <line x1="2" y1="12" x2="22" y2="12"></line>
                       <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">

                       </path>
                     </svg> Premios</h6>

                 </li>

                 <?php
                 $con_gan = mysqli_query($con, "SELECT * FROM ganadores WHERE id_cliente = '$user_cc' LIMIT 0,5");
                 while ($gan = mysqli_fetch_array($con_gan)) {
                   $gan_id = $gan['id_cliente'];
                   $gan_premio = $gan['id_premio'];
                   $gan_fecha = $gan['fecha'];
                 ?>
                   <li class="list-premios">

                     <span class="text-prem"><?php echo $gan_premio; ?></span>
                     <span class="text-prem"><?php echo $gan_fecha; ?></span>
                   </li>
                 <?php
                 }
                 ?>

                 <li class="list-group-item user-flex justify-content-between align-items-center flex-wrap">
                   <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                       <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">

                       </path>
                     </svg>Reconocimientos </h6>
                   <span class="text-secondary">ORO Dicimebre 20</span>
                 </li>

               </ul>
             </div>
           </div>
           <div class="col-md-8">
             <div class="user  mt-3">
               <div class="user-body">
                 <div class="row">
                   <div class="col-sm-3">
                     <h6 class="mb-0">Email</h6>
                   </div>
                   <div class="col-sm-9 text-secondary">
                     <?php echo $user_email; ?>
                   </div>
                 </div>
                 <hr>
                 <div class="row">
                   <div class="col-sm-3">
                     <h6 class="mb-0">Cédula</h6>
                   </div>
                   <div class="col-sm-9 text-secondary">
                     <?php echo $user_cc; ?>
                   </div>
                 </div>
                 <hr>
                 <div class="cont-form row">
                   <div class="col-sm-3">
                     <h6 class="mb-0">CAV</h6>
                   </div>
                   <div class="col-sm-6 text-secondary">
                     <h6 class="mb-0">
                      <?php
                       $r_ciu = mysqli_query($con, "SELECT * FROM ciudades WHERE id = '$user_ciu'");                                       
                       while ($ciudades = mysqli_fetch_array($r_ciu)) {
                           $ciudad = $ciudades['nombre'];
                       }
                       $r_cav = mysqli_query($con, "SELECT * FROM cavs WHERE id = '$user_cav'");                                       
                       while ($cav = mysqli_fetch_array($r_cav)) {
                           $cavs = $cav['cav']; 
                       }
                       echo $ciudad . " - " . $cavs; 
                       ?>
                    
                    </h6>

                   </div>
                   <div class="col-sm-3">
                     <div class="btn-cot" id="cambiarcav" onclick="cambiar()">Editar CAV</div>
                   </div>
                 </div>
                 <hr>
                 <div class="row">
                   <div class="col-sm-3">
                     <h6 class="mb-0">Direccion</h6>
                   </div>
                   <div class="col-sm-9 text-secondary">
                     Bogota DC
                   </div>
                 </div>
                 <hr>
               </div>
             </div>
<?php  include("metas.php"); ?>
             <div class="row">
               <div class="col-sm-6 ">
                 <div class="user mt-3 h-100">
                   <div class="user-body">
                     <h6 class="user-flex align-items-center "><i class="material-icons mr-2">Primer Semestre</i></h6>
                     <small>Enero <?php echo $ene; ?>%</small>
                     <div class="progress " style="height: 15px">
                       <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $ene; ?>%" aria-valuenow="<?php echo $ene; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <small>Febrero <?php echo $feb; ?>%</small>
                     <div class="progress " style="height: 15px">
                       <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $feb; ?>%" aria-valuenow="<?php echo $feb; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <small>Marzo <?php echo $mar; ?>%</small>
                     <div class="progress " style="height: 15px">
                       <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $mar; ?>%" aria-valuenow="<?php echo $mar; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <small>Abril <?php echo $abr; ?>%</small>
                     <div class="progress " style="height: 15px">
                       <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $abr; ?>%" aria-valuenow="<?php echo $abr ?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <small>Mayo <?php echo $may; ?>%</small>
                     <div class="progress " style="height: 15px">
                       <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $may; ?>%" aria-valuenow="<?php echo $may; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <small>Junio <?php echo $jun; ?>%</small>
                     <div class="progress " style="height: 15px">
                       <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $jun; ?>%" aria-valuenow="<?php echo $jun; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-sm-6 ">
                 <div class="user mt-3 h-100">
                   <div class="user-body">
                     <h6 class="user-flex align-items-center "><i class="material-icons mr-2">Segundo Semestre</i></h6>
                     <small>Julio <?php echo $jul; ?>%</small>
                     <div class="progress " style="height: 15px">
                       <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $jul; ?>%" aria-valuenow="<?php echo $jul; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <small>Agosto <?php echo $ago; ?>%</small>
                     <div class="progress " style="height: 15px">
                       <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $ago; ?>%" aria-valuenow="<?php echo $ago; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <small>Septiembre <?php echo $sep; ?>%</small>
                     <div class="progress " style="height: 15px">
                       <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $sep; ?>%" aria-valuenow="<?php echo $sep; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <small>Octubre <?php echo $oct; ?>%</small>
                     <div class="progress " style="height: 15px">
                       <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $oct; ?>%" aria-valuenow="<?php echo $oct; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <small>Noviembre <?php echo $nov; ?>%</small>
                     <div class="progress " style="height: 15px">
                       <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $nov; ?>%" aria-valuenow="<?php echo $nov; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <small>Diciembre <?php echo $dic; ?>%</small>
                     <div class="progress " style="height: 15px">
                       <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $dic; ?>%" aria-valuenow="<?php echo $dic; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>



           </div>
         </div>

       </div>
       <?php require ('prof.php');?>
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