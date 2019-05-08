-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 24-04-2019 a las 12:07:02
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `stf_web`
--
CREATE DATABASE IF NOT EXISTS `stf_web` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `stf_web`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE `historia` (
  `ID` int(2) NOT NULL,
  `Titulo` varchar(30) NOT NULL,
  `Historia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`ID`, `Titulo`, `Historia`) VALUES
(1, 'Historia', '¿Quién no quisiera controlar el tiempo?, ¿quién no quisiera retroceder o avanzar en el tiempo para solucionar problemas o ver qué cosas debería hacer para que toda salga como lo tenía planeado? \r\nEra lo que pensaba aquel joven de 13 años, un joven que quería solucionar problemas que había causado, para poder hacer las cosas correctamente. Un joven que había perdido a su padre, un joven que quería cambiar eso. Desde pequeño busco la forma de encontrar la manera de controlar el tiempo, su curiosidad por este tema lo llevó a ser una de las personas con mejor conocimiento sobre el tiempo en el mundo.\r\nPor esta razón el chico fue llamado por un grupo de científicos que estaban comenzando un proyecto para poder controlar el tiempo. Ellos querían controlar el tiempo por meros motivos de ciencia, para hacer evolucionar a la humanidad. El equipo estaba conformado por: Tres adultos, un viejo y una chica de la misma edad que él.\r\nCada uno con los mismos propósitos o, eso creían.\r\nEl chico aceptó entrar al equipo, diciendo que también tenía el mismo propósito que ellos, pero no era así, él solo quería recuperar lo que había perdido.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `ID_stf` int(3) NOT NULL,
  `nombre_stf` varchar(150) NOT NULL,
  `correo_stf` varchar(50) NOT NULL,
  `contra_stf` varchar(20) NOT NULL,
  `edad_stf` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`ID_stf`, `nombre_stf`, `correo_stf`, `contra_stf`, `edad_stf`) VALUES
(1, 'nom', 'correo', 'pass', 12),
(13, 'Mateoeditado', 'mateocaeditadoaho@gmail.com', 'hola', 40),
(21, 'marioeeedit', 'msssdf@gmail.com', '123', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nosotros`
--

CREATE TABLE `nosotros` (
  `ID` int(11) NOT NULL,
  `Nosotros` varchar(30) NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nosotros`
--

INSERT INTO `nosotros` (`ID`, `Nosotros`, `Descripcion`) VALUES
(1, '¿QUIÉNES SOMOS? editado', 'editado Second To Fight, es un aplicativo web el cual está conformado como un Juego, diseñado para páginas web el cual estará relacionado con dispositivos móviles; el móvil tendrá conexión con el juego con varios consejos e interacciones de realidad aumentada con el navegador web requerido y así poder relacionarse con los personajes en el juego. \r\n\r\nEl Desarrollo argumental del juego está basado en la historia del boxeo y su introducción a los juegos olímpicos desde sus orígenes, teniendo este Juego diversos niveles y dificultades.<br><br>\r\n\r\nNuestro objetivo es afianzar sus conocimientos sobre el deporte del Boxeo, mediante un juego interactivo el cual consta de diversas formas de aprendizaje para el usuario, concretando datos con mayor facilidad y un entendimiento más preciso a la hora de interactuar con nuestro contenido.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `ID` int(2) NOT NULL,
  `Nombre` varchar(33) NOT NULL,
  `Foto` varchar(500) NOT NULL,
  `Descripcion` text NOT NULL,
  `Titulo` varchar(33) NOT NULL,
  `Codigo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`ID`, `Nombre`, `Foto`, `Descripcion`, `Titulo`, `Codigo`) VALUES
(1, 'Mateo Callejas', '../Img/', 'Hola care cola', 'Escanear Codigo', 'Mi novia me mandaa'),
(3, 'April Collins Jackson', '../Img/Personajes/April.png', 'April, es la más creativa del equipo, tiene 18 años y su inteligencia es de envidiar, pues desde pequeña fue entrenada por Aaron, dándole una gran habilidad en todo lo relacionado con la ciencia, sobre todo la física.<br>\r\n   Es la segunda mujer del grupo y la más joven, su motivación es el amor por su familia y piensa hacer lo que sea para llevar a cabo con éxito este proyecto de controlar el tiempo.', 'Escanear Codigo', 'Escanea la imagen que aparece abajo con la aplicación de Second To Fight desde tu celular para apreciar los personajes en realidad aumentada, además, de poder ver la historia y vida completa de cada personaje.<br>\r\n     Como Escanear la imagen:<br>\r\n     1.	Abre la aplicación STF desde tu celular y presiona escanear. <br>\r\n     2.	Apunta con la cámara hacia la imagen que deseas escanear. <br>\r\n     3.	Disfruta de nuestros personajes en R.A. <br>'),
(4, 'Luke Shun Yuzuki', '../Img/Personajes/Luke.png', 'Luke, el más curioso de todos los integrantes del equipo, tiene 24 años, su gran carisma además de su inteligencia y curiosidad, lo ayudo a entrar en el equipo, transformándose así en la mano derecha de Aaron, siendo un gran amigo para el desde que inicio el proyecto.\r\nTrabajo como modelo para conocer el mundo, pero su delicada apariencia no define su carácter, pues él no se detendrá hasta conocer todo lo que pueda, hasta el día de su muerte.', 'Escanear Codigo', 'Escanea la imagen que aparece abajo con la aplicación de Second To Fight desde tu celular para apreciar los personajes en realidad aumentada, además, de poder ver la historia y vida completa de cada personaje.<br>\r\n     Como Escanear la imagen:<br>\r\n     1.	Abre la aplicación STF desde tu celular y presiona escanear. <br>\r\n     2.	Apunta con la cámara hacia la imagen que deseas escanear. <br>\r\n     3.	Disfruta de nuestros personajes en R.A. <br>'),
(5, 'Amelia Pierce Moll editado', '../Img/istockphoto-495294846-1024x1024.jpg', 'editado Amelia, se preocupa por cada uno de los integrantes del equipo, tiene 24 años, posee una gran sabiduría, pues se graduó de la carrera de medicina con tan solo 20 años, además de psicóloga a los 24 años, pero la causa que la hizo entrar al equipo, fueron sus conocimientos astronómicos.\r\nEs una de las mejores astrónomas del planeta a pesar de no estudiar esta carrera en una universidad, pues su curiosidad por descubrir los misterios del universo la llevaron a crecer mentalmente muy rápido.', 'Escanear Codigo', 'Escanea la imagen que aparece abajo con la aplicación de Second To Fight desde tu celular para apreciar los personajes en realidad aumentada, además, de poder ver la historia y vida completa de cada personaje.<br>\r\n     Como Escanear la imagen:<br>\r\n     1.	Abre la aplicación STF desde tu celular y presiona escanear. <br>\r\n     2.	Apunta con la cámara hacia la imagen que deseas escanear. <br>\r\n     3.	Disfruta de nuestros personajes en R.A. <br>'),
(6, 'Giles Oke Sharif', '../Img/Giles.png', 'Giles, nunca se detiene de entrenar y estudiar, tiene 24 años, entro en el equipo gracias su carisma y la pasión que adquirió por la ciencia, pues a pesar de nunca haber estudiado profesionalmente alguna ciencia, su madre y el doctor Aaron le inculcaron la suficiente curiosidad para que el por su cuenta siguiera estudiando hasta volverse uno de los mejores.\r\nPosee una gran habilidad física, es el mas fuerte y no se detiene por nada en el mundo, su gran pasión por la ciencia es su mejor motivación.', 'Escanear Codigo', 'Escanea la imagen que aparece abajo con la aplicación de Second To Fight desde tu celular para apreciar los personajes en realidad aumentada, además, de poder ver la historia y vida completa de cada personaje.<br>\r\n     Como Escanear la imagen:<br>\r\n     1.	Abre la aplicación STF desde tu celular y presiona escanear. <br>\r\n     2.	Apunta con la cámara hacia la imagen que deseas escanear. <br>\r\n     3.	Disfruta de nuestros personajes en R.A. <br>'),
(7, 'Theo Kairo Heshma', '../Img/Personajes/Theo.png', 'Theo, el de la voluntad inquebrantable, es el motivador principal del equipo, tiene 18 años y a pesar de su corta edad, es el preferido de Aaron para que lo remplace como líder por si el proyecto no es acabado antes de su muerte.\r\nPosee un conocimiento increíble acerca la ciencia en general, pero al igual que Aaron, se enfoca en la física, en el tiempo mas específicamente, su gran motivación es aquella fuerza que el humano todavía no comprende en su totalidad.', 'Escanear Codigo', 'Escanea la imagen que aparece abajo con la aplicación de Second To Fight desde tu celular para apreciar los personajes en realidad aumentada, además, de poder ver la historia y vida completa de cada personaje.<br>\r\n     Como Escanear la imagen:<br>\r\n     1.	Abre la aplicación STF desde tu celular y presiona escanear. <br>\r\n     2.	Apunta con la cámara hacia la imagen que deseas escanear. <br>\r\n     3.	Disfruta de nuestros personajes en R.A. <br>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `ID` int(2) NOT NULL,
  `Usuario` varchar(33) NOT NULL,
  `Clave` varchar(15) NOT NULL,
  `Foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sesion`
--

INSERT INTO `sesion` (`ID`, `Usuario`, `Clave`, `Foto`) VALUES
(1, 'mateocaho@gmail.com', '123', ''),
(2, 'instructormsepulveda@gmail.com', 'mario', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`ID_stf`),
  ADD UNIQUE KEY `correo` (`correo_stf`);

--
-- Indices de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historia`
--
ALTER TABLE `historia`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `ID_stf` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;