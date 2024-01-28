<?php
session_start();

if(!$_SESSION){
echo '<script language= javascript>
          alert ("Registrate o Inicia Sesion")
          self.location = "http://losimparablesdeclaroup.com/"
	  </script>';
}
$id_usuario=$_SESSION['id_usuario'];
?>