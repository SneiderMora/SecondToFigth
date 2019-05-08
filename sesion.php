<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=1.0">
	<title>Login Administrador</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilosLogin.css">
	<link rel="shortcut icon" href="img/admin.png" type="image/x-icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">	


	
</head>
<body class="fondo">


	<div class="opacidad" >
		<div class="jumbotron Login">
			<h1>Iniciar Sesión</h1>
			<p class="lead">Ingresa tu usuario</p>
			<hr class="my-4">

			<form action="DateL.php" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">Correo </label>
					<input type="emailt" class="form-control" name="correo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com">
					<small id="emailHelp" class="form-text text-muted"><h8><b>Su usuario es solo para usted, no debe compartir ni revelar su información.</b></h8> </small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">
						Contraseña
					</label>
					<input type="password" name="contra" class="form-control contra" id="exampleInputPassword1" placeholder="Contraseña">
				</div>
				<button type="submit" class="btn btn-outline-info w-100 enviar">Enviar
				</button><br><br>
				<input type="button" class="btn btn-outline-danger w-100 atras" value="Ir a la pagína Principal" onclick=" location.href='php/Home.php'">
			</form>
		</div>
		<div class="msj">
			<?php 
			if (isset($_GET["error"])) {
	  echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>";
	  echo "<strong>ERROR!!!   </strong>";
	  echo "Los datos NO son Correctos";
	  echo "<button type='button' class='close'";
	  echo "data-dismiss='alert' aria-label='Close'>";
	  echo "<span aria-hidden='true'>&times;</span>";
	  echo "</button>";
	  echo "</div>";
				
			}
			

			 ?>
		</div>




















	</div>


	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/codigo.js"></script>
</body>
</html>