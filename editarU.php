<?php

require ("conexion.php");

$iduser = $_GET["IdPerson"];

$sql = "SELECT * FROM jugadores WHERE ID_stf = '$iduser'";

$result = mysqli_query($conect, $sql);

$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=1.0">
	<title>Editar Usuario</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilosContactos.css">
	<link rel="shortcut icon" href="img/admin.png" type="image/x-icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">	


	
</head>
<body class="fondo">



	<div class="User">
		<div class="header2">
			<div id="avatar" width= "40px" height= "40px">
				<div class="shadow2">
					<img src="img/mario.jpg" width="35px" height="35px">			
				</div>
			</div>
			<div class="name">Administrador</div>


		</div>
		<div class="container">
			<div class="salir">
				<div class="icono">
							<a href="salir.php">
								<button class="but">
									<i class="fas fa-sign-out-alt icon"></i>
									<span>Salir</span>
								</button>
							</a>
						</div>
			</div>
		</div>
		
	</div>

	<section>

		<div id="Contenedor">

			<div id="Menu">
			<button id="button"><i class="fas fa-user-edit fa-2x"></i></button>
			</div>

			<div id="Logo">
				
			<a href="#">
			<img src="img/Logo.png" width="70px" height="28px"> SECOND TO FIGHT
			</a>
			</div>

			<div class="admin">
				<h3>Edición De Usuario</h3>
			</div>

			<div>
				<div class="buttons">
					<a href="php/Home.php">
						<div class="home">
							<i class="fas fa-home fa-2x">
								
							</i>
						</div>
					</a>
					<a href="#">
						<div id="Usuario" onclick="Sacar()" ondblclick="Cerrar()">

							<button class="cuenta" >
								<div class="shadow">

									<img src="img/mario.jpg" width="35px" height="35px">
									
								</div>
								
							</button>
							
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="secciones">
			<div class="Contenedor">
				<div id="Header">
					<div class="section">

						<div class="icono">
							<a href="Administrador.php">
								<button class="but">
									<i class="fas fa-home icon"></i>
									<span>Inicio</span>
								</button>
							</a>
						</div>

						<div class="icono">
							<a href="Contactos.php">
								<button id="button2">
									<i class="fas fa-comments icon"></i>
									<span>Contactos</span>
								</button>
							</a>
						</div>
					</div>

					<div class="section2">
						<span class="set">SECCIONES</span>

						<div class="icono">
							<a href="php/historia.php">
								<button class="but">
									<i class="fas fa-edit icon"></i>
									<span>Historia</span>
								</button>
							</a>
						</div>

						<div class="icono">
							<a href="#">
								<button class="but">
									<i class="fas fa-edit icon"></i>
									<span>Nosotros</span>
								</button>
							</a>
						</div>
						<div class="icono">
							<a href="#">
								<button class="but">
									<i class="fas fa-edit icon"></i>
									<span>Personajes</span>
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="BIEN">
			<form action="update.php" method="post">
				<fieldset>
					<legend>Editar al Usuario: <b>  <?php echo $row["nombre_stf"]; ?></b></legend><br>
					<input  type="hidden" name="ident" value="<?php echo $row['ID_stf'];?>">
					<h5 class="No">Nombre de usuario:</h5>
					<input type="text" name="Nombre" value="<?php echo $row["nombre_stf"]; ?>"><br><br>
					<h5 class="No">Correo:</h5>
					<input type="email" name="correo" value="<?php echo $row["correo_stf"]; ?>"><br><br>
					<h5 class="No">Introduce una edad:</h5>
					<input type="number" name="edad" value="<?php echo $row["edad_stf"]; ?>"><br><br>
					<h5 class="No">Cambiar Contraseña:</h5>
					<input type="text" name="Contra" value="<?php echo $row["contra_stf"]; ?>"><br><br>
					<input type="submit" class="btn btn-outline-danger" value="Enviar">
				</fieldset>
			</form>
		</div>

	</section>




	


	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/codigo.js"></script>
</body>
</html>