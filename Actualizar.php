<?php
$Name = $_POST["Nombre"];
$Email = $_POST["correo"];
$Age = $_POST["edad"];
$Password = $_POST["Contra"];
$Vid = $_POST["ident"];



require ("conexion.php");
$sql = "UPDATE jugador SET name_stf = '$Name', correo_stf= '$Email', edad_stf= '$Age', contra_stf= '$Password' WHERE ID_stf = '$Vid' ";
$result = mysqli_query($conect, $sql);









echo "<script> location.href='edit.php' </script>";





?>