<?php
session_start();
session_destroy();
include("ruta.php");
/*if($_SESSION['username'])
{
session_destroy();
echo '<script language= javascript>
          alert ("Su Sesion ha terminado")
	  self.location = "index.php"
	  </script>';
}
else{
echo '<script language= javascript>
          alert ("no a iniciado sesion por favor registrese")
	  self.location = "index.php"
	  </script>';
}*/

echo '<script language= javascript>
          alert ("Su Sesion ha terminado")
	  self.location = "http://losimparablesdeclaroup.com/"
	  </script>';
?>