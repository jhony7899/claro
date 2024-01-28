<?php
include("conexion.php");
$con = mysqli_connect($host, $users, $pw, $db);

$id = $_GET["id"];
$base = $_GET["base"];
$page = $_GET["page"];

if (isset($_GET['cod']) && !empty($_GET['cod'])) {
    $cod = $_GET['cod'];
    $cod_page1 = "&cod=" . $cod;
    $cod_page2 = "?cod=" . $cod;
} else {
    $cod_page1 = "";
    $cod_page2 = "";
}




if ($base == "usuarios") {
    $title1 = "este Usuario";
    $title2 = "El Usuario";
}

if ($base == "premios") {
    $title1 = "este Premio";
    $title2 = "El Usuario";
}

if ($base == "activaciones") {
    $title1 = "esta Activación";
    $title2 = "La Activación";
}

if ($base == "cliente") {
    $title1 = "este Cliente";
    $title2 = "El Cliente";
}


if (isset($_GET['si']) && !empty($_GET['si'])) {





    mysqli_query($con, "DELETE FROM $base WHERE id='$id'");

    echo '<script language= javascript>
          alert ("' . $title2 . ' se ha eliminado correctamente")
	  self.location = "../' . $page . ".php" . $cod_page2 . '"
	  </script>';
} else {

    echo '<script>
      if (confirm("¿Estás seguro de que deseas eliminar ' . $title1 . '?")) {
        self.location = "borrar.php?id=' . $id . '&base=' . $base . '&page=' . $page . '&si=si' . $cod_page1 . '"
      } else{
        self.location = "../' . $page . ".php" . $cod_page2 . '"
    }
    </script>';
}










/*












*/
