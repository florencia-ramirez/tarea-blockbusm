-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2022 a las 00:05:27
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

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarsaldo` (IN `saldo` INT(11), IN `mail` VARCHAR(50))   UPDATE usuarios SET `usuarios`.`saldo` = saldo WHERE `usuarios`.`mail` = mail$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritas`
--

CREATE TABLE `favoritas` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `pelicula` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `favoritas`
--

INSERT INTO `favoritas` (`id`, `usuario`, `pelicula`) VALUES
(1, 'flo123@mail.com', 'Barbie y el castillo de diamantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `nombre` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
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
  `cantReseñas` int(11) NOT NULL DEFAULT 0,
  `imagen` varchar(100) NOT NULL DEFAULT '../IMAGES/POSTERS/'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`nombre`, `precio`, `genero`, `descripcion`, `disponibles`, `totales`, `publico`, `duracion`, `reparto`, `calMedia`, `cantRentada`, `calUSMT`, `cantReseñas`, `imagen`) VALUES
('Barbie y el castillo de diamantes', 20, 'Infantil', 'Liana y Alexa deben salvar el Castillo del Diamante de una malvada musa llamada Lydia.', 6, 6, 'G', 78, 'Marÿke Hendrikse, Kelly Sheridan, Kathleen Barr, Scott McNeil, Nicole Oliver, Ron Halder, Michael Dobson', 0, 0, 76, 0, '../IMAGES/POSTERS/barbie-y-el-castillo-de-diamantes.jpg'),
('Barbie y las 12 princesas bailarinas', 18, 'Infantil', 'Una princesa y sus once hermanas deben trabajar juntas para salvar el reino de su padre', 4, 4, 'G', 81, 'Nicole Oliver, Jennifer Copping, Lalainia Lindbjer, Kathleen Barr, Chiara Zanni, Adrienne Carter, Kelly Sheridan, Ashleigh Ball', 0, 0, 75, 0, '../IMAGES/POSTERS/barbie-las-doce-princesas-bailarinas.jpg'),
('Barbie y Las tres mosqueteras', 11, 'Infantil', 'La pueblerina Corinne sueña con convertirse en mosquetera y defender a la familia real, tal y como hizo su padre, el legendario D\'Artagnan. Corinne ha entrenado en secreto durante años y, ahora que tiene 17 años, el príncipe necesita su ayuda.', 3, 3, 'G', 81, 'Tim Curry, Kelly Sheridan, Willow Johnson, Mark Hildreth, Bernard Cuffling', 0, 0, 64, 0, '../IMAGES/POSTERS/barbie-y-las-tres-mosqueteras.jpg'),
('Barbie: Escuela de Princesas', 22, 'Infantil', 'Blair Willows es una plebeya de 17 años en el reino de Gardania que gana una lotería para asistir a una prestigiosa y mágica escuela de princesas.', 1, 1, 'G', 81, 'Diana Kaarina, Morwenna Banks, Nicole Oliver, Brittney Wilson, Ali Liebert, Shannon Chan-Kent', 0, 2, 74, 0, '../IMAGES/POSTERS/barbie-escuela-de-princesas.jpg'),
('Barbie: Moda mágica en París', 15, 'Infantil', 'Barbie va a París a ayudar a su tía con su casa de moda y organiza un desfile con la ayuda de tres musas mágicas.', 6, 6, 'G', 90, 'Diana Kaarina, Adrian Petriw, Tabitha St. Germain, Patricia Drake, Alexandra Devine, Shannon Chan-Kent, Maryke Hendrikse', 4, 0, 69, 1, '../IMAGES/POSTERS/barbie-moda-magica-en-paris.jpg'),
('Buscando a Dory', 6, 'Infantil', 'Con la ayuda de Nemo y Marlin, Dory, quien siempre olvida todo, se embarca en la misión para reunirse con sus padres.', 8, 8, 'G', 97, 'Ellen Degeneres, Albert Brooks, Hayden Rolence, Diane Keaton, Eugene Levy, Ty Burrell', 0, 0, 84, 0, '../IMAGES/POSTERS/buscando-a-dory.jpg'),
('El diario de Barbie', 21, 'Infantil', 'Barbie forma una banda de rock, hace nuevos amigos y atrae a los chicos más populares de la escuela.', 3, 3, 'G', 70, 'Andrew Francis, Anna Cummer, Skye Sweetnam, Sarah Edmondson, Matt Hill, Marÿke Hendrikse, Venus Terzo, Kelly Sheridan, Chiara Zanni', 5, 0, 73, 2, '../IMAGES/POSTERS/el-diario-de-barbie.jpg'),
('Fight Club', 43, 'Drama', 'Un empleado de oficina insomne, harto de su vida, se cruza con un vendedor peculiar. Ambos crean un club de lucha clandestino como forma de terapia y, poco a poco, la organización crece y sus objetivos toman otro rumbo.', 2, 2, 'R', 139, 'Edward Norton, Brad Pitt, Helena Bonham Carter, Meat Loaf, Jared Leto', 0, 7, 96, 0, '../IMAGES/POSTERS/fight-club.jpeg'),
('Iron Man', 30, 'Acción', 'Un empresario millonario construye un traje blindado y lo usa para combatir el crimen y el terrorismo.', 10, 10, 'PG', 126, 'Robert Downey Jr, Terrence Howard, Jeff Bridges, Shaun Toub, Paul Bettany, Gwyneth Paltrow', 0, 20, 91, 0, '../IMAGES/POSTERS/iron-man.jpg'),
('Iron Man 2', 40, 'Acción', 'Con el mundo ahora consciente de que él es Iron Man, el millonario inventor Tony Stark debe forjar nuevas alianzas y confrontar a un enemigo nuevo y poderoso.', 7, 7, 'PG', 124, 'Robert Downey Jr, Gwyneth Paltrow, Don Cheadle, Scarlett Johansson, Sam Rockwell\r\nPaul Bettany, Mickey Rourke, Samuel L. Jackson', 3, 0, 71, 1, '../IMAGES/POSTERS/iron-man-2.jpg'),
('Iron Man 3', 37, 'Acción', 'El descarado y brillante Tony Stark, tras ver destruido todo su universo personal, debe encontrar y enfrentarse a un enemigo cuyo poder no conoce límites. Este viaje pondrá a prueba su entereza una y otra vez, y le obligará a confiar en su ingenio.', 8, 8, 'PG', 131, 'Robert Downey Jr, Gwyneth Paltrow, Don Cheadle, Guy Pearce, Rebecca Hall, Stéphanie Szostak, James, Badge Dale, Jon Favreau, Ben Kingsley', 0, 11, 78, 0, '../IMAGES/POSTERS/iron-man3.jpg'),
('Memento', 50, 'Misterio', 'Leonard, cuya memoria está dañada por culpa de un golpe en la cabeza al intentar evitar el asesinato de su mujer, tiene que recurrir a la ayuda de una cámara instantánea y a las notas tatuadas en su cuerpo para investigar el crimen y vengarla.', 1, 1, 'R', 113, 'Guy Pearce, Carrie-Anne Moss, Joe Pantoliano', 0, 5, 94, 0, '../IMAGES/POSTERS/memento.png'),
('Spy: una espía despistada', 7, 'Comedia', 'Una analista de la CIA poco cualificada para la acción asume la peligrosa misión de introducirse en una banda de criminales búlgaros para vengar la muerte de su compañero.', 4, 4, 'PG', 120, 'Melissa McCarthy, Rose Byrne, Jason Statham, Miranda Hart, Allison Janney, Bobby Cannavale, Jude Law', 0, 0, 78, 0, '../IMAGES/POSTERS/spy.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rentadas`
--

CREATE TABLE `rentadas` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `pelicula` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rentadas`
--

INSERT INTO `rentadas` (`id`, `usuario`, `pelicula`) VALUES
(1, 'flo123@mail.com', 'Barbie: Escuela de Princesas'),
(2, 'flo123@mail.com', 'Iron Man 2');

--
-- Disparadores `rentadas`
--
DELIMITER $$
CREATE TRIGGER `rentaTrigger` AFTER INSERT ON `rentadas` FOR EACH ROW INSERT into rentashistorial  (usuario, pelicula, fecha) VALUES (NEW.usuario, NEW.pelicula, CURRENT_TIMESTAMP)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rentashistorial`
--

CREATE TABLE `rentashistorial` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pelicula` varchar(100) CHARACTER SET utf8 NOT NULL,
  `fecha` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseñas`
--

CREATE TABLE `reseñas` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `pelicula` varchar(100) DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reseñas`
--

INSERT INTO `reseñas` (`id`, `usuario`, `pelicula`, `calificacion`, `texto`) VALUES
(1, 'admin@admin.cl', 'El diario de Barbie', 5, 'ME ENCANTA ESTA PELÍCULA ES 10000/10'),
(2, 'admin@admin.cl', 'Barbie: Moda mágica en París', 4, 'Era mejor cuando la vi más chica'),
(3, 'admin@admin.cl', 'Iron Man 2', 3, 'Esperaba más'),
(4, 'flo123@mail.com', 'El diario de Barbie', 5, 'Me encanta esta película');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguidos`
--

CREATE TABLE `seguidos` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `seguido` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `seguidos`
--

INSERT INTO `seguidos` (`id`, `usuario`, `seguido`) VALUES
(1, 'flo123@mail.com', 'admin@admin.cl'),
(2, 'diego@gmail.com', 'admin@admin.cl');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `top5usmt`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `top5usmt` (
`nombre` varchar(100)
,`genero` varchar(50)
,`imagen` varchar(100)
,`calUSMT` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `saldo` int(11) NOT NULL DEFAULT 500,
  `cantRentadas` int(11) NOT NULL DEFAULT 0,
  `seguidores` int(11) NOT NULL DEFAULT 0,
  `seguidos` int(11) NOT NULL DEFAULT 0,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `clave`, `mail`, `saldo`, `cantRentadas`, `seguidores`, `seguidos`, `descripcion`) VALUES
('FLO ADMIN ᓚᘏᗢ', 'ADMIN', 'admin@admin.cl', 9999, 26, 2, 0, 'para hacer cositas uwu'),
('diego acevedo', '123', 'diego@gmail.com', 500, 9, 0, 0, 'holaaaa'),
('flo :D', 'flo123', 'flo123@mail.com', 478, 2, 0, 0, 'me gusta ver peliculas y dormir');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `pelicula` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `wishlist`
--

INSERT INTO `wishlist` (`id`, `usuario`, `pelicula`) VALUES
(1, 'flo123@mail.com', 'El diario de Barbie');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `worst5usmt`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `worst5usmt` (
`nombre` varchar(100)
,`genero` varchar(50)
,`imagen` varchar(100)
,`calUSMT` int(11)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `top5usmt`
--
DROP TABLE IF EXISTS `top5usmt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `top5usmt`  AS SELECT `peliculas`.`nombre` AS `nombre`, `peliculas`.`genero` AS `genero`, `peliculas`.`imagen` AS `imagen`, `peliculas`.`calUSMT` AS `calUSMT` FROM `peliculas` ORDER BY `peliculas`.`calUSMT` DESC LIMIT 0, 5555  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `worst5usmt`
--
DROP TABLE IF EXISTS `worst5usmt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `worst5usmt`  AS SELECT `peliculas`.`nombre` AS `nombre`, `peliculas`.`genero` AS `genero`, `peliculas`.`imagen` AS `imagen`, `peliculas`.`calUSMT` AS `calUSMT` FROM `peliculas` ORDER BY `peliculas`.`calUSMT` ASC LIMIT 0, 5555  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `favoritas`
--
ALTER TABLE `favoritas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_fav` (`usuario`),
  ADD KEY `fk_pelicula_fav` (`pelicula`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `rentadas`
--
ALTER TABLE `rentadas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_rent` (`usuario`),
  ADD KEY `fk_pelicula_rent` (`pelicula`);

--
-- Indices de la tabla `rentashistorial`
--
ALTER TABLE `rentashistorial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_res` (`usuario`),
  ADD KEY `fk_pelicula_res` (`pelicula`);

--
-- Indices de la tabla `seguidos`
--
ALTER TABLE `seguidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_seguidor` (`usuario`),
  ADD KEY `fk_pelicula_seguido` (`seguido`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`mail`);

--
-- Indices de la tabla `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_wish` (`usuario`),
  ADD KEY `fk_pelicula_wish` (`pelicula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `favoritas`
--
ALTER TABLE `favoritas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rentadas`
--
ALTER TABLE `rentadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rentashistorial`
--
ALTER TABLE `rentashistorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `seguidos`
--
ALTER TABLE `seguidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `favoritas`
--
ALTER TABLE `favoritas`
  ADD CONSTRAINT `fk_pelicula_fav` FOREIGN KEY (`pelicula`) REFERENCES `peliculas` (`nombre`),
  ADD CONSTRAINT `fk_usuario_fav` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`mail`);

--
-- Filtros para la tabla `rentadas`
--
ALTER TABLE `rentadas`
  ADD CONSTRAINT `fk_pelicula_rent` FOREIGN KEY (`pelicula`) REFERENCES `peliculas` (`nombre`),
  ADD CONSTRAINT `fk_usuario_rent` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`mail`);

--
-- Filtros para la tabla `reseñas`
--
ALTER TABLE `reseñas`
  ADD CONSTRAINT `fk_pelicula_res` FOREIGN KEY (`pelicula`) REFERENCES `peliculas` (`nombre`),
  ADD CONSTRAINT `fk_usuario_res` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`mail`);

--
-- Filtros para la tabla `seguidos`
--
ALTER TABLE `seguidos`
  ADD CONSTRAINT `fk_pelicula_seguido` FOREIGN KEY (`seguido`) REFERENCES `usuarios` (`mail`),
  ADD CONSTRAINT `fk_usuario_seguidor` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`mail`);

--
-- Filtros para la tabla `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fk_pelicula_wish` FOREIGN KEY (`pelicula`) REFERENCES `peliculas` (`nombre`),
  ADD CONSTRAINT `fk_usuario_wish` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
