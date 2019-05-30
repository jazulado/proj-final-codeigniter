-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2019 a las 03:36:19
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_citas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `idcita` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `idmedico` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `observacionescita` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`idcita`, `idpaciente`, `idmedico`, `fecha`, `hora`, `observacionescita`) VALUES
(1, 2, 1, '2019-05-08', '00:00:00', '<p>\n	<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget urna consequat, maximus tortor vel, hendrerit ex. Etiam sem sem, posuere in nunc non, gravida tristique nibh.</span></p>\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `idciudad` int(11) NOT NULL,
  `nombreciudad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`idciudad`, `nombreciudad`) VALUES
(1, 'Medellin'),
(2, 'Bogota'),
(3, 'Cali'),
(4, 'Popayan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulas`
--

CREATE TABLE `formulas` (
  `idformula` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `idmedico` int(11) NOT NULL,
  `fechaformula` datetime NOT NULL,
  `ref1` int(11) NOT NULL,
  `cant1` int(11) NOT NULL,
  `ref2` int(11) NOT NULL,
  `cant2` int(11) NOT NULL,
  `ref3` int(11) NOT NULL,
  `cant3` int(11) NOT NULL,
  `observacionesformula` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiaclinica`
--

CREATE TABLE `historiaclinica` (
  `idhistoria` int(11) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `idmedico` int(11) NOT NULL,
  `idciudad` int(11) NOT NULL,
  `estatura` varchar(4) NOT NULL,
  `peso` varchar(5) NOT NULL,
  `motivoconsulta` mediumtext NOT NULL,
  `antecedentes` mediumtext NOT NULL,
  `diagnostico` mediumtext NOT NULL,
  `tratamiento` mediumtext NOT NULL,
  `fechaingreso` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `refmedicamento` varchar(50) NOT NULL,
  `nombremedicamento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`refmedicamento`, `nombremedicamento`) VALUES
('D8A', 'Acetaminofen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `idmedico` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `idciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`idmedico`, `nombre`, `apellidos`, `telefono`, `email`, `direccion`, `idciudad`) VALUES
(1, 'Norman ', 'Perez', '213231', 'normanpere@gmai.com', 'CRA 80 870', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `idpaciente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `idciudad` int(11) NOT NULL,
  `observaciones` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`idpaciente`, `nombre`, `apellido`, `telefono`, `email`, `direccion`, `idciudad`, `observaciones`) VALUES
(1, 'Marisol Ramirez', 'Marisol Ramirez', '4343432', 'anlly.08uribe@outlook.com', 'Marisol Ramirez CRA 48', 1, '<p>\n	<span style=\"color: rgb(0, 0, 0);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget urna consequat, maximus tortor vel, hendrerit ex. Etiam sem sem, posuere in nunc non, gravida tristique nibh.</span></p>\n'),
(2, 'Pedro', 'Isaza', '78430927', 'pedro@jmail.com', 'Cra 21 21 ', 1, '<p>\n	<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget urna consequat, maximus tortor vel, hendrerit ex. Etiam sem sem, posuere in nunc non, gravida tristique nibh.</span></p>\n'),
(3, 'Juan', ' Ramirez', '4343432', 'juanho@outlook.com', 'CRA 2934 84', 2, '<p>\n	Marisol RamirezMarisol RamirezMarisol RamirezMarisol RamirezMarisol Ramirez</p>\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`idcita`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`idciudad`);

--
-- Indices de la tabla `formulas`
--
ALTER TABLE `formulas`
  ADD PRIMARY KEY (`idformula`);

--
-- Indices de la tabla `historiaclinica`
--
ALTER TABLE `historiaclinica`
  ADD PRIMARY KEY (`idhistoria`);

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`refmedicamento`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`idmedico`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idpaciente`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idcita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `idciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `formulas`
--
ALTER TABLE `formulas`
  MODIFY `idformula` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historiaclinica`
--
ALTER TABLE `historiaclinica`
  MODIFY `idhistoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `idmedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `idpaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
