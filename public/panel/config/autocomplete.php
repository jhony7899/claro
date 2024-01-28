
    <?php 
    
    
     $con_cli=mysqli_query($con,"SELECT * FROM cliente  WHERE usuario LIKE '$consulta1'");
        while($cli=mysqli_fetch_array($con_cli)){
            $cli_nom=$cli['nom'];
            $cli_cod=$cli['cod'];
  echo "<option value='".$cli_cod."'>".$cli_nom." - ".$cli_cod."</option>"; } ?>