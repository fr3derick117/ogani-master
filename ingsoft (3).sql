-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2023 a las 18:48:11
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ingsoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `idingrediente` int(11) NOT NULL,
  `nombre_ingrediente` varchar(45) DEFAULT NULL,
  `tipo_ingrediente` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`idingrediente`, `nombre_ingrediente`, `tipo_ingrediente`) VALUES
(1, 'Esencia de Vainilla', 'Liquido'),
(2, 'Leche', 'Liquido'),
(3, 'Leche evaporada Carnation', 'Liquido'),
(4, 'Agua', 'Liquido'),
(5, 'Jugo de limon', 'Liquido'),
(6, 'Jugo de naranja', 'Liquido'),
(7, 'Jugo de uva', 'Liquido'),
(8, 'Vinagre Blanco', 'Liquido'),
(9, 'Refresco', 'Liquido'),
(10, 'Vinagre de Manzana', 'Liquido'),
(11, 'Aceite de oliva', 'Liquido'),
(12, 'Aceite de canola', 'Liquido'),
(13, 'Aceite de coco', 'Liquido'),
(14, 'Aceite de almendras', 'Liquido'),
(15, 'Aceite de aguacate', 'Liquido'),
(16, 'Harina', 'Solido'),
(17, 'Canela', 'Solido'),
(18, 'Nueces', 'Solido'),
(19, 'Maizena', 'Solido'),
(20, 'Azucar', 'Solido'),
(21, 'Harina de trigo', 'Solido'),
(22, 'Mantequilla', 'Solido'),
(23, 'Avena', 'Solido'),
(24, 'Arroz', 'Solido'),
(25, 'Lentejas', 'Solido'),
(26, 'Pasta', 'Solido'),
(27, 'Polvo para hornear', 'Solido'),
(28, 'Sal', 'Solido'),
(29, 'Harina de arroz', 'Solido'),
(30, 'Oregano', 'Solido'),
(31, 'Tomate', 'Pieza'),
(32, 'Lechicga', 'Pieza'),
(33, 'Papa', 'Pieza'),
(34, 'Pimiento', 'Pieza'),
(35, 'Zanahoria', 'Pieza'),
(36, 'Limon', 'Pieza'),
(37, 'Manzana', 'Pieza'),
(38, 'Platano', 'Pieza'),
(39, 'Fresa', 'Pieza'),
(40, 'Naranja', 'Pieza'),
(41, 'Queso', 'Pieza'),
(42, 'Huevo', 'Pieza'),
(43, 'Tortilla', 'Pieza'),
(44, 'Pan', 'Pieza'),
(45, 'Pescado', 'Pieza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes_de_receta`
--

CREATE TABLE `ingredientes_de_receta` (
  `receta_idreceta` int(11) NOT NULL,
  `ingredientes_idingrediente` int(11) NOT NULL,
  `cantidad` decimal(3,2) DEFAULT NULL,
  `medida` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liquidos`
--

CREATE TABLE `liquidos` (
  `medidas_sol` varchar(45) DEFAULT NULL,
  `ingredientes_idingrediente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `liquidos`
--

INSERT INTO `liquidos` (`medidas_sol`, `ingredientes_idingrediente`) VALUES
('100 ml', 1),
('250 ml', 2),
('360 ml', 3),
('500 ml', 4),
('100 ml', 5),
('50 ml', 6),
('120 ml', 7),
('10 ml', 8),
('400 ml', 9),
('200 ml', 10),
('400 ml', 11),
('500 ml', 12),
('75 ml', 13),
('230 ml', 14),
('200ml', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piezas`
--

CREATE TABLE `piezas` (
  `medidas_pz` varchar(45) DEFAULT NULL,
  `ingredientes_idingrediente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `idreceta` int(11) NOT NULL,
  `nombre_receta` varchar(45) DEFAULT NULL,
  `porciones` int(11) DEFAULT NULL,
  `tiempo_preparacion` varchar(45) DEFAULT NULL,
  `tiempo_comida` varchar(45) DEFAULT NULL,
  `tipo_comida` varchar(45) DEFAULT NULL,
  `tipo_preferencia` varchar(45) DEFAULT NULL,
  `dificultad` varchar(45) DEFAULT NULL,
  `preparacion` text DEFAULT NULL,
  `fotos` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `idingredientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`idreceta`, `nombre_receta`, `porciones`, `tiempo_preparacion`, `tiempo_comida`, `tipo_comida`, `tipo_preferencia`, `dificultad`, `preparacion`, `fotos`, `usuario_idusuario`, `idingredientes`) VALUES
(2, 'prueba', 2, 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 1, 0),
(9, 'prueba', 1, '1 mim', 'Desayuno', 'Entrada', 'Mariscos', 'Alta', 'prueba', 'prueba', 1, 0),
(10, 'prueba', 1, '1 mim', 'Desayuno', 'Entrada', 'Mariscos', 'Alta', 'prueba', 'prueba', 1, 0),
(11, 'prueba', 1, '1 mim', 'Desayuno', 'Entrada', 'Mariscos', 'Alta', 'prueba', 'prueba', 1, 0),
(12, 'prueba', 1, '1 mim', 'Desayuno', 'Entrada', 'Mariscos', 'Alta', 'prueba', 'prueba', 1, 0),
(20, 'Vania', 1, '5 segs', 'Comida', 'Postre', 'Lácteos', 'Alta', 'LLL', 'prueba', 1, 0),
(21, 'Vania', 1, '5 segs', 'Comida', 'Postre', 'Lácteos', 'Alta', 'LLL', 'prueba', 1, 2),
(22, 'Vania', 1, '5 segs', 'Comida', 'Postre', 'Lácteos', 'Alta', 'LLL', 'prueba', 1, 2),
(23, 'Vania', 1, '5 segs', 'Comida', 'Postre', 'Lácteos', 'Alta', 'LLL', 'prueba', 1, 2),
(24, 'prueba1', 2, '2 min', 'Desayuno', 'Entrada', 'Mariscos', 'Alta', 'prueba1', 'prueba', 1, 1),
(28, 'ax', 9, '0', 'Desayuno', 'Entrada', 'Mariscos', 'Alta', 'jjn', 'prueba', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solidos`
--

CREATE TABLE `solidos` (
  `medidas_sol` varchar(45) DEFAULT NULL,
  `ingredientes_idingrediente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solidos`
--

INSERT INTO `solidos` (`medidas_sol`, `ingredientes_idingrediente`) VALUES
('500 gr', 16),
('100 gr', 17),
('25 gr', 18),
('350 gr', 19),
('150 gr', 20),
('250 gr', 21),
('25 gr', 22),
('50 gr', 23),
('100 gr', 24),
('75 gr', 25),
('100 gr', 26),
('25 gr', 27),
('20 gr', 28),
('75 gr', 29),
('30 gr', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre_usuario` varchar(45) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `favoritos` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre_usuario`, `contrasena`, `favoritos`) VALUES
(1, 'admin', 'admin', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`idingrediente`);

--
-- Indices de la tabla `ingredientes_de_receta`
--
ALTER TABLE `ingredientes_de_receta`
  ADD PRIMARY KEY (`receta_idreceta`,`ingredientes_idingrediente`),
  ADD KEY `fk_receta_has_ingredientes_ingredientes1_idx` (`ingredientes_idingrediente`),
  ADD KEY `fk_receta_has_ingredientes_receta1_idx` (`receta_idreceta`);

--
-- Indices de la tabla `liquidos`
--
ALTER TABLE `liquidos`
  ADD PRIMARY KEY (`ingredientes_idingrediente`);

--
-- Indices de la tabla `piezas`
--
ALTER TABLE `piezas`
  ADD PRIMARY KEY (`ingredientes_idingrediente`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`idreceta`),
  ADD KEY `fk_receta_usuario1` (`usuario_idusuario`);

--
-- Indices de la tabla `solidos`
--
ALTER TABLE `solidos`
  ADD PRIMARY KEY (`ingredientes_idingrediente`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `idreceta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ingredientes_de_receta`
--
ALTER TABLE `ingredientes_de_receta`
  ADD CONSTRAINT `fk_receta_has_ingredientes_ingredientes1` FOREIGN KEY (`ingredientes_idingrediente`) REFERENCES `ingredientes` (`idingrediente`),
  ADD CONSTRAINT `fk_receta_has_ingredientes_receta1` FOREIGN KEY (`receta_idreceta`) REFERENCES `receta` (`idreceta`);

--
-- Filtros para la tabla `liquidos`
--
ALTER TABLE `liquidos`
  ADD CONSTRAINT `fk_liquidos_ingredientes1` FOREIGN KEY (`ingredientes_idingrediente`) REFERENCES `ingredientes` (`idingrediente`);

--
-- Filtros para la tabla `piezas`
--
ALTER TABLE `piezas`
  ADD CONSTRAINT `fk_piezas_ingredientes1` FOREIGN KEY (`ingredientes_idingrediente`) REFERENCES `ingredientes` (`idingrediente`);

--
-- Filtros para la tabla `receta`
--
ALTER TABLE `receta`
  ADD CONSTRAINT `fk_receta_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `solidos`
--
ALTER TABLE `solidos`
  ADD CONSTRAINT `fk_solidos_ingredientes1` FOREIGN KEY (`ingredientes_idingrediente`) REFERENCES `ingredientes` (`idingrediente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;