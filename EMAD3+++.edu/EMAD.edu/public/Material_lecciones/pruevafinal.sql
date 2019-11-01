-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2019 a las 04:20:53
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueva1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idAdmin` int(10) NOT NULL,
  `usuario` char(50) NOT NULL,
  `clave` char(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idAdmin`, `usuario`, `clave`) VALUES
(1, 'admin', 'Admin123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_a` int(10) NOT NULL,
  `nombre_alumnos` varchar(100) NOT NULL,
  `apellido_alumno` varchar(100) NOT NULL,
  `discapacidad_alumno` varchar(100) NOT NULL,
  `nivel_discapacidad` varchar(25) NOT NULL,
  `encargado_alumno` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `alergico_a` varchar(100) NOT NULL,
  `genero` char(10) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_a`, `nombre_alumnos`, `apellido_alumno`, `discapacidad_alumno`, `nivel_discapacidad`, `encargado_alumno`, `direccion`, `telefono`, `alergico_a`, `genero`, `usuario`, `clave`) VALUES
(1, 'Juana Marisol', 'Lopez Castillo', 'Sindrome de Down', 'Avanzado', 'Lisetth Castillo', 'Usulutan, El Salvador', '7845-5412', 'Penicilina', '', 'JuanaLopez', 'Juana12345'),
(2, 'Lorena Maria', 'Perez Aguilar', 'Autismo', 'Medio', 'Ines Aguilar', 'Usulutan, El Salvador', '7845-3020', 'Almendras', '', 'LorenaPerez', 'Lorena12345'),
(3, 'Miriam Elena', 'Turcios Araujo', 'Sindrome de Down', 'Medio', 'Mirna Araujo', 'Usulutan, El Salvador', '7412-3014', 'Nueces', '', 'MiriamTurcios', 'Miriam12345'),
(4, 'Maira Lorenza', 'Flores Pineda', 'Sindrome de Down', 'Medio', 'Mirna Araujo', 'Santiago de Maria, usulutan el salvador', '7845-9999', 'Penicilina', '', 'MairaFlores', '$2y$10$0F9DrOa9M82JlRkRbz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_a` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `grado` varchar(50) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `periodo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_a`, `nombre`, `grado`, `fecha`, `periodo`) VALUES
(1, '', 'primero', '2019-05-12', 'segundo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_d` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `dui` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_d`, `nombre`, `apellido`, `direccion`, `telefono`, `dui`, `usuario`, `clave`) VALUES
(1, 'Mirna Guadalupe', 'Lopez Gomez', 'Usulutan', '7845-9633', '02476985-3', 'MirnaLopez', 'Mirna0102'),
(2, 'Marcela', 'Sigaran', 'Santiago de Maria, usulutan el salvador', '7845-9666', '02415698-9', 'Marcela', 'Marc2505'),
(3, 'Jose ', 'Lopez', 'Santiago de Maria, usulutan el salvador', '7451-3225', '03147852-9', 'JoseL', '$$2y$10$0.9uzV8K6Q8A'),
(4, 'Carlos', 'Guzman', 'usulutan', '1234-5678', '98765432-0', 'Carlos1', '$2y$10$YAw.BUKLacKLf'),
(5, 'carloss', 'gomez', 'usulutan', '3456-7890', '98765432-0', 'Carlos2', '$2y$10$v0WS8RbBww2VS'),
(6, 'Juana', 'Alvarado', 'san dionicio', '1234-5678', '98765432-0', '', ''),
(7, 'Katerin ', 'perez', 'usulutan', '1234-5678', '98765432-0', 'Katerin1', '$2y$10$hTYv79dMqyn7m');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargado`
--

CREATE TABLE `encargado` (
  `id_e` int(10) NOT NULL,
  `nombre_encargado` varchar(100) NOT NULL,
  `apellido_encargado` varchar(100) NOT NULL,
  `dui_encargado` varchar(12) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encargado`
--

INSERT INTO `encargado` (`id_e`, `nombre_encargado`, `apellido_encargado`, `dui_encargado`, `direccion`, `telefono`) VALUES
(1, 'Marina', 'Perez', '02147852-9', 'marina656@gmail.com', '6006-8954');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `id_matricula` int(20) NOT NULL,
  `nombre_alumno` varchar(100) NOT NULL,
  `grado` varchar(50) NOT NULL,
  `periodo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`id_matricula`, `nombre_alumno`, `grado`, `periodo`) VALUES
(1, 'Mirna Guadalupe Perez', 'primero', 'segundo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subir_material`
--

CREATE TABLE `subir_material` (
  `id_material` int(10) NOT NULL,
  `material` char(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_a`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_a`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_d`);

--
-- Indices de la tabla `encargado`
--
ALTER TABLE `encargado`
  ADD PRIMARY KEY (`id_e`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id_matricula`);

--
-- Indices de la tabla `subir_material`
--
ALTER TABLE `subir_material`
  ADD PRIMARY KEY (`id_material`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdmin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_a` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_a` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_d` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `encargado`
--
ALTER TABLE `encargado`
  MODIFY `id_e` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id_matricula` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `subir_material`
--
ALTER TABLE `subir_material`
  MODIFY `id_material` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
