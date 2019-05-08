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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Second To Fight</title>
    
    <!-- Font Awesome -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/regular.css" integrity="sha384-ZlNfXjxAqKFWCwMwQFGhmMh3i89dWDnaFU2/VZg9CvsMGA7hXHQsPIqS+JIAmgEq" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
    <!-- End Font Awesome -->

    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../Img/Logos/Marcas_Imagenes/FavIcon/STF16x16.png" sizes="16x16">
  </head>
  <body>

<!-- Welcome -->
<section class="Welcome">
</section>
<!-- End Welcome -->

<!-- MENU EXPANDIBLE -->

<div class="LightBoxMenu">

<div class="Menu">
  <h3>MENU</h3>

  <ul>
    <li> <a href="#Carrousel" id="BtnPersonajesMenu"> Personajes </a> </li>
    <li> <a href="#" id="BtnHistoriaMenu"> Historia </a> </li>
    <li> <a href="#" id="BtnQuienesSomosMenu"> ¿Quiénes somos? </a> </li>
    <li> <a href="#Carrousel" id="BtnRaMenu"> Realidad Aumentada </a> </li>
    <li> <a href="../Administrador.php"> Contactanos </a> </li>
  </ul>

</div>

</div>




<!--  FIN MENU EXPANDIBLE -->



<!-- Start LightBox Ver mas -->

  <div class="LightBox VerMas">

    <div class="TextVerMas">

      <div class="CloseSeeMore">
        X
      </div>

      <div class="TextoLightBox STF"> SECOND TO FIGHT </div>

         <?php 
  
    

while ($row = mysqli_fetch_array($Resultado3)) { 


     echo  "<div class='TextoLightBox TitleQueSomos'>";
     echo $row["Nosotros"] ." </div>";
     echo "<article class='TextoLightBox InfoQueSomos'>";
     echo $row["Descripcion"];

      echo "</article>";
      } ?>


    </div>

  </div>

<!-- Start LightBox Ver mas -->

<!-- Start LightBox Historia -->

  <div class="LightBoxHistoria">

    <div class="TextHistoria">

      <div class="CloseHistoria">
        X
      </div>


      <div class="TextoLightBox STF"> SECOND TO FIGHT </div>

      <?php 
  
    

while ($row = mysqli_fetch_array($Resultado2)) { 


     echo  "<div class='TextoLightBox TitleHistoria'>";
     echo $row["Titulo"] ." </div>";
     echo "<article class='TextoLightBox InfoHistoria'>";
     echo $row["Historia"];

      echo "</article>";
      } ?>

    </div>

  </div>

<!-- End LightBox Historia -->

<!-- START HOME -->
  <!-- SECTION 1 LEFT -->
<section class="Seccion Info">
  <div id="ComebackHome">
  </div>
<!-- LOGO -->
  <header class="Logo">
    <img src="../Img/Logos/Marcas_Imagenes/Imagotipo/IMAGOTIPO_STF-OFFICIAL.png" width="240px" height="240px" alt="Logo">
  </header>

<!-- TITLE -->
  <div class="Title">
    <h2>¿QUIÉNES SOMOS?</h2>
  </div>

<!-- TEXT INFO -->
  <div class="Information">
    <p>Second To Fight, es una experiencia jugable, donde el usuario ira descubriendo toda una historia basada en la evolución del boxeo.<br>
    La historia se irá desarrollando a través de nuestro personaje principal Theo, que tendrá que aventurarse en el tiempo para lograr su objetivo.</p>
  </div>

  <div class="btnSeeMore"><button id="SeeMore" > Ver Más </button></div>


</section>
  <!-- END SECTION 1 LEFT -->



  <!-- SECTION 2 RIGHT -->
<section class="Seccion Comienzo">

  <div class="AnimationBack"></div>


<!-- Menu -->
<div class="ButtonMenu">
  <div class="SpaceLine">

    <!-- tres lineas principaes -->
    <div class="Lines Linea1"></div>
    <div class="Lines Linea2"></div>
    <div class="Lines Linea3"></div>
    <!-- tres lineas principaes -->

    <!-- Lineas Hover -->
    <div class="LineUp"></div>
    <div class="LineDown"></div>
    <div class="LineLeft"></div>
    <div class="LineRight"></div>
    <!-- Lineas Hover -->

  </div>
</div>


<!-- Boton Personajes -->
<div class="Historia">
  <div class="SpaceHistory">

    <!-- Lineas de historia -->

      <div class="LinesH Linea1H"></div>
      <div class="LinesV Linea1V"></div>
      <div class="LinesH Linea2H"></div>
      <div class="LinesV Linea2V"></div>
      <div class="LinesH Linea3H"></div>

    <!-- Lineas de historia -->
  </div>

</div>

<!-- Botones Comienzo y Continuar 
<div class="Botones Start">Comenzar</div>-->


  
  
    <button type="button" class="Botones Start" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Comenzar</button> 


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INGRESE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form action="registrar.php" method="post">
        <div class="form-group">
        <label for="exampleInputName1">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su Nombre" name="nombre">
        
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Correo</label>
        <input type="email" class="form-control" id="exampleInputPassword1" placeholder=" Ingrese su Correo" name="correo">
        </div>



        <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="pass">
        </div>

        <div class="form-group ">
        <label for="exampleInputPassword1">Edad</label>
        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su edad" name="edad">
        </div>


        <br>
        <button type="submit" class="btn btn-outline-danger w-100">Enviar</button>
    </form>


      </div>
      <div class="modal-footer">
      </div>
       </div>
      </div>
    </div>



    <button type="button" class="Botones Continue" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Continuar</button> 


    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INGRESE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form action="baseDatos.php" method="post">

        <div class="form-group">
        <label for="exampleInputEmail1">Correo</label>
        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Correo" name="correo">
        </div>



        <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="pass">
        </div>


        <br>
        <button type="submit" class="btn btn-outline-danger w-100">Submit</button>
    </form>


      </div>
      <div class="modal-footer">
      </div>
       </div>
      </div>
    </div>






<a href="#Carrousel"><div id="Bajar"> <i class="fas fa-caret-down"></i> </div></a>

</section>
  <!-- END SECTION 2 RIGHT -->
<!-- END HOME -->


<div class="Clean"></div>


<!-- START SECTION CHARACTERS -->
<section class="InfoPersonajes">


<!-- Section Info -->

<!-- Flechas  -->
        <div class="Flechas Izquierda">
          <p> <i class="fas fa-caret-left"></i> </p>
        </div>

        <div class="Flechas Derecha">
          <p> <i class="fas fa-caret-right"></i> </p>
        </div>
<!-- Fin Flechas  -->

<div id="Carrousel"> <!-- Comienzo de Carrousel -->

<!-- COMIENZO SLIDERAARON -->

         <!-- Slider -->
   <!-- Titulos -->

        <?php
        //COMIENZO Slider Aaron

            $row = mysqli_fetch_Array($Resultado);
            echo "<div class='SliderAaron'>";
            echo "<div class='TitlePersonajes'>
              <p>";
            echo $row["Nombre"];
            echo " </p>
           </div>";

           echo "  <article class='Text Character'>" . $row["Descripcion"] . "</article>";

           echo "<div class='ImgPersonaje'" .
            "style='background-image: url(" . $row["Foto"] .
            ");background-size: cover;'>" .
           "</div>";

           echo " <div class='TitleCodigo'>
              <p>" . $row["Titulo"] . "</p>
            </div>";

            echo "<article class='Codigo'>
              <p>" . $row["Codigo"] . "</p>
            </article>";

            echo "<div class='ImgCodigo'>
            </div>";

            echo "</div>";

          //Fin Slider Aaron

          //COMIENZO Slider April

            $row = mysqli_fetch_Array($Resultado);
                echo "<div class='SliderApril'>";
                echo "<div class='TitlePersonajes'>
                  <p>";
                echo $row["Nombre"];
                echo " </p>
               </div>";

               echo "  <article class='Text Character'>" . $row["Descripcion"] . "</article>";

               echo "<div class='ImgPersonaje'" .
                "style='background-image: url(" . $row["Foto"] .
                ");background-size: cover;'>" .
               "</div>";

               echo " <div class='TitleCodigo'>
                  <p>" . $row["Titulo"] . "</p>
                </div>";

                echo "<article class='Codigo'>
                  <p>" . $row["Codigo"] . "</p>
                </article>";

                echo "<div class='ImgCodigo'>
                </div>";

                echo "</div>";

                //FIn Slider April

                //COMIENZO Slider Luke

                  $row = mysqli_fetch_Array($Resultado);
                      echo "<div class='SliderLuke'>";
                      echo "<div class='TitlePersonajes'>
                        <p>";
                      echo $row["Nombre"];
                      echo " </p>
                     </div>";

                     echo "  <article class='Text Character'>" . $row["Descripcion"] . "</article>";

                     echo "<div class='ImgPersonaje'" .
                      "style='background-image: url(" . $row["Foto"] .
                      ");background-size: cover;'>" .
                     "</div>";

                     echo " <div class='TitleCodigo'>
                        <p>" . $row["Titulo"] . "</p>
                      </div>";

                      echo "<article class='Codigo'>
                        <p>" . $row["Codigo"] . "</p>
                      </article>";

                      echo "<div class='ImgCodigo'>
                      </div>";

                      echo "</div>";

                      //FIn Slider Luke

                      //COMIENZO Slider Amelia

                        $row = mysqli_fetch_Array($Resultado);
                            echo "<div class='SliderAmelia'>";
                            echo "<div class='TitlePersonajes'>
                              <p>";
                            echo $row["Nombre"];
                            echo " </p>
                           </div>";

                           echo "  <article class='Text Character'>" . $row["Descripcion"] . "</article>";

                           echo "<div class='ImgPersonaje'" .
                            "style='background-image: url(" . $row["Foto"] .
                            ");background-size: cover;'>" .
                           "</div>";

                           echo " <div class='TitleCodigo'>
                              <p>" . $row["Titulo"] . "</p>
                            </div>";

                            echo "<article class='Codigo'>
                              <p>" . $row["Codigo"] . "</p>
                            </article>";

                            echo "<div class='ImgCodigo'>
                            </div>";

                            echo "</div>";

                            //FIn Slider Amelia

                            //COMIENZO Slider Giles

                              $row = mysqli_fetch_Array($Resultado);
                                  echo "<div class='SliderGiles'>";
                                  echo "<div class='TitlePersonajes'>
                                    <p>";
                                  echo $row["Nombre"];
                                  echo " </p>
                                 </div>";

                                 echo "  <article class='Text Character'>" . $row["Descripcion"] . "</article>";

                                 echo "<div class='ImgPersonaje'" .
                                  "style='background-image: url(" . $row["Foto"] .
                                  ");background-size: cover;'>" .
                                 "</div>";

                                 echo " <div class='TitleCodigo'>
                                    <p>" . $row["Titulo"] . "</p>
                                  </div>";

                                  echo "<article class='Codigo'>
                                    <p>" . $row["Codigo"] . "</p>
                                  </article>";

                                  echo "<div class='ImgCodigo'>
                                  </div>";

                                  echo "</div>";

                                  //FIn Slider Giles

                                  //COMIENZO Slider Theo

                                    $row = mysqli_fetch_Array($Resultado);
                                        echo "<div class='SliderTheo'>";
                                        echo "<div class='TitlePersonajes'>
                                          <p>";
                                        echo $row["Nombre"];
                                        echo " </p>
                                       </div>";

                                       echo "<article class='Text Character'>" . $row["Descripcion"] . "</article>";

                                       echo "<div class='ImgPersonaje'" .
                                        "style='background-image: url(" . $row["Foto"] .
                                        ");background-size: cover;'>" .
                                       "</div>";

                                       echo " <div class='TitleCodigo'>
                                          <p>" . $row["Titulo"] . "</p>
                                        </div>";

                                        echo "<article class='Codigo'>
                                          <p>" . $row["Codigo"] . "</p>
                                        </article>";

                                        echo "<div class='ImgCodigo'>
                                        </div>";

                                        echo "</div>";

                                        //FIn Slider Theo






         ?>

                    <!-- FIN DE SLIDERTHEO -->

</div> <!-- Fin De Carrousel -->

  <!-- Footer -->
  <footer id="End">
    <div id="Copyright">
      <p>Design by <b>SECOND TO FIGHT</b> - 2018</p>
    </div>

    <div id="Contact">
      <div id="Facebook">
        <i class="fab fa-facebook-f"></i>
      </div>
      <div id="Instagram">
        <i class="fab fa-instagram"></i>
      </div>
      <div id="Gmail">
        <i class="far fa-envelope"></i>
      </div>

      <p class="InFooter Home"><a href="../Administrador.php">Administrador</a></p>
      <p class="InFooter About">Sobre Nosotros</p>
      <p class="InFooter TalkUs">Contáctanos</p>
      <p class="InFooter Home"><a href="#ComebackHome">Inicio</a></p>
     
    </div>
  </footer>
  <!-- End Footer -->
</section>
<!-- END SECTION CHARACTERS -->

<!-- Incio De Script -->

<script src="../js/Code.js" type="text/javascript"></script>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script src="../js/bootstrap.min.js"></script>
  </body>
</html>
