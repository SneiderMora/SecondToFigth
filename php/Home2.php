<?php

require 'conexion.php';

$Sql = 'SELECT * FROM personajes';

$Resultado = mysqli_query($conect,$Sql);

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
     <li> <a href="#"> Contactanos </a> </li>
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
       <div class="TextoLightBox TitleQueSomos">¿QUIÉNES SOMOS?</div>
       <article class="TextoLightBox InfoQueSomos">
         Second To Fight, es un aplicativo web el cual está conformado como un Juego, diseñado para páginas web el cual estará relacionado con dispositivos móviles; el móvil tendrá conexión con el juego con varios consejos e interacciones de realidad aumentada con el navegador web requerido y así poder relacionarse con los personajes en el juego. El Desarrollo argumental del juego está basado en la historia del boxeo y su introducción a los juegos olímpicos desde sus orígenes, teniendo este Juego diversos niveles y dificultades.<br>
         <br>

         Nuestro objetivo es afianzar sus conocimientos sobre el deporte del Boxeo, mediante un juego interactivo el cual consta de diversas formas de aprendizaje para el usuario, concretando datos con mayor facilidad y un entendimiento más preciso a la hora de interactuar con nuestro contenido.
       </article>

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
       <div class="TextoLightBox TitleHistoria"> HISTORIA </div>
       <article class="TextoLightBox InfoHistoria">
         ¿Quién no quisiera controlar el tiempo?, ¿quién no quisiera retroceder o avanzar en el tiempo para solucionar problemas o ver qué cosas debería hacer para que toda salga como lo tenía planeado? <br>
         Era lo que pensaba aquel joven de 13 años, un joven que quería solucionar problemas que había causado, para poder hacer las cosas correctamente. Un joven que había perdido a su padre, un joven que quería cambiar eso. Desde pequeño busco la forma de encontrar la manera de controlar el tiempo, su curiosidad por este tema lo llevó a ser una de las personas con mejor conocimiento sobre el tiempo en el mundo.<br>
         Por esta razón el chico fue llamado por un grupo de científicos que estaban comenzando un proyecto para poder controlar el tiempo. Ellos querían controlar el tiempo por meros motivos de ciencia, para hacer evolucionar a la humanidad. El equipo estaba conformado por: Tres adultos, un viejo y una chica de la misma edad que él.<br>
         Cada uno con los mismos propósitos o, eso creían.<br>
         El chico aceptó entrar al equipo, diciendo que también tenía el mismo propósito que ellos, pero no era así, él solo quería recuperar lo que había perdido.

       </article>

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
     <h2>¿Qué Somos?</h2>
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

 <!-- Botones Comienzo y Continuar -->
 <div class="Botones Start"><a href="Start.html"> Comenzar </a></div>

 <div class="Botones Continue"> Continuar </div>

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



       <!-- FIN SLIDERAARON -->

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
   </body>
 </html>
