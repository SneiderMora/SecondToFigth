<?php

$IDinfo = $_GET["InfoID"];

require 'conexion.php';

$Sql = "SELECT * FROM personajes WHERE ID = '$IDinfo'";

$Resultado = mysqli_query($conect,$Sql);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=1.0">
	<title>Bienvenido Administrador</title>
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
		<div><h5 class="display-5">Personajes</h5></div>
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

	<h1 class="display-3">EDICION DE PERSONAJES</h1>
	<hr>

	<form action="Update.php" enctype="multipart/form-data" method="post">
		<h3> <small>Nombre del Personaje</small></h3>
		<input type="text" name="Name" value="<?php   $row = mysqli_fetch_Array($Resultado); echo $row["Nombre"]; ?>">
			<br>
		<h3> <small>Descripcion del Personaje</small></h3>
		<textarea name="Description" rows="8" cols="80"><?php echo $row["Descripcion"]; ?></textarea>
		<br>

		<h3> <small>Titulo de la informacion:</small></h3>
		<input type="text" name="TitleCode" value="<?php echo $row["Titulo"]; ?>">

		<h3> <small>Información del codigo</small></h3>
		<textarea name="DescriptionCode" rows="8" cols="80"><?php echo $row["Codigo"]; ?></textarea>
		<br>

		<h3> <small>Cambiar Imagen del personaje</small></h3>
		<input type="file" name="Photo" value="<?php echo $row["Foto"]; ?>">
		<br><br>

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
