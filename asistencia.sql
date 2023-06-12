-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2023 a las 21:23:50
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asistencia`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizar_departamento` (IN `id` INT, IN `_nombre` VARCHAR(60))   begin 
declare existe int default 0;
declare estado varchar(60);
select count(*) into existe from departamento where id_departamento = id;
if existe > 0 then 
update departamento set nombre = _nombre where id_departamento = id;
set estado = "correcto";
select estado;
else 
set estado = "incorrecto";
select estado;
end if;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizar_persona` (IN `_nombre` VARCHAR(60), IN `_apellido` VARCHAR(60), IN `_id_departamento` INT, IN `_id_usuario` INT, IN `_id_persona` INT)   begin 
declare existe int;
select count(*) into existe from persona where id_persona = _id_persona;
if existe >  0 then 
update pérsona set nombre = _nombre,apellido = _apellido, id_usuario_fk = _id_usuario , id_departamento_fk = _id_departamento where id_persona = _id_persona;   
select "correcto";
else 
select "incorrecto";
end if;


end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizar_usuario` (IN `_id` INT, IN `_nuevoTipo` VARCHAR(60))   begin 
declare existe int;
select count(*) into existe from usuario where id_usuario = _id;
if existe > 0 then 
update usuario set tipo = _nuevoTipo where id_usuario = _id;
select "correcto";
else 
select "incorrecto";
end if;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminar_departamento` (IN `id` INT)   begin 
declare existe int default 0;
declare estado varchar(60);
select count(*) into existe from departamento where id_departamento = id;
if existe > 0 then 
DELETE  from departamento where  id_departamento = id;
set estado = "correcto";
select estado;
else 
set estado = "incorrecto";
select estado;
end if;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminar_persona` (IN `_id_persona` INT)   begin 
declare existe int;
select count(*) into existe from persona where id_persona = _id_persona;  
if existe > 0 then 
delete from persona where persona.id_persona =  _id_persona;
select "correcto";
else 
select "incorrecto";
end if;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminar_usuario` (IN `_id` INT)   begin 
declare existe int;
select count(*) into existe from usuario where id_usuario = _id;
if existe > 0 then 
delete from usuario where id_usuario = _id;
select "correcto";
else 
select "incorrecto";
end if;


end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertar_departamento` (IN `_nombre` VARCHAR(60))   begin 
declare contador int;
declare estado varchar(60);
select count(*) nombre into contador from departamento where nombre = _nombre;
if contador = 1 then 
set estado = "incorrecto";
select estado;
else 
insert into departamento(nombre) values(_nombre);
set estado = "correcto";
select estado;
end if ;


end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertar_persona` (IN `_nombre` VARCHAR(60), IN `_contrasena` VARCHAR(60), IN `_dni` VARCHAR(60), IN `_apellido` VARCHAR(60), IN `_iddepar` INT, IN `_usu` INT)   begin 
declare existe int;
declare estado varchar(60);
select count(*) into existe from persona where dni = _dni;
if existe > 0 then 
set estado = "incorrecto";
select estado;
else 
insert  into persona(nombre, contrasena,dni,apellido,	id_departamento_fk,id_usuario_fk) values (_nombre,_contrasena,_dni,_apellido,_iddepar,_usu);
set estado = "correcto";
select estado;
end if;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertar_usuario` (IN `_tipo` VARCHAR(60))   begin 
declare existe int;
select count(*) into existe from usuario where tipo = _tipo;
if existe > 0 then 
SELECT "incorrecto";
else 
INSERT into usuario(tipo) VALUES(_tipo);
SELECT "correcto";
end if;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_mostrar_contraseña` (IN `_id_persona` INT, IN `_nueva_contrasena` VARCHAR(60))   begin 
declare existe int;
select count(*) into existe from persona where id_persona = _id_persona;
if existe > 0 then 
update persona set contrasena = _nueva_contrasena where id_persona = _id_persona;  
select "correcto";
else 
select "incorrecto";
end if;

end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nombre`) VALUES
(2, 'contabilidad'),
(3, 'sistemas'),
(4, 'tesoreria'),
(7, 'recepcion'),
(9, 'gerencia'),
(19, 'cajas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `apellido` varchar(60) DEFAULT NULL,
  `dni` varchar(12) DEFAULT NULL,
  `contrasena` varchar(60) DEFAULT NULL,
  `id_usuario_fk` int(11) DEFAULT NULL,
  `id_departamento_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre`, `apellido`, `dni`, `contrasena`, `id_usuario_fk`, `id_departamento_fk`) VALUES
(63, 'sisi', 'ardilla', '123456789', '$2y$12$ckYbth1OX4l3aU37Sled7eMOnZZ9qn8hgprx9DTcVDQkv1WGodEnS', 8, 7),
(64, 'blanca', 'corderito', '2468101214', '$2y$12$vqbonDmel/NGkWnM8vnuleAWTX32T0P5pJZX82/rISGiFBOGbrgti', 7, 7),
(65, 'negra', 'manega', '369121518', '$2y$12$K0Bnib5wyuhtKv7pPB840.GkxjFBelPSodvwVlE1xc6H2mcvAttaC', 8, 7),
(66, 'lasi', 'perro Salchicha', '4812162024', '$2y$12$FTI.dvXazZR.TfortI9eZeImrv7bA045.L6hr4j4vNtTQ2oSy5Diu', 8, 9),
(67, 'Shun', 'perro', '510162025', '$2y$12$6tLjAkCQYKodwRmwoRegn.NPhAy9/XjFKxuyTdSYgLumib.U2m8Ze', 8, 7),
(68, 'shelpa', 'plomo', '612182430', '$2y$12$LYPy6L8eEoMwncoPjTl7hOYs8305mVBqusZDyZ44EynDK9bAp/1eG', 8, 7),
(69, 'magia', 'gato', '714212835', '$2y$12$WRIZlOiu6mMGDXioriq9/emDkM.U2cOJ.NayFZEVvtQTPHmetZW1C', 8, 2),
(70, 'Zeim', 'gato', '816243240', '$2y$12$3M59daC3SloRzHyaPUYnHetwBqF2Gl8/N2i9lUqNFmPf082mW0DLe', 8, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_asistencia`
--

CREATE TABLE `persona_asistencia` (
  `id_persona_asistencia` int(11) NOT NULL,
  `id_persona_fk_pa` int(11) NOT NULL,
  `id_asistencia_fk_pa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `tipo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `tipo`) VALUES
(7, 'administrador'),
(8, 'asistente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacacion`
--

CREATE TABLE `vacacion` (
  `id_vacacion` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacacion_persona`
--

CREATE TABLE `vacacion_persona` (
  `id_vacacion_persona` int(11) NOT NULL,
  `id_vacacion_fk_vp` int(11) NOT NULL,
  `id_persona_fk_vp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_all_persona`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_all_persona` (
`nombre` varchar(60)
,`apellido` varchar(60)
,`dni` varchar(12)
,`id_usuario_fk` int(11)
,`id_departamento_fk` int(11)
,`id_persona` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_all_usuarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_all_usuarios` (
`id_usuario` int(11)
,`tipo` varchar(60)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_mostrar_all_departamentos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_mostrar_all_departamentos` (
`id_departamento` int(11)
,`nombre` varchar(60)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_mostrar_persona_contra`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_mostrar_persona_contra` (
`dni` varchar(12)
,`apellido` varchar(60)
,`nombre` varchar(60)
,`id_persona` int(11)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_all_persona`
--
DROP TABLE IF EXISTS `vw_all_persona`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_all_persona`  AS SELECT `persona`.`nombre` AS `nombre`, `persona`.`apellido` AS `apellido`, `persona`.`dni` AS `dni`, `persona`.`id_usuario_fk` AS `id_usuario_fk`, `persona`.`id_departamento_fk` AS `id_departamento_fk`, `persona`.`id_persona` AS `id_persona` FROM `persona``persona`  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_all_usuarios`
--
DROP TABLE IF EXISTS `vw_all_usuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_all_usuarios`  AS SELECT `usuario`.`id_usuario` AS `id_usuario`, `usuario`.`tipo` AS `tipo` FROM `usuario``usuario`  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_mostrar_all_departamentos`
--
DROP TABLE IF EXISTS `vw_mostrar_all_departamentos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_mostrar_all_departamentos`  AS SELECT `departamento`.`id_departamento` AS `id_departamento`, `departamento`.`nombre` AS `nombre` FROM `departamento``departamento`  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_mostrar_persona_contra`
--
DROP TABLE IF EXISTS `vw_mostrar_persona_contra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_mostrar_persona_contra`  AS SELECT `persona`.`dni` AS `dni`, `persona`.`apellido` AS `apellido`, `persona`.`nombre` AS `nombre`, `persona`.`id_persona` AS `id_persona` FROM `persona``persona`  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `id_usuario_fk` (`id_usuario_fk`),
  ADD KEY `id_departamento_fk` (`id_departamento_fk`);

--
-- Indices de la tabla `persona_asistencia`
--
ALTER TABLE `persona_asistencia`
  ADD PRIMARY KEY (`id_persona_asistencia`),
  ADD KEY `id_persona_fk_pa` (`id_persona_fk_pa`),
  ADD KEY `id_asistencia_fk_pa` (`id_asistencia_fk_pa`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `vacacion`
--
ALTER TABLE `vacacion`
  ADD PRIMARY KEY (`id_vacacion`);

--
-- Indices de la tabla `vacacion_persona`
--
ALTER TABLE `vacacion_persona`
  ADD PRIMARY KEY (`id_vacacion_persona`),
  ADD KEY `id_vacacion_fk_vp` (`id_vacacion_fk_vp`),
  ADD KEY `id_persona_fk_vp` (`id_persona_fk_vp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `persona_asistencia`
--
ALTER TABLE `persona_asistencia`
  MODIFY `id_persona_asistencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `vacacion`
--
ALTER TABLE `vacacion`
  MODIFY `id_vacacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vacacion_persona`
--
ALTER TABLE `vacacion_persona`
  MODIFY `id_vacacion_persona` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`id_departamento_fk`) REFERENCES `departamento` (`id_departamento`);

--
-- Filtros para la tabla `persona_asistencia`
--
ALTER TABLE `persona_asistencia`
  ADD CONSTRAINT `persona_asistencia_ibfk_1` FOREIGN KEY (`id_persona_fk_pa`) REFERENCES `persona` (`id_persona`),
  ADD CONSTRAINT `persona_asistencia_ibfk_2` FOREIGN KEY (`id_asistencia_fk_pa`) REFERENCES `asistencia` (`id_asistencia`);

--
-- Filtros para la tabla `vacacion_persona`
--
ALTER TABLE `vacacion_persona`
  ADD CONSTRAINT `vacacion_persona_ibfk_1` FOREIGN KEY (`id_vacacion_fk_vp`) REFERENCES `vacacion` (`id_vacacion`),
  ADD CONSTRAINT `vacacion_persona_ibfk_2` FOREIGN KEY (`id_persona_fk_vp`) REFERENCES `persona` (`id_persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
