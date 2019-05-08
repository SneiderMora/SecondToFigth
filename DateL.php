<?php 

$name = $_POST["correo"];
$password = $_POST["contra"];

$link = mysqli_connect("localhost","root","root","stf_web") or die("Conncetion error");

$sql = "SELECT * FROM sesion WHERE usuario= '$name' AND clave = '$password'";
$result = mysqli_query($link,$sql);

$count = mysqli_num_rows($result);
if ($count == 1) {
	session_start();
	$_SESSION["usuario"] = $name;
	echo "<script> location.href='Administrador.php' </script>";
}
else{
	echo "<script> location.href='sesion.php?error=dato' </script>";
}

mysqli_close($link);
 ?>