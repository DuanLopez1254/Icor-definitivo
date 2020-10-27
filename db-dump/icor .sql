-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2020 a las 23:38:06
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `icor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_rol` int(10) NOT NULL,
  `Nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_rol`, `Nombre`) VALUES
(1, 'Administrador'),
(2, 'Vendedor'),
(3, 'Empleado'),
(4, 'Usuario'),
(5, 'provedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cod_fac`
--

CREATE TABLE `cod_fac` (
  `Id` int(11) NOT NULL,
  `Cod` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cod_fac`
--

INSERT INTO `cod_fac` (`Id`, `Cod`) VALUES
(1, 693381212);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_co` int(11) NOT NULL,
  `nombre_usu` varchar(100) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `respuesta` varchar(200) NOT NULL DEFAULT '-',
  `id_esta` int(10) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_co`, `nombre_usu`, `comentario`, `respuesta`, `id_esta`) VALUES
(21, 'estiben armero', 'como me registro', '-', 1),
(22, 'camilo gonzales', 'como compro', '-', 1),
(23, 'William peñalosa', ' Como envio mi inquietud', '-', 2),
(24, 'Pedro ', 'jejejjejjee', '-', 2),
(25, 'brayan', 'Como puedo  ser de su empresa', '-', 1),
(26, 'Pedro ', 'como compro', '-', 1),
(27, 'Pedro ', 'como compro', 'hola ', 2),
(28, 'peñalosa', 'cerrare su negocio', '-', 1),
(29, 'kevin', 'como compro', '-', 2),
(30, 'daladier', 'Como puedo eliminar mi usuario', '-', 1),
(32, 'camilo', 'jejeeje esta empresa es una Mier***', '-', 2),
(33, 'juan melo', 'hecho para ayudar', '-', 1),
(34, 'camilo', 'Que bien es esta Pagina', '-', 2),
(35, 'juan canisalez', 'estoy agradecido con l atencion de esta empresa', '-', 2),
(36, 'juan canisalez', 'hola buenas tardes a todos', '-', 1),
(40, 'camila gonzalez', 'me gusto la atencion a el usuario', 'gracias por el comentario', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_esta` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_esta`, `nombre`) VALUES
(1, 'autorizado'),
(2, 'No autorizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(10) NOT NULL,
  `fac` int(50) NOT NULL,
  `Nombre_cli` varchar(50) NOT NULL,
  `Apellido_cli` varchar(50) NOT NULL,
  `Documento` int(10) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_factura`, `fac`, `Nombre_cli`, `Apellido_cli`, `Documento`, `total`) VALUES
(57, 15698744, 'camilo', 'perez', 15698744, 0),
(71, 693381212, 'laura', 'ceballos', 1212, 0),
(73, 197121212, 'laura', 'ceballos', 1212, 0),
(75, 418791212, 'laura', 'ceballos', 1212, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `Id_inve` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Cantidad` int(10) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Ubicacion` varchar(200) NOT NULL,
  `observacion` varchar(255) NOT NULL DEFAULT 'No hay',
  `id_esta` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`Id_inve`, `Nombre`, `Cantidad`, `Fecha`, `Ubicacion`, `observacion`, `id_esta`) VALUES
(1, 'sillas', 109, '2019-11-28', 'en el colegio', 'esta dañada en la parte inferior', 1),
(5, 'computadores', 3, '2019-11-27', 'en secretaria', 'No hay', 2),
(9, 'canastas', 2, '2019-12-10', 'el almacen C5', 'estan pintadas', 1),
(10, '0000', 0, '2019-12-10', '0000000', 'No hay', 1),
(11, '0000', 0, '2019-12-10', '0000000', 'No hay', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_pedido`
--

CREATE TABLE `orden_pedido` (
  `Id_pedido` int(10) NOT NULL,
  `Fecha_orden` date NOT NULL,
  `Descripcion_pedido` varchar(50) NOT NULL,
  `Id_empleado` int(10) NOT NULL,
  `Id_provedor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orden_pedido`
--

INSERT INTO `orden_pedido` (`Id_pedido`, `Fecha_orden`, `Descripcion_pedido`, `Id_empleado`, `Id_provedor`) VALUES
(2, '2019-06-02', 'yolo', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_prod` int(10) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Cantidad` int(10) NOT NULL,
  `precio` int(30) NOT NULL,
  `Ubicacion` varchar(20) NOT NULL,
  `Id_pro` int(10) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `observacion` varchar(255) NOT NULL DEFAULT 'No hay observacion',
  `id_esta` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id_prod`, `Nombre`, `Cantidad`, `precio`, `Ubicacion`, `Id_pro`, `imagen`, `observacion`, `id_esta`) VALUES
(13, 'Sillas', 85, 36000, 'en el almacen', 1, 'assets/imagessilla.jpg', 'no existe\r\n', 2),
(14, 'tirilla', 70, 2000, 'en elaboracion', 1, 'assets/imagestirilla.jpg', 'no existe', 2),
(16, 'Pitillos', 3002, 124563, 'En la parte del sota', 1, 'assets/imagespitilloneon1-500x500.jpg', 'No hay observacion', 1),
(17, 'copasinyectadas', 2563, 87965, 'En la parte del sota', 2, 'assets/images9e574a_24eca6ae4cc642c7abc199cc5ab3c90c_mv2.jpg', 'No hay observacion', 1),
(18, 'mezcladores', 256314, 78541, 'En la bodega del pis', 1, 'assets/imagesmezclasores.png', 'No hay observacion', 1),
(19, 'exhibidor de vinos', 584, 85632, 'En la bodega del pis', 2, 'assets/imagesvino.png', 'No hay observacion', 1),
(20, 'Base ps termoformado', 445, 7854, 'En la bodega del pis', 2, 'assets/imagescervezas.png', 'No hay observacion', 1),
(21, 'Ps termoformado fibr', 7785, 20145, 'En la bodega del pis', 3, 'assets/imagestapa.png', 'No hay observacion', 1),
(22, 'glorificador termofo', 2540, 15423, 'En la bodega del pis', 3, 'assets/images1.png', 'No hay observacion', 1),
(23, 'ps termoformado impr', 15632, 5632, 'En la bodega del pis', 2, 'assets/imagespublicidad.png', 'No hay observacion', 1),
(24, 'acrilico ruteado con', 25331, 45120, 'En la bodega del pis', 2, 'assets/imagespublicidad led.png', 'No hay observacion', 1),
(25, 'acrilico ruteado con', 54126, 632541, 'En la bodega del pis', 12, 'assets/imagesneon.png', 'No hay observacion', 1),
(26, 'llaveros', 78541, 142000, 'En la bodega del pis', 12, 'assets/imagesllavero.png', 'No hay observacion', 1),
(27, 'Barts mats', 9652, 74521, 'En la bodega del pis', 1, 'assets/imagesbart.png', 'No hay observacion', 1),
(28, 'Porta vasos', 96523, 8523, 'En la bodega del pis', 2, 'assets/imagesporta vasos.png', 'No hay observacion', 1),
(29, 'Exhibidor de botella', 75846, 74120, 'En la bodega del pis', 14, 'assets/imagesexhibidor.png', 'No hay observacion', 1),
(30, 'Glorificador', 145236, 856320, 'En la bodega del pis', 15, 'assets/imagesglorificador.png', 'No hay observacion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_fac`
--

CREATE TABLE `productos_fac` (
  `id_pfac` int(10) NOT NULL,
  `fac` int(20) NOT NULL,
  `Documento_cli` int(20) NOT NULL,
  `Cantidad` int(20) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Precio_u` int(50) NOT NULL,
  `Precio_t` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos_fac`
--

INSERT INTO `productos_fac` (`id_pfac`, `fac`, `Documento_cli`, `Cantidad`, `Nombre`, `Precio_u`, `Precio_t`) VALUES
(65, 15698744, 15698744, 3, 'Sillas', 36000, 108000),
(66, 15698744, 15698744, 4, 'Sillas', 36000, 144000),
(68, 789612, 789612, 2, 'Sillas', 36000, 72000),
(69, 789612, 789612, 4, 'tirilla', 2000, 8000),
(71, 693381212, 1212, 7, 'tirilla', 2000, 14000),
(72, 197121212, 1212, 4, 'Sillas', 36000, 144000),
(73, 197121212, 1212, 4, 'tirilla', 2000, 8000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `important` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `user` varchar(50) NOT NULL,
  `id_user` int(10) NOT NULL,
  `Tipo` varchar(100) NOT NULL,
  `Fecha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `title`, `descripcion`, `important`, `image`, `user`, `id_user`, `Tipo`, `Fecha`) VALUES
(15, 'Acueducto', 'Se informa a todos los residentes del conjunto que el dia de mañana se suspendera por motivo de reparaciones el acueducto, pasado mañana ya estara en correcto funcionamiento.', 'miperro', 'assets/171752171719por-que-nos-parece-que-los-perros-sonrien-una-historia-de-30-000-anos.jpg', 'Laura', 3, 'Noticia', ''),
(18, 'Tapetes', 'Se han gastado un total de $239.000 en tapetes ubicados a la entrada de el conjunto. ', 'Thelife', 'assets/00050131341vida.jpg', 'Laura 1', 3, 'Gastos', ''),
(19, 'Reunion', 'Mañana se organizara una reunion en la terraza, donde todos estan invitados, daremos lechona :)', 'Reunion', 'assets/121203importancia-de-comer-en-familia-500x334.jpg', 'William', 3, 'Noticia', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_regis` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `celular` int(20) NOT NULL,
  `direccion` varchar(255) NOT NULL DEFAULT 'No aplica',
  `Id_cargo` int(10) NOT NULL DEFAULT 4,
  `Id_doc` int(10) NOT NULL DEFAULT 1,
  `documento` int(20) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `observacion` varchar(255) NOT NULL DEFAULT 'No hay observacion',
  `fecha_li` varchar(255) NOT NULL DEFAULT '0000/000/00',
  `fecha_in` varchar(255) NOT NULL DEFAULT '0000-00-0',
  `imagen` varchar(255) NOT NULL DEFAULT 'assets/registro/descarga.png',
  `contrasena` varchar(255) NOT NULL,
  `id_esta` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_regis`, `nombre`, `apellidos`, `celular`, `direccion`, `Id_cargo`, `Id_doc`, `documento`, `correo`, `observacion`, `fecha_li`, `fecha_in`, `imagen`, `contrasena`, `id_esta`) VALUES
(1, 'admin', 'admin', 3131, '', 1, 1, 1010, 'admin@algo.com', 'no hay observacion', '2019/02/20', '2019/02/20', 'assets/registro/descarga.png', '$2y$10$RpxLvqfVtxfi5pjRPoh6Nub7hvdphkMc8/3uVyfs6Pcu/fOvDiqwe', 2),
(3, 'camilo', 'aguilar', 1418, '', 2, 1, 125, 'cami@algo.com', 'No hay observacion', '2019/02/20', '2019/02/20', 'assets/registro/descarga.png', '$2y$10$0YARowNSQJbWMB4euLnFKe7zQjb6BOtVXfslJp4nPOC4slrwGJCLq', 2),
(4, 'dala', 'aguilar', 1452, '', 4, 1, 1011, 'dala@algo.com', 'No hay observacion', '2019/02/20', '2019/02/20', 'assets/registro/descarga.png', '$2y$10$uk/Jzm139/kb6qTOq8l1meRNDJHV02z0.lt1d2njkGGf88SxsnsJu', 1),
(15, 'Laura de lopez', 'yolo', 321456978, 'No aplica', 4, 1, 1010010, 'lala@algo.com', 'No hay observacion', '0000/000/00', '0000-00-0', 'assets/registro/descarga.png', '$2y$10$4hll1Ye8QGzy4HEAyuR0n.SVgiQlLX21fJx35Fv.GztvOJm6s7loS', 1),
(16, 'juan', 'perdigon', 31254026, 'No aplica', 2, 1, 159874523, 'juanper@algo.com', 'No hay observacion', '0000/000/00', '2020-10-08', 'assets/registro/1.jpg', '$2y$10$OoApTdcvNjXvAVSIhTZksOLKB078lEY7xvucDGdMtWTRgBNiI1pmS', 1),
(17, 'juan', 'perdigon', 2147483647, 'No aplica', 3, 1, 123654, 'juanper@algo.com', 'No hay observacion', '0000/000/00', '2020-10-08', 'assets/registro/1.jpg', '$2y$10$FS8eG2Erh1woiA4fqBbdq.TS7LUsCcM2QegqPpCnywo05a2pBXeJG', 2),
(18, 'juan re', 'perdigon reyes', 325641, 'No aplica', 2, 1, 1003739, 'juanperer@algo.com', 'No hay observacion', '0000/000/00', '2020-10-08', 'assets/registro/FB_IMG_1579232548137.jpg', '$2y$10$fapDbaaSX9VKxixHBXti5u.f2a742ydpUclrmhmiESZg2VWFNFGxW', 1),
(19, 'textilespvp SAS', '', 325612554, 'trav 154 #69-63', 5, 1, 0, '', 'No hay observacion', '0000/000/00', '2020-10-08', 'assets/provedor/paisaje-del-campo-de-campos-verdes-19621054.jpg', '$2y$10$qgWVCbRG0Xn33TtzwRouE.eTrSSo6r76T58vinBAevSVJngjJVYpS', 1),
(20, 'camilo', 'perez', 1236545, 'No aplica', 3, 1, 15698744, 'lolope@algo.com', 'tiempo ya completado en la empresa', '2020-10-08', '2020-10-08', 'assets/registro/FB_IMG_1579233568337.jpg', '$2y$10$o4rgUXPLRU4MhwHQn0cS.eBpdgalb9Ni6jiWiyTeB9tBBGLMvbZTO', 1),
(21, 'juan', 'cardona', 123654, 'No aplica', 2, 1, 2589641, 'juancar@algo.com', 'No hay observacion', '0000/000/00', '2020-10-08', 'assets/registro/FB_IMG_1579232548137.jpg', '$2y$10$IosYeGyCODdhc7upzwilNOQGBoa5rt.keAf0S5Cyq8VJo0b1WUeQm', 1),
(22, 'daniel', 'caballos', 365214, 'No aplica', 3, 1, 520139, 'daniel@algo.com', 'No hay observacion', '0000/000/00', '2020-10-08', 'assets/registro/FB_IMG_1579233568337.jpg', '$2y$10$vzdxOeAEiB9WyNl4AqcKGOlOaasqtDC96RdH/nhQkCvl07zhDOx7y', 1),
(23, 'laura', 'ceballos', 789654, 'No aplica', 4, 1, 1212, 'laura@algo.com', 'No hay observacion', '0000/000/00', '2020-10-08', 'assets/registro/FB_IMG_1579232548137.jpg', '$2y$10$ND4SUrviBdxXsqt2h8DJa.PwkQ3qOZ5mYNTr.e9G31kmbBWoq1m8u', 1),
(34, 'juan', 'perez', 365241112, 'No aplica', 2, 1, 1547896, 'juan@algo.com', 'No hay observacion', '0000/000/00', '2020-10-15', 'assets/registro/descarga.png', '$2y$10$jScSZDC0T3DkH2w/E8eTfuJASymJI18X78PNuvA3Y4gPNk/pO7Naq', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `Id_sede` int(11) NOT NULL,
  `Nombre` varchar(500) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Ciudad` varchar(500) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `Observacion` varchar(500) NOT NULL,
  `id_esta` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`Id_sede`, `Nombre`, `Direccion`, `Telefono`, `Ciudad`, `imagen`, `Observacion`, `id_esta`) VALUES
(1, 'sede de cartagena', 'calle80#110-63 norte', '76541236', 'no especificadad', 'assets/Sede/FB_IMG_1579232548137.jpg', 'Se termino la remodelacion', 1),
(2, 'sede cali portal del cielo', 'calle mariscal torres #16-69', '85476321', 'Barranquilla', 'assets/Sede/FB_IMG_1579232548137.jpg', '', 2),
(3, 'sede barranquilla', 'trv78# 65-20', '32564111', 'cartagena', 'assets/Sede/FB_IMG_1579232548137.jpg', '', 1),
(7, 'bogotA', 'calle 23#36-98', '569863', 'Bogota', 'assets/Sede/paisaje-del-campo-de-campos-verdes-19621054.jpg', 'Se termino el contato', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_documento`
--

CREATE TABLE `tipo_de_documento` (
  `Id_doc` int(10) NOT NULL,
  `Nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_de_documento`
--

INSERT INTO `tipo_de_documento` (`Id_doc`, `Nombre`) VALUES
(1, 'C.C'),
(2, 'C.E.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `cod_fac`
--
ALTER TABLE `cod_fac`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_co`),
  ADD KEY `id_esta` (`id_esta`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_esta`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`Id_inve`),
  ADD KEY `id_esta` (`id_esta`);

--
-- Indices de la tabla `orden_pedido`
--
ALTER TABLE `orden_pedido`
  ADD PRIMARY KEY (`Id_pedido`),
  ADD KEY `Id_provedor` (`Id_provedor`),
  ADD KEY `Id_empleado` (`Id_empleado`),
  ADD KEY `Id_empleado_2` (`Id_empleado`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_prod`),
  ADD KEY `Id_provedor` (`Id_pro`),
  ADD KEY `id_esta` (`id_esta`);

--
-- Indices de la tabla `productos_fac`
--
ALTER TABLE `productos_fac`
  ADD PRIMARY KEY (`id_pfac`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_user`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_regis`),
  ADD KEY `Id_cargo` (`Id_cargo`,`Id_doc`,`id_esta`),
  ADD KEY `Id_doc` (`Id_doc`),
  ADD KEY `id_esta` (`id_esta`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`Id_sede`),
  ADD KEY `id_esta` (`id_esta`);

--
-- Indices de la tabla `tipo_de_documento`
--
ALTER TABLE `tipo_de_documento`
  ADD PRIMARY KEY (`Id_doc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cod_fac`
--
ALTER TABLE `cod_fac`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_co` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `Id_inve` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `orden_pedido`
--
ALTER TABLE `orden_pedido`
  MODIFY `Id_pedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id_prod` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `productos_fac`
--
ALTER TABLE `productos_fac`
  MODIFY `id_pfac` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_regis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `Id_sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tipo_de_documento`
--
ALTER TABLE `tipo_de_documento`
  MODIFY `Id_doc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_esta`) REFERENCES `estado` (`id_esta`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_esta`) REFERENCES `estado` (`id_esta`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_esta`) REFERENCES `estado` (`id_esta`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`id_esta`) REFERENCES `estado` (`id_esta`),
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`Id_doc`) REFERENCES `tipo_de_documento` (`Id_doc`),
  ADD CONSTRAINT `registro_ibfk_3` FOREIGN KEY (`Id_cargo`) REFERENCES `cargo` (`id_rol`);

--
-- Filtros para la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD CONSTRAINT `sedes_ibfk_1` FOREIGN KEY (`id_esta`) REFERENCES `estado` (`id_esta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
