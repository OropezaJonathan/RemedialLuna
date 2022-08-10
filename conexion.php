<?php

$conexion = new mysqli ("localhost", "root", "", "alumnosC");
mysqli_query($conexion, "SET NAMES 'utf8'");
if (!$conexion){
  echo ("Fallo en la conexion de BD");
}


?>