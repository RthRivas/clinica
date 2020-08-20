-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2020 a las 04:41:26
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
-- Base de datos: `clinica`
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
(1, 'Medico'),
(2, 'Enfermera'),
(3, 'Paciente');

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
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `enfermera`
--

INSERT INTO `enfermera` (`id_enfermera`, `nombre_enfermera`, `id_cargo`) VALUES
(1, 'Abigail', 2);

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
(5, 14, '', '', 1, '180', '', '', '', '', ''),
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
(1, '05426485-0', 'ana estebana', '1996-10-13', '23', 'Femenino', '75220232', 1, 1, 'Bo san nicolas', 'rsarairuth@hotmail.com', 1, 'NADA', 'o+', 1, 'activo'),
(14, '05426485-0', 'SARA', '1996-10-13', '23', 'Femenino', '75220232', 1, 1, 'Bo san Francisco', 'rsarairuth@hotmail.com', 1, 'NADA', 'o+', 1, 'de baja'),
(15, '1349743', 'Luis Miguel', '1999-05-05', '21', 'Masculino', '75220232', 1, 1, 'san miguel', 'kjjkh', 1, 'nada', 'oh', 1, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id_medico` int(11) NOT NULL,
  `nombre_medico` varchar(255) DEFAULT NULL,
  `JVPM` varchar(255) DEFAULT NULL,
  `id_especialidad` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id_medico`, `nombre_medico`, `JVPM`, `id_especialidad`, `id_cargo`) VALUES
(1, 'walter bonilla', '15750', 1, 1),
(3, 'sandra benavidez', '20205', 1, 1);

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
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `id_receta` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `fecha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, 'carlos', 'sagas1416@gmail.com', '$2y$10$TDOmrGquPDOLrBG8Xx30VesjEYaTSroAO2038qppeF/rU9de7x5n2', 3),
(4, 'miguel', 'Luisflorescorreodejuegos@gmail.com', '$2y$10$y2X5MzKmfDCY8hz7m2dCT.rJwnAxl2.uLZlA78w127Hq/it4MdvZy', 3),
(5, 'alba', 'derivasalba@gmail.com', 'burbuja', 1),
(6, 'admin', 'rsarairivas@gmail.com', '$2y$10$jZo96bag88uwyQGeozsX/.ZxqKKyLhE3KBpFAMmgQu2nKN9xG.fVi', 1),
(7, 'sarai', 'sarai@gmail.com', '$2y$10$JCFVAar1dl9YN67r8pmmJu.6D7T7.ko0/ev4wxQNG7b2CgKgckP9y', 3),
(8, 'alberto', 'alberto@gmail.com', '$2y$10$H7Vm732AWCyA0gDhly39XeizRKqiunfZZE7EuO.e9LV5mBRQXZOSO', 3),
(9, 'julio', 'julio@gmail.com', '$2y$10$DPeqsUfflFptqagdd5JwO.00ElTLnvgI9pEAaRgRhk9sHrO86tSe.', 3);

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
  ADD KEY `id_cargo` (`id_cargo`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `id_departamento` (`id_departamento`);

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`id_receta`),
  ADD KEY `id_paciente` (`id_paciente`);

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
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `enfermera`
--
ALTER TABLE `enfermera`
  MODIFY `id_enfermera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `id_receta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `responsable`
--
ALTER TABLE `responsable`
  MODIFY `id_responsable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
