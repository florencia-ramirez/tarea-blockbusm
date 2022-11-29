-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2022 a las 15:26:20
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blockbusm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `nombre` varchar(100) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `disponibles` int(11) NOT NULL,
  `totales` int(11) NOT NULL,
  `publico` varchar(5) NOT NULL,
  `duracion` int(11) NOT NULL,
  `reparto` varchar(255) NOT NULL,
  `calMedia` int(11) NOT NULL DEFAULT 0,
  `cantRentada` int(11) NOT NULL DEFAULT 0,
  `calUSMT` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL DEFAULT '../IMAGES/POSTERS/'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`nombre`, `genero`, `descripcion`, `disponibles`, `totales`, `publico`, `duracion`, `reparto`, `calMedia`, `cantRentada`, `calUSMT`, `imagen`) VALUES
('Barbie y el castillo de diamantes', 'Infantil', 'Liana y Alexa deben salvar el Castillo del Diamante de una malvada musa llamada Lydia.', 6, 6, 'G', 78, 'Marÿke Hendrikse, Kelly Sheridan, Kathleen Barr, Scott McNeil, Nicole Oliver, Ron Halder, Michael Dobson', 0, 0, 76, '../IMAGES/POSTERS/barbie-y-el-castillo-de-diamantes.jpg'),
('Barbie y las 12 princesas bailarinas', 'Infantil', 'Una princesa y sus once hermanas deben trabajar juntas para salvar el reino de su padre', 4, 4, 'G', 81, 'Nicole Oliver, Jennifer Copping, Lalainia Lindbjer, Kathleen Barr, Chiara Zanni, Adrienne Carter, Kelly Sheridan, Ashleigh Ball', 0, 0, 75, '../IMAGES/POSTERS/barbie-las-doce-princesas-bailarinas.jpg'),
('Barbie y Las tres mosqueteras', 'Infantil', 'La pueblerina Corinne sueña con convertirse en mosquetera y defender a la familia real, tal y como hizo su padre, el legendario D\'Artagnan. Corinne ha entrenado en secreto durante años y, ahora que tiene 17 años, el príncipe necesita su ayuda.', 3, 3, 'G', 81, 'Tim Curry, Kelly Sheridan, Willow Johnson, Mark Hildreth, Bernard Cuffling', 0, 0, 64, '../IMAGES/POSTERS/barbie-y-las-tres-mosqueteras.jpg'),
('Barbie: Escuela de Princesas', 'Infantil', 'Blair Willows es una plebeya de 17 años en el reino de Gardania que gana una lotería para asistir a una prestigiosa y mágica escuela de princesas.', 5, 5, 'G', 81, 'Diana Kaarina, Morwenna Banks, Nicole Oliver, Brittney Wilson, Ali Liebert, Shannon Chan-Kent', 0, 0, 74, '../IMAGES/POSTERS/barbie-escuela-de-princesas.jpg'),
('Barbie: Moda mágica en París', 'Infantil', 'Barbie va a París a ayudar a su tía con su casa de moda y organiza un desfile con la ayuda de tres musas mágicas.', 6, 6, 'G', 90, 'Diana Kaarina, Adrian Petriw, Tabitha St. Germain, Patricia Drake, Alexandra Devine, Shannon Chan-Kent, Maryke Hendrikse', 0, 0, 69, '../IMAGES/POSTERS/barbie-moda-magica-en-paris.jpg'),
('El diario de Barbie', 'Infantil', 'Barbie forma una banda de rock, hace nuevos amigos y atrae a los chicos más populares de la escuela.', 3, 3, 'G', 70, 'Andrew Francis, Anna Cummer, Skye Sweetnam, Sarah Edmondson, Matt Hill, Marÿke Hendrikse, Venus Terzo, Kelly Sheridan, Chiara Zanni', 0, 0, 73, '../IMAGES/POSTERS/el-diario-de-barbie.jpg'),
('Iron Man', 'Acción', 'Un empresario millonario construye un traje blindado y lo usa para combatir el crimen y el terrorismo.', 10, 10, 'PG', 126, 'Robert Downey Jr, Terrence Howard, Jeff Bridges, Shaun Toub, Paul Bettany, Gwyneth Paltrow', 0, 0, 91, '../IMAGES/POSTERS/iron-man.jpg'),
('Iron Man 2', 'Acción', 'Con el mundo ahora consciente de que él es Iron Man, el millonario inventor Tony Stark debe forjar nuevas alianzas y confrontar a un enemigo nuevo y poderoso.', 7, 7, 'PG', 124, 'Robert Downey Jr, Gwyneth Paltrow, Don Cheadle, Scarlett Johansson, Sam Rockwell\r\nPaul Bettany, Mickey Rourke, Samuel L. Jackson', 0, 0, 71, '../IMAGES/POSTERS/iron-man-2.jpg'),
('Iron Man 3', 'Acción', 'El descarado y brillante Tony Stark, tras ver destruido todo su universo personal, debe encontrar y enfrentarse a un enemigo cuyo poder no conoce límites. Este viaje pondrá a prueba su entereza una y otra vez, y le obligará a confiar en su ingenio.', 8, 8, 'PG', 131, 'Robert Downey Jr, Gwyneth Paltrow, Don Cheadle, Guy Pearce, Rebecca Hall, Stéphanie Szostak, James, Badge Dale, Jon Favreau, Ben Kingsley', 0, 0, 78, '../IMAGES/POSTERS/iron-man3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `saldo` int(11) NOT NULL DEFAULT 500,
  `seguidores` int(11) NOT NULL DEFAULT 0,
  `seguidos` int(11) NOT NULL DEFAULT 0,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `clave`, `mail`, `saldo`, `seguidores`, `seguidos`, `descripcion`) VALUES
('diego acevedo', '123', 'diego@gmail.com', 500, 0, 0, 'holaaaa'),
('flo :D', 'flo123', 'flo123@mail.com', 500, 0, 0, 'me gusta ver peliculas y dormir');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
