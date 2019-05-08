<?php

require ("conexion.php");

$sql = "SELECT * FROM jugadores";

$result = mysqli_query($conect, $sql);

$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=1.0">
	<title>Contactos</title>
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
				<h3>Usuarios registrados</h3>
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
							<a href="#">
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
							<a href="php/nosotros.php">
								<button class="but">
									<i class="fas fa-edit icon"></i>
									<span>Nosotros</span>
								</button>
							</a>
						</div>
						<div class="icono">
							<a href="php/Admin2.php">
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
			<table class="table table-striped table-dark">
  <thead>
    <tr>
    <th scope="col">Usuario</th>
    <th scope="col">Correo</th>
    <th scope="col">Edad</th>
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>
    <th scope="col">Mensaje</th>
    </tr>
  </thead>
  <tbody>

  	<?php 

  	while ($row = mysqli_fetch_array($result))
  	{

      echo "<tr><td>".$row["nombre_stf"]. "</td>";
      echo "<td>".$row["correo_stf"]. "</td>";
      echo "<td>".$row["edad_stf"]. "</td>";

      echo "<td><a href='editarU.php?IdPerson=". $row["ID_stf"]."'>";
      echo "<i class='far fa-edit fa-2x editar'></a></i></td>";
      echo "<td><a href='Eliminar.php?IdPerson=". $row["ID_stf"]."'>";
      echo "<i class='fas fa-trash-alt fa-2x Eliminar' ></i></td>";
      echo "<td><a href='Mensaje.php?IdPerson=". $row["ID_stf"]."'>";
      echo "<i class='far fa-comments fa-2x Mensaje'></i></td>";
      echo "</tr>";
  	}




  	 ?>
    
  </tbody>
</table>
		</div>

		

	</section>




	


	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/codigo.js"></script>
</body>
</html>