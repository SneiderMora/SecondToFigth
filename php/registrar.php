<?php



$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$pass = $_POST["pass"];
$edad = $_POST["edad"];

require "conexion.php";

$sql = "INSERT INTO `jugadores`(`ID_stf`, `nombre_stf`, `correo_stf`, `contra_stf`, `edad_stf`) VALUES (NULL, '$nombre', '$correo', '$pass', '$edad')";

$result = mysqli_query($conect, $sql);

//echo "<script> location.href='../Home.php?registro=dato'</script>";



$sql1 = "SELECT * FROM jugadores WHERE correo_stf = '$correo' AND contra_stf = '$pass'";
$result1 = mysqli_query($conect, $sql1);

$count = mysqli_num_rows($result1);

if ($count == 1){
	session_start();
	$_SESSION["correo"] = $correo;
	//header("Location: editor.php");
echo "<script> location.href='../HomeUsu.php?registro=dato'</script>";

}
else{

echo "<script> location.href='Home.php?registro=dato'</script>";

}
mysqli_close($conect);

 ?>
