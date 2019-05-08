<?php 

$iduser = $_GET["IdPerson"];

require "conexion.php"; 
$Sql = "DELETE FROM jugadores WHERE ID_stf='$iduser'";
$Result = mysqli_query($conect, $Sql);


echo "<script> location.href='Contactos.php' </script>";

?> 