-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2023 a las 09:27:01
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `maxderclothing`
--

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `camisetas`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `camisetas` (
`nombre` varchar(45)
,`idProd` varchar(45)
,`talla` varchar(3)
,`precio` float
,`composicion` varchar(45)
,`cuidados` varchar(45)
,`imagen` varchar(250)
,`prenda` varchar(15)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `sexo` varchar(6) NOT NULL,
  `numeroVisitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombre`, `apellidos`, `sexo`, `numeroVisitas`) VALUES
(3, 'Manuel', 'Figueroa', 'hombre', 9),
(4, 'Lola', 'Lolita', 'mujer', 17),
(5, 'David ', 'Bisbal', 'hombre', 3),
(5, 'Jose', 'Gordo', 'hombre', 1),
(6, 'Jose', 'Gordo', 'hombre', 1),
(7, 'Jose', 'Gordo', 'hombre', 1),
(8, 'Jose', 'Gordo', 'hombre', 1),
(9, 'Jose', 'Gordo', 'hombre', 1),
(10, 'Jose', 'Gordo', 'hombre', 1),
(11, 'Simona', 'Simonez', 'mujer', 1),
(12, 'Simona', 'Simonez', 'mujer', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `galeriaropa`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `galeriaropa` (
`nombre` varchar(45)
,`idProd` varchar(45)
,`talla` varchar(3)
,`precio` float
,`composicion` varchar(45)
,`cuidados` varchar(45)
,`imagen` varchar(250)
,`prenda` varchar(15)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guarda`
--

CREATE TABLE `guarda` (
  `tienda_numero` varchar(45) NOT NULL,
  `tienda_calle` varchar(45) NOT NULL,
  `producto_nombre` varchar(45) NOT NULL,
  `producto_idProd` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `pantalones`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `pantalones` (
`nombre` varchar(45)
,`idProd` varchar(45)
,`talla` varchar(3)
,`precio` float
,`composicion` varchar(45)
,`cuidados` varchar(45)
,`imagen` varchar(250)
,`prenda` varchar(15)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `nombre` varchar(45) NOT NULL,
  `idProd` varchar(45) NOT NULL,
  `talla` varchar(3) NOT NULL,
  `precio` float NOT NULL,
  `composicion` varchar(45) NOT NULL,
  `cuidados` varchar(45) NOT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `prenda` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`nombre`, `idProd`, `talla`, `precio`, `composicion`, `cuidados`, `imagen`, `prenda`) VALUES
('Camiseta 1 Línea Distorted', '2', 'XXL', 7, 'algodon', 'Lavarlo con cuidado', 'imagenes/camiseta.jpg', 'pantalones'),
('Camiseta 2 Línea Distorted', '3', 'XS', 5, 'algodon', 'Lavarlo con cariño', 'imagenes/camiseta.jpg', 'camiseta'),
('Pantalones 1 Línea Distorted', '4', '53', 13, 'algodon, poliester', 'Lavarlo cada año bisiesto', 'imagenes/pantalones.jpg', 'pantalones'),
('Sudadera 1 Línea Distorted', '1', 'XL', 10, 'algodon, poliester', 'lavarlo en seco', 'imagenes/sudadera.jpg', 'sudadera'),
('Sudadera 2 Línea Distorted', '5', 'XXL', 15, 'algodon, poliester', 'Lavarlo en seco', 'imagenes/sudadera.jpg', 'sudadera'),
('sudadera DEATH_IS_BEATIFUL', '6', 'XL', 15, 'poliester', 'Lavar con cuidado', 'imagenes/sudadera DEATH_IS_BEATIFUL.png', 'sudadera'),
('Sudadera Euphoria', '8', 'XS', 20, 'poliester', 'lavarlo con cuidado', 'imagenes/Sudadera Euphoria.png', 'sudadera'),
('Sudadera Euphoria 2', '7', 'XL', 15, 'poliester', 'Lavar con cuidado', 'imagenes/Sudadera Euphoria 2.png', 'sudadera');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `sudadera`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `sudadera` (
`nombre` varchar(45)
,`idProd` varchar(45)
,`talla` varchar(3)
,`precio` float
,`composicion` varchar(45)
,`cuidados` varchar(45)
,`imagen` varchar(250)
,`prenda` varchar(15)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `numero` varchar(45) NOT NULL,
  `calle` varchar(45) NOT NULL,
  `provincia` varchar(15) NOT NULL,
  `ProductoStock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`numero`, `calle`, `provincia`, `ProductoStock`) VALUES
('1', 'c/ Marcos, 2', 'Almería', 87),
('2', 'c/ Grosella, 99', 'Granada', 250),
('3', 'c/ Lope de Vega, 5', 'Murcia', 210),
('4', 'c/ Trinidad, 6', 'Alicante', 99),
('5', 'c/ Miguel Cervantes, 7', 'Almería', 200),
('6', 'c/ Marcos, 3', 'Barcelona', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsu` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `sexo` varchar(6) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `nivel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsu`, `password`, `nombre`, `apellidos`, `dni`, `telefono`, `email`, `sexo`, `pais`, `direccion`, `nivel`) VALUES
('admin', 'Admin1234', 'Maxim', 'Deryabin', '1234567B', '123123123', 'maximderyabin1902@gmail.com', 'hombre', 'España', 'C/ Pontevedra, 9', 2),
('Daniela', 'holjvnwonv', 'Daniela', 'Placeres', '32132132V', '660550550', 'danielasweet2@gmail.com', 'mujer', 'España', 'c/ Peralta, 45', 1),
('Daniela2', 'zcidDH3i2u3', 'Daniela', 'Dolores', '12312312V', '670987422', 'danielapains3@gmail.com', 'mujer', 'España', 'Av. Juan Carlos I, 7', 2),
('Daniela3', 'ZcidDH3i2u3', 'Daniela', 'Dolores', '12312312V', '670987422', 'danielapains3@gmail.com', 'mujer', 'España', 'Av. Juan Carlos I, 7', 2),
('Juan2', 'JuanJOse123_', 'Juan', 'Jose', '74489356S', '123123123', 'xd345@gmail.com', 'hombre', 'España', 'c/ Ramírez, 7', 1),
('Miguel', 'Miguelelmejor', 'Paco', 'Paquillo', '11122233R', '643111222', 'pacomiguel@gmail.com', 'hombre', 'España', 'c/ Caracas, 14', 1),
('Roger', 'itsRoger123', 'Roger', 'Birmingham', 'X77788899', '643640640', 'rogerbirmin@gmail.com', 'hombre', 'España', 'c/ Londres, 4', 1),
('Ruben', 'x56Zs34c35f', 'Ruben', 'Rubio', '33322211F', '645155155', 'rubenrubio43@gmail.com', 'hombre', 'España', 'c/ Molinos, 3, Bloque 2, 3C', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `nombre` varchar(30) NOT NULL,
  `idVend` int(11) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `sexo` varchar(6) NOT NULL,
  `cantidadVendida` int(11) NOT NULL,
  `tienda_numero` varchar(45) NOT NULL,
  `tienda_calle` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`nombre`, `idVend`, `apellidos`, `sexo`, `cantidadVendida`, `tienda_numero`, `tienda_calle`) VALUES
('Denisa', 5, 'Margarita', 'hombre', 99, '5', 'c/ Miguel Cervantes, 7'),
('Felipe', 4, 'Estaña', 'hombre', 32, '4', 'c/ Trinidad, 6'),
('María', 2, 'Pereira', 'mujer', 24, '2', 'c/ Grosella, 99'),
('Maxim', 1, 'Maximovski', 'hombre', 12, '1', 'c/ Marcos, 2 '),
('Roberta', 3, 'Cejuda', 'mujer', 56, '3', 'c/ Lope de Vega, 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `vendedor_nombre` varchar(30) NOT NULL,
  `vendedor_idVend` int(11) NOT NULL,
  `cliente_idcliente` int(11) NOT NULL,
  `cliente_nombre` varchar(45) NOT NULL,
  `factura` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventaonlline`
--

CREATE TABLE `ventaonlline` (
  `usuario_idUsu` varchar(45) NOT NULL,
  `usuario_password` varchar(45) NOT NULL,
  `tienda_numero` varchar(45) NOT NULL,
  `tienda_calle` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura para la vista `camisetas`
--
DROP TABLE IF EXISTS `camisetas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `camisetas`  AS SELECT `producto`.`nombre` AS `nombre`, `producto`.`idProd` AS `idProd`, `producto`.`talla` AS `talla`, `producto`.`precio` AS `precio`, `producto`.`composicion` AS `composicion`, `producto`.`cuidados` AS `cuidados`, `producto`.`imagen` AS `imagen`, `producto`.`prenda` AS `prenda` FROM `producto` WHERE `producto`.`prenda` = 'camiseta' ;

-- --------------------------------------------------------

--
-- Estructura para la vista `galeriaropa`
--
DROP TABLE IF EXISTS `galeriaropa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `galeriaropa`  AS SELECT `producto`.`nombre` AS `nombre`, `producto`.`idProd` AS `idProd`, `producto`.`talla` AS `talla`, `producto`.`precio` AS `precio`, `producto`.`composicion` AS `composicion`, `producto`.`cuidados` AS `cuidados`, `producto`.`imagen` AS `imagen`, `producto`.`prenda` AS `prenda` FROM `producto` ORDER BY `producto`.`idProd` ASC ;

-- --------------------------------------------------------

--
-- Estructura para la vista `pantalones`
--
DROP TABLE IF EXISTS `pantalones`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pantalones`  AS SELECT `producto`.`nombre` AS `nombre`, `producto`.`idProd` AS `idProd`, `producto`.`talla` AS `talla`, `producto`.`precio` AS `precio`, `producto`.`composicion` AS `composicion`, `producto`.`cuidados` AS `cuidados`, `producto`.`imagen` AS `imagen`, `producto`.`prenda` AS `prenda` FROM `producto` WHERE `producto`.`prenda` = 'pantalones' ;

-- --------------------------------------------------------

--
-- Estructura para la vista `sudadera`
--
DROP TABLE IF EXISTS `sudadera`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sudadera`  AS SELECT `producto`.`nombre` AS `nombre`, `producto`.`idProd` AS `idProd`, `producto`.`talla` AS `talla`, `producto`.`precio` AS `precio`, `producto`.`composicion` AS `composicion`, `producto`.`cuidados` AS `cuidados`, `producto`.`imagen` AS `imagen`, `producto`.`prenda` AS `prenda` FROM `producto` WHERE `producto`.`prenda` = 'sudadera' ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`,`nombre`);

--
-- Indices de la tabla `guarda`
--
ALTER TABLE `guarda`
  ADD PRIMARY KEY (`tienda_numero`,`tienda_calle`,`producto_nombre`,`producto_idProd`),
  ADD KEY `fk_tienda_has_producto_producto1_idx` (`producto_nombre`,`producto_idProd`),
  ADD KEY `fk_tienda_has_producto_tienda1_idx` (`tienda_numero`,`tienda_calle`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`nombre`,`idProd`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`numero`,`calle`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsu`,`password`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`nombre`,`idVend`),
  ADD KEY `fk_vendedor_tienda1_idx` (`tienda_numero`,`tienda_calle`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`vendedor_nombre`,`vendedor_idVend`,`cliente_idcliente`,`cliente_nombre`),
  ADD KEY `fk_vendedor_has_cliente_cliente1_idx` (`cliente_idcliente`,`cliente_nombre`),
  ADD KEY `fk_vendedor_has_cliente_vendedor1_idx` (`vendedor_nombre`,`vendedor_idVend`);

--
-- Indices de la tabla `ventaonlline`
--
ALTER TABLE `ventaonlline`
  ADD PRIMARY KEY (`usuario_idUsu`,`usuario_password`,`tienda_numero`,`tienda_calle`),
  ADD KEY `fk_usuario_has_tienda_tienda1_idx` (`tienda_numero`,`tienda_calle`),
  ADD KEY `fk_usuario_has_tienda_usuario1_idx` (`usuario_idUsu`,`usuario_password`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `guarda`
--
ALTER TABLE `guarda`
  ADD CONSTRAINT `fk_tienda_has_producto_producto1` FOREIGN KEY (`producto_nombre`,`producto_idProd`) REFERENCES `producto` (`nombre`, `idProd`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tienda_has_producto_tienda1` FOREIGN KEY (`tienda_numero`,`tienda_calle`) REFERENCES `tienda` (`numero`, `calle`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `fk_vendedor_tienda1` FOREIGN KEY (`tienda_numero`,`tienda_calle`) REFERENCES `tienda` (`numero`, `calle`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_vendedor_has_cliente_cliente1` FOREIGN KEY (`cliente_idcliente`,`cliente_nombre`) REFERENCES `cliente` (`idcliente`, `nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vendedor_has_cliente_vendedor1` FOREIGN KEY (`vendedor_nombre`,`vendedor_idVend`) REFERENCES `vendedor` (`nombre`, `idVend`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventaonlline`
--
ALTER TABLE `ventaonlline`
  ADD CONSTRAINT `fk_usuario_has_tienda_tienda1` FOREIGN KEY (`tienda_numero`,`tienda_calle`) REFERENCES `tienda` (`numero`, `calle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_tienda_usuario1` FOREIGN KEY (`usuario_idUsu`,`usuario_password`) REFERENCES `usuario` (`idUsu`, `password`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
