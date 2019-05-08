<?php

require 'conexion.php';

$Sql = 'SELECT * FROM personajes';

$sql2 = "SELECT * FROM historia";

$Resultado = mysqli_query($conect,$Sql);

$Resultado2 = mysqli_query($conect, $sql2);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=1.0">
	<title>Historia</title>
	<link rel="stylesheet" type="text/css" href="../Bs/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Bs/estilosAdmin2.css">
	<link rel="shortcut icon" href="../Img/Assets/admin.png" type="image/x-icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



</head>
<body class="fondo">



	<div class="User">
		<div class="header2">
			<div id="avatar" width= "40px" height= "40px">
				<div class="shadow2">
					<img src="../Img/mario.jpg" width="35px" height="35px">
				</div>
			</div>
			<div class="name">Administrador</div>


		</div>
		<div class="container">
			<div class="salir">
				<div class="icono">
							<a href="../salir.php">
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
			<img src="../Img/Assets/Logo.png" width="70px" height="28px"> SECOND TO FIGHT
			</a>
			</div>

			<div class="admin">
				<h3>Historia</h3>
			</div>

			<div>
				<div class="buttons">
					<a href="Home.php">
						<div class="home">
							<i class="fas fa-home fa-2x">

							</i>
						</div>
					</a>
					<a href="#">
						<div id="Usuario" onclick="Sacar()" ondblclick="Cerrar()">

							<button class="cuenta" >
								<div class="shadow">

									<img src="../Img/mario.jpg" width="35px" height="35px">

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
							<a href="../Administrador.php">
								<button class="but">
									<i class="fas fa-home icon"></i>
									<span>Inicio</span>
								</button>
							</a>
						</div>

						<div class="icono">
							<a href="../Contactos.php">
								<button class="but">
									<i class="fas fa-comments icon"></i>
									<span>Contactos</span>
								</button>
							</a>
						</div>
					</div>

					<div class="section2">
						<span class="set">SECCIONES</span>

						<div class="icono">
							<a href="#">
								<button id="button2">
									<i class="fas fa-edit icon"></i>
									<span>Historia</span>
								</button>
							</a>
						</div>

						<div class="icono">
							<a href="nosotros.php">
								<button class="but">
									<i class="fas fa-edit icon"></i>
									<span>Nosotros</span>
								</button>
							</a>
						</div>
						<div class="icono">
							<a href="admin2.php">
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
			<table class="table  table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Historia</th>
      <th scope="col">Editar</th>

    </tr>
  </thead>
  <tbody>


    <tr>
      <th scope="row">1</th>
      <td><?php   $row = mysqli_fetch_Array($Resultado2); echo $row["Titulo"] ?></td>

      <td> <a href="edit_historia.php?InfoID=<?php echo $row['ID']?>" > <i class='far fa-edit fa-2x editar'></i></i></a> </td>
     

    </tr>
   

    
  </tbody>
</table>
		</div>



	</section>







	<script src="../BsJs/jquery-3.3.1.min.js"></script>
	<script src="../BsJs/bootstrap.min.js"></script>
	<script src="../BsJs/bootstrap.bundle.min.js"></script>
	<script src="../BsJs/codigo.js"></script>
</body>
</html>
