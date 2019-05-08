<?php


$Asunto = $_POST["asunto"];
$Coment = $_POST["Comen"];
$id = $_POST["ident"];

require ("conexion.php");

$sql = "SELECT * FROM jugadores WHERE ID_stf = $id";


$result = mysqli_query($conect, $sql);

$row = mysqli_fetch_array($result);


//To
$Correo = $row['correo_stf'];

//Subject
$Asunto = "Asunto:" . $Asunto;

//Message
$Mensaje = "Descripción:" . $Coment;

//type
$TypeMessage = "Content-type:text/html;charset=UTF-8";

mail($Correo, $Asunto, $Mensaje, $TypeMessage);

//
echo "Su mensaje ha sido enviado exitosamente: " . $Correo;

echo "<script> location.href='Contactos.php' </script>";


 ?>