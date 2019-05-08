<?php



$correo = $_POST["correo"];
$pass = $_POST["pass"];

require "conexion.php";

$sql = "SELECT * FROM jugadores WHERE correo_stf = '$correo' AND contra_stf = '$pass'";
$result = mysqli_query($conect, $sql);

$count = mysqli_num_rows($result);

if ($count == 1){
	session_start();
	$_SESSION["correo"] = $correo;
	//header("Location: editor.php");
echo "<script> location.href='../HomeUsu.php'</script>";

}else{
	//header("Location: login.php?error=dato");
echo "<script> location.href='Home.php?error=dato'</script>";
	
}

mysqli_close($conect);










  ?>