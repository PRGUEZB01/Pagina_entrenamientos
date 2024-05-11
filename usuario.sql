-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2023 a las 23:21:21
-- Versión del servidor: 5.7.17
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios`
--

CREATE TABLE `ejercicios` (
  `EJERCICIO_ID` int(11) NOT NULL,
  `Nombre_ejercicio` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(136) COLLATE utf8_spanish_ci NOT NULL,
  `Repeticiones` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `ENTRENO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ejercicios`
--

INSERT INTO `ejercicios` (`EJERCICIO_ID`, `Nombre_ejercicio`, `Tipo`, `Descripcion`, `Repeticiones`, `ENTRENO_ID`) VALUES
(1, 'Flexiones', 'Peso libre', ' Ejercicio realizado estando en posicion horizontal, levantando el cuerpo con los brazos y bajando de nuevo al suelo.', '10x4', 1),
(2, 'Flexiones', 'Peso libre', 'Ejercicio realizado estando en posicion horizontal, levantando el cuerpo con los brazos y bajando de nuevo al suelo.', '12x3', 3),
(3, 'Flexiones', 'Peso libre', 'Ejercicio realizado estando en posicion horizontal, levantando el cuerpo con los brazos y bajando de nuevo al suelo.', '16x3', 5),
(4, 'Press de banca', 'Mancuerna', 'Ejercicio con pesos en el que se empuja una barra hacia arriba mientras está acostado en un banco de entrenamiento.', '8x4/10KG', 2),
(5, 'Press banca', 'Mancuerna', ' Ejercicio con pesos en el que se empuja una barra hacia arriba mientras está acostado en un banco de entrenamiento.', '10x3/14KG', 4),
(6, 'Press de banca', 'Mancuerna', 'Ejercicio con pesos en el que se empuja una barra hacia arriba mientras está acostado en un banco de entrenamiento.', '12x3/16KG', 6),
(7, 'Sentadilla', 'Peso libre', 'Desde una posicion erguida con los pies separados, flexionar las rodillas y bajar con la espalda recta, para despues volver al origen.', '10x3', 1),
(8, 'Sentadilla', 'Peso libre', ' Desde una posicion erguida con los pies separados, flexionar las rodillas y bajar con la espalda recta, para despues volver al origen', '12x4', 3),
(9, 'Sentadilla', 'Peso libre', 'Desde una posicion erguida con los pies separados, flexionar las rodillas y bajar con la espalda recta, para despues volver al origen.', '15x4', 5),
(10, 'Peso muerto', 'Mancuerna', 'Levantar una barra desde el suelo hasta la cintura, manteniendo la espalda los mas recta posible al flexionar la cadera.', '6x4/40KG', 2),
(11, 'Peso muerto', 'Mancuerna', 'Levantar una barra desde el suelo hasta la cintura, manteniendo la espalda los mas recta posible al flexionar la cadera.', '8x4/60KG', 4),
(12, 'Peso muerto', 'Mancuerna', 'Levantar una barra desde el suelo hasta la cintura, manteniendo la espalda los mas recta posible al flexionar la cadera.', '12X3/70KG', 6),
(13, 'Martillo de biceps', 'Mancuerna', 'Se parte con las mancuernas a la altura de la cadera y se suben hasta la altura de los codos, despues se baja lentamente.', '14x3/6KG', 1),
(14, 'Martillo de biceps', 'Mancuerna', 'Se parte con las mancuernas a la altura de la cadera y se suben hasta la altura de los codos, despues se baja lentamente.', '14x3/8KG', 3),
(15, 'Martillo de biceps', 'Mancuerna', 'Se parte con las mancuernas a la altura de la cadera y se suben hasta la altura de los codos, despues se baja lentamente.', '12x3/10KG', 5),
(16, 'Curl de biceps Z', 'Mancuerna', 'Se parte con la barra Z a la altura de la cadera y se sube hasta la altura del pecho, despues se baja lentamente.', '12x3/10KG', 2),
(17, 'Curl de biceps Z', 'Mancuerna', 'Se parte con la barra Z a la altura de la cadera y se sube hasta la altura del pecho, despues se baja lentamente.', '10x3/15KG', 4),
(18, 'Curl de Biceps Z', 'Mancuerna', 'Se parte con la barra Z a la altura de la cadera y se sube hasta la altura del pecho, despues se baja lentamente.', '8x3/20KG', 6),
(19, 'Jalón al pecho', 'Mancuerna', ' Los brazos se flexionan tirando de la barra para bajarla por delante del cuerpo. Los codos se orientan atrás y hacia abajo al bajar.', '14x4/20KG', 1),
(20, 'Jalon al pecho', 'Mancuerna', 'Los brazos se flexionan tirando de la barra para bajarla por delante del cuerpo. Los codos se orientan atrás y hacia abajo al bajar.', '16x3/25KG', 3),
(21, 'Jalón', 'Mancuerna', ' Los brazos se flexionan tirando de la barra para bajarla por delante del cuerpo. Los codos se orientan atrás y hacia abajo al bajar.', '16x3/30KG', 5),
(22, 'Dominadas', 'Peso libre', 'Levantar el cuerpo mientras este pende de una barra. Se parte con los brazos estirados y se sube a la altura de la barra.', '6x4', 2),
(23, 'Dominadas', 'Peso libre', 'Levantar el cuerpo mientras este pende de una barra. Se parte con los brazos estirados y se sube a la altura de la barra.', '8x3', 4),
(24, 'Dominadas', 'Peso libre', ' Levantar el cuerpo mientras este pende de una barra. Se parte con los brazos estirados y se sube a la altura de la barra.', '10x4', 6),
(25, 'Fondos triceps', 'Peso libre', 'Consiste en sentarse sobre un banco  y colocar las manos a los lados, con las palmas hacia abajo. Flexionar codos, bajar y subir. ', '10x4', 1),
(26, 'Fondos triceps', 'Peso libre', 'Consiste en sentarse sobre un banco  y colocar las manos a los lados, con las palmas hacia abajo. Flexionar codos, bajar y subir. ', '15x3', 3),
(27, 'Fondos triceps', 'Peso libre', 'Consiste en sentarse sobre un banco  y colocar las manos a los lados, con las palmas hacia abajo. Flexionar codos, bajar y subir. ', '18x3', 5),
(28, 'Curl frances', 'Mancuerna', 'Coge la barra con las palmas hacia el techo y los brazos estirados, las manos en la barra a la anchura de tus hombros y flexionar codos.', '10x3/8KG', 2),
(29, 'Curl frances', 'Mancuerna', 'Coge la barra con las palmas hacia el techo y los brazos estirados, las manos en la barra a la anchura de tus hombros y flexionar codos.', '12x3/10KG', 4),
(30, 'Curl frances', 'Mancuerna', ' Coge la barra con las palmas hacia el techo y los brazos estirados, las manos en la barra a la anchura de tus hombros y flexionar codos', '8x4/12KG', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenamientos`
--

CREATE TABLE `entrenamientos` (
  `ENTRENO_ID` int(11) NOT NULL,
  `Nombre_entreno` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `IMC_ID` int(3) NOT NULL,
  `Categoria` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `entrenamientos`
--

INSERT INTO `entrenamientos` (`ENTRENO_ID`, `Nombre_entreno`, `IMC_ID`, `Categoria`) VALUES
(1, 'Entrenamiento 1', 18, 'Perder peso'),
(2, 'Entrenamiento 2', 18, 'Ganar peso'),
(3, 'Entrenamiento 1', 20, 'Perder peso'),
(4, 'Entrenamiento 2', 20, 'Ganar peso'),
(5, 'Entrenamiento 1', 23, 'Perder peso'),
(6, 'Entrenamiento 2', 23, 'Ganar peso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `PrimerApellido` text COLLATE utf8_spanish_ci NOT NULL,
  `SegundoApellido` text COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `Peso` float NOT NULL,
  `Altura` float NOT NULL,
  `IMC_ID` float NOT NULL,
  `Entreno` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `ENTRENO_ID` int(11) DEFAULT NULL,
  `Validar` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`Nombre`, `PrimerApellido`, `SegundoApellido`, `Correo`, `Usuario`, `Password`, `Peso`, `Altura`, `IMC_ID`, `Entreno`, `ENTRENO_ID`, `Validar`) VALUES
('Admin', 'Admin', 'Admin', 'Admin', 'Admin', 'e3afed0047b08059d0fada10f400c1e5', 1, 1, 1, 'Admin', 1, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD PRIMARY KEY (`EJERCICIO_ID`),
  ADD KEY `ENTRENO_ID` (`ENTRENO_ID`);

--
-- Indices de la tabla `entrenamientos`
--
ALTER TABLE `entrenamientos`
  ADD PRIMARY KEY (`ENTRENO_ID`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`Usuario`),
  ADD KEY `ENTRENO_ID` (`ENTRENO_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  MODIFY `EJERCICIO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `entrenamientos`
--
ALTER TABLE `entrenamientos`
  MODIFY `ENTRENO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD CONSTRAINT `ejercicios_ibfk_1` FOREIGN KEY (`ENTRENO_ID`) REFERENCES `entrenamientos` (`ENTRENO_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`ENTRENO_ID`) REFERENCES `entrenamientos` (`ENTRENO_ID`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
