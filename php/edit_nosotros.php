<?php

require 'conexion.php';

$Sql = 'SELECT * FROM personajes';

$sql2 = "SELECT * FROM historia";

$sql3 = "SELECT * FROM nosotros";

$Resultado = mysqli_query($conect,$Sql);

$Resultado2 = mysqli_query($conect, $sql2);

$Resultado3 = mysqli_query($conect, $sql3);


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=1.0">
	<title>Nosotros</title>
	<link rel="stylesheet" type="text/css" href="../Bs/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Bs/StyleAdmin.css">

	<link rel="shortcut icon" href="../Img/Assets/admin.png" type="image/x-icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



</head>

<section class="MiniMenu row justify-content-center">
  <h4 class="display-6 m-2 my-3 col-lg-12"> <img src="../Img/Assets/img.jpg"  width="40px" height="40px" alt=""> Usuario</h4>
    <br>
    <div class="col-lg-10 row justify-content-center align-items-center Out">
							<a href="../salir.php" class="m-1">
									<i class="fas fa-sign-out-alt icon"></i>
									<span>Salir</span>
							</a>
			</div>

    </div>
<hr>
</section>

<body class="fondo row">



<header class="Header container-fluid row col-lg-12 text-center mx-0">

	<section class="col-lg-12 row d-flex justify-content-between p-3 mx-1">
		<div><h5 class="display-5"><img src="../Img/Assets/logo.png" alt="" width="50px">Second To Fight</h5></div>
		<div><h5 class="display-5">Nosotros</h5></div>
		<div class="UserImg" ><a href="#" onclick="Sacar()" ondblclick="Cerrar()"> <img src="../Img/Assets/img.jpg" width="40px;" height="40px;" alt="">	</a></div>

	</section>



</header>

<section class="Contenidos col-lg-3">
	<a href="#"><h3 class="display-5 my-1 mx-2 font-weight-light"><i class="fas fa-home icon mx-4"></i>Inicio</h3></a>
	<a href="#"><h3 class="display-6 my-1 mx-2 font-weight-light"><i class="fas fa-comments icon mx-4"></i>Contactos</h3></a>
	<hr>
	<h4 class="display-6 mx-2 font-weight-bold">Secciones</h4>
	<a href="#"><h3 class="display-6 my-1 mx-2 font-weight-light"><i class="fas fa-edit icon mx-4"></i>Historia</h3></a>
	<a href="#"><h3 class="display-6 my-1 mx-2 font-weight-light"><i class="fas fa-edit icon mx-4"></i>Nosotros</h3></a>
	<a href="#"><h3 class="display-6 my-1 mx-2 font-weight-light"><i class="fas fa-edit icon mx-4"></i>Personajes</h3></a>
	<hr>
</section>

<section class="Datos col-lg-9">

	<h1 class="display-3">EDICION DE LA HISTORIA</h1>
	<hr>

	<form action="Update3.php" enctype="multipart/form-data" method="post">
		<h3> <small>Nosotros</small></h3>
		<input type="text" name="Name" value="<?php   $row = mysqli_fetch_Array($Resultado3); echo $row["Nosotros"]; ?>">
			<br>
		<h3> <small>Descripción</small></h3>
		<textarea name="Description" rows="8" cols="80"><?php echo $row["Descripcion"]; ?></textarea>
		<br>
		<input type="hidden" name="Identificador" value="<?php echo $row['ID']; ?>">


		<input type="submit" name="" value="Actualizar">




	</form>

</section>









	<script src="../BsJs/jquery-3.3.1.min.js"></script>
	<script src="../BsJs/bootstrap.min.js"></script>
	<script src="../BsJs/bootstrap.bundle.min.js"></script>
	<script src="../BsJs/Code.js"></script>
</body>
</html>
