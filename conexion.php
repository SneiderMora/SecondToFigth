<?php 
require "datos.php";
$conect = mysqli_connect($sevidorBD, $userBD, $contra, $nombreBD);
$Language = mysqli_set_charset($conect,"utf8");

?>