-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2020 a las 06:06:03
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_cargo` int(11) NOT NULL,
  `nombre_cargo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id_cargo`, `nombre_cargo`) VALUES
(1, 'Administrador'),
(2, 'Medico'),
(3, 'Enfermera'),
(4, 'Recepcionista'),
(5, 'Paciente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `id_enfermera` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `id_medico`, `id_enfermera`, `id_paciente`, `fecha`, `hora`) VALUES
(3, 1, 1, 15, '2020-09-10', '12:00'),
(5, 4, 2, 14, '2020-09-12', '21:45'),
(6, 4, 2, 15, '2020-09-20', '23:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinica`
--

CREATE TABLE `clinica` (
  `id_clinica` int(11) NOT NULL,
  `nombre_clinica` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_departamento` int(11) NOT NULL,
  `nombre_dep` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamento`, `nombre_dep`) VALUES
(1, 'Ahuachapan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermera`
--

CREATE TABLE `enfermera` (
  `id_enfermera` int(11) NOT NULL,
  `nombre_enfermera` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `turno` varchar(255) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `enfermera`
--

INSERT INTO `enfermera` (`id_enfermera`, `nombre_enfermera`, `telefono`, `direccion`, `turno`, `id_cargo`) VALUES
(1, 'Abigail estrada', '1000', 'san miguel', 'AM', 2),
(2, 'cristabel', '7009900', 'san miguel', 'AM', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id_especialidad` int(11) NOT NULL,
  `nombre_esp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id_especialidad`, `nombre_esp`) VALUES
(1, 'general');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expediente`
--

CREATE TABLE `expediente` (
  `num_expediente` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `diagnostico` varchar(255) DEFAULT NULL,
  `medicamento` varchar(255) DEFAULT NULL,
  `id_medico` int(11) NOT NULL,
  `peso` varchar(255) DEFAULT NULL,
  `altura` varchar(255) DEFAULT NULL,
  `cirugias` varchar(255) DEFAULT NULL,
  `antecedentes` varchar(255) DEFAULT NULL,
  `enfermedades` varchar(255) DEFAULT NULL,
  `vacunas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `expediente`
--

INSERT INTO `expediente` (`num_expediente`, `id_paciente`, `diagnostico`, `medicamento`, `id_medico`, `peso`, `altura`, `cirugias`, `antecedentes`, `enfermedades`, `vacunas`) VALUES
(5, 14, '', '', 4, '180', '', '', '', '', ''),
(6, 15, 'calentura', 'paracetamol', 1, '105', '190', 'ninguna', 'azucar', 'tos', 'todas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_paciente`
--

CREATE TABLE `ficha_paciente` (
  `id_paciente` int(11) NOT NULL,
  `Dui_paciente` varchar(255) DEFAULT NULL,
  `nombre_paciente` varchar(255) DEFAULT NULL,
  `fecha_nacimiento` varchar(255) DEFAULT NULL,
  `edad` varchar(255) DEFAULT NULL,
  `genero` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id_responsable` int(11) NOT NULL,
  `alergia` varchar(255) DEFAULT NULL,
  `grupo_sanguineo` varchar(255) DEFAULT NULL,
  `id_cargo` int(11) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ficha_paciente`
--

INSERT INTO `ficha_paciente` (`id_paciente`, `Dui_paciente`, `nombre_paciente`, `fecha_nacimiento`, `edad`, `genero`, `telefono`, `id_departamento`, `id_municipio`, `direccion`, `email`, `id_responsable`, `alergia`, `grupo_sanguineo`, `id_cargo`, `estado`) VALUES
(14, '05426485-0', 'SARAI', '1996-10-13', '23', NULL, '75220232', 1, 1, 'Bo san Francisco', 'rsarairuth@hotmail.com', 1, 'NADA', 'o+', 1, 'de baja'),
(15, '1349743', 'Luis Miguel', '1999-05-05', '21', 'Masculino', '75220232', 1, 1, 'san miguel', 'kjjkh', 1, 'nada', 'oh', 1, 'activo'),
(16, '05426485-0', 'Ruth Sara Rivas Decorado', '1996-10-13', '24', NULL, '75220232', 1, 1, '15 calle pte barrio san nicolas', 'rsarairivas@gmail.com', 1, 'polvo', 'o+', 5, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id_medico` int(11) NOT NULL,
  `nombre_medico` varchar(255) DEFAULT NULL,
  `JVPM` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `Userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id_medico`, `nombre_medico`, `JVPM`, `telefono`, `direccion`, `id_especialidad`, `estado`, `id_cargo`, `Userid`) VALUES
(1, 'Walter Vent', '15750', '72727272', 'barcelona metro', 1, 'activo', 1, 3),
(4, 'Vilma ', '15752', '70000000', 'la pacifica', 1, 'activo', 2, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipio` int(11) NOT NULL,
  `nombre_mun` varchar(255) DEFAULT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipio`, `nombre_mun`, `id_departamento`) VALUES
(1, 'Ahuachapan', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepcionista`
--

CREATE TABLE `recepcionista` (
  `id_recepcionista` int(11) NOT NULL,
  `nombre_recepcionista` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `turno` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recepcionista`
--

INSERT INTO `recepcionista` (`id_recepcionista`, `nombre_recepcionista`, `apellido`, `telefono`, `turno`, `direccion`, `id_cargo`) VALUES
(2, 'ana ana', 'rivas', '1', NULL, 'san miguel', 4),
(4, 'miguel', 'flores', '72720000', NULL, 'bo san nicolas', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `id_receta` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `fecha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`id_receta`, `id_paciente`, `id_medico`, `descripcion`, `fecha`) VALUES
(9, 14, 4, 'paracetamol', '2020-09-11'),
(12, 15, 4, NULL, '2020-09-11'),
(13, 14, 1, 'acetaminofen', '2020-09-11'),
(20, 16, 1, 'acetaminofen', '2020-09-11'),
(22, 16, 4, 'azitromicina', '2020-09-30'),
(23, 15, 4, 'paracetamol', '2020-09-17'),
(24, 16, 1, 'azitromicina', '2020-09-12'),
(25, 14, 1, 'amoxiclina', '2020-09-24'),
(26, 14, 1, 'azitromicina', '2020-09-26'),
(27, 15, 1, 'amoxiclina', '2020-09-27'),
(28, 16, 4, 'amoxiclina', '2020-09-20'),
(29, 14, 1, 'acetaminofen', '2020-09-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable`
--

CREATE TABLE `responsable` (
  `id_responsable` int(11) NOT NULL,
  `Dui_responsable` varchar(255) DEFAULT NULL,
  `nombre_responsable` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `responsable`
--

INSERT INTO `responsable` (`id_responsable`, `Dui_responsable`, `nombre_responsable`, `telefono`, `direccion`) VALUES
(1, '05426485-0', 'Ruth Rivas', '75220232', 'San miguel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Userid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Userid`, `username`, `email`, `pass`, `id_cargo`) VALUES
(4, 'miguel', 'Luisflorescorreodejuegos@gmail.com', '$2y$10$y2X5MzKmfDCY8hz7m2dCT.rJwnAxl2.uLZlA78w127Hq/it4MdvZy', 1),
(8, 'alberto', 'alberto@gmail.com', '$2y$10$H7Vm732AWCyA0gDhly39XeizRKqiunfZZE7EuO.e9LV5mBRQXZOSO', 3),
(10, 'burbuja', 'burbuja@gmail.com', '$2y$10$KKjJfMiNQwi1A7W8jh8OVu99hw.OSwmI3VUicYFyWWbJYhnih2obm', 5),
(13, 'estefan', 'estefan@gmail.com', '123456', 2),
(16, 'estefan', 'estefan@gmail.com', '123456', 2),
(17, 'estefan', 'estefan@gmail.com', '123456', 2),
(18, 'estefan', 'estefan@gmail.com', '123456', 2),
(19, 'esther', 'ester@gmail.com', NULL, 2),
(20, 'esther', 'rsarairivas@gmail.com', NULL, 2),
(21, 'ruth', 'rsarairuth@hotmail.com', NULL, 2),
(22, 'ruth', 'estefan@gmail.com', NULL, 1),
(23, 'luisito', 'luisito@gmail.com', '$2y$10$M0Nj34NeW2cHLU3PYnAFau8j47O/aJyrn5UvcLiluwIx3f.BQLPiG', 5),
(25, 'albaruth', 'albaruth@gmail.com', '$2y$10$CR3Ha1j1WvgRPHGSEyw4UuWqF/q8V082BZoW8by28LYgypcIs3LNC', 2),
(26, 'carlos', 'sagas1416@gmail.com', '$2y$10$dVaFgcMelnYsCMzXAEP7euRTR4T5cnTcYRXBlva53gmVLXynAmRAK', 4),
(27, 'anas', 'anas@gmail.com', '$2y$10$XV8Eo81TCxnzw7ajCEXJMOukxV7JOPsEd5eBmMXZtTIPZ1ms3MXL6', 5),
(28, 'admin3', 'admin3@gmail.com', '$2y$10$ZTpDWbf7wZrt49pOtzoHeuRzoLl.37zGAbqbLpoIgFVxjAY7rGolu', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_medico` (`id_medico`),
  ADD KEY `id_enfermera` (`id_enfermera`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `clinica`
--
ALTER TABLE `clinica`
  ADD PRIMARY KEY (`id_clinica`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `enfermera`
--
ALTER TABLE `enfermera`
  ADD PRIMARY KEY (`id_enfermera`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id_especialidad`);

--
-- Indices de la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD PRIMARY KEY (`num_expediente`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_medico` (`id_medico`);

--
-- Indices de la tabla `ficha_paciente`
--
ALTER TABLE `ficha_paciente`
  ADD PRIMARY KEY (`id_paciente`),
  ADD KEY `id_departamento` (`id_departamento`),
  ADD KEY `id_municipio` (`id_municipio`),
  ADD KEY `id_responsable` (`id_responsable`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_medico`),
  ADD KEY `id_especialidad` (`id_especialidad`),
  ADD KEY `id_cargo` (`id_cargo`),
  ADD KEY `Userid` (`Userid`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `id_departamento` (`id_departamento`);

--
-- Indices de la tabla `recepcionista`
--
ALTER TABLE `recepcionista`
  ADD PRIMARY KEY (`id_recepcionista`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`id_receta`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_medico` (`id_medico`);

--
-- Indices de la tabla `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`id_responsable`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Userid`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clinica`
--
ALTER TABLE `clinica`
  MODIFY `id_clinica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `enfermera`
--
ALTER TABLE `enfermera`
  MODIFY `id_enfermera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id_especialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `expediente`
--
ALTER TABLE `expediente`
  MODIFY `num_expediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ficha_paciente`
--
ALTER TABLE `ficha_paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `recepcionista`
--
ALTER TABLE `recepcionista`
  MODIFY `id_recepcionista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `id_receta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `responsable`
--
ALTER TABLE `responsable`
  MODIFY `id_responsable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`id_enfermera`) REFERENCES `enfermera` (`id_enfermera`),
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`id_paciente`) REFERENCES `ficha_paciente` (`id_paciente`);

--
-- Filtros para la tabla `enfermera`
--
ALTER TABLE `enfermera`
  ADD CONSTRAINT `enfermera_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`);

--
-- Filtros para la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD CONSTRAINT `expediente_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `ficha_paciente` (`id_paciente`),
  ADD CONSTRAINT `expediente_ibfk_2` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`);

--
-- Filtros para la tabla `ficha_paciente`
--
ALTER TABLE `ficha_paciente`
  ADD CONSTRAINT `ficha_paciente_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id_departamento`),
  ADD CONSTRAINT `ficha_paciente_ibfk_2` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`),
  ADD CONSTRAINT `ficha_paciente_ibfk_3` FOREIGN KEY (`id_responsable`) REFERENCES `responsable` (`id_responsable`),
  ADD CONSTRAINT `ficha_paciente_ibfk_4` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`);

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidad` (`id_especialidad`),
  ADD CONSTRAINT `medico_ibfk_2` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`);

--
-- Filtros para la tabla `recepcionista`
--
ALTER TABLE `recepcionista`
  ADD CONSTRAINT `recepcionista_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`);

--
-- Filtros para la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD CONSTRAINT `recetas_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `ficha_paciente` (`id_paciente`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
