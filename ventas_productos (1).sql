-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2021 a las 05:56:51
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas_productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
(1, 'Equipos Electromecánicos', '2017-12-21 20:53:29'),
(2, 'Taladros', '2017-12-21 20:53:29'),
(3, 'Andamios', '2017-12-21 20:53:29'),
(4, 'soquet', '2020-12-31 11:06:52'),
(5, 'Equipos para construcción', '2017-12-21 20:53:29'),
(6, 'Martillos mecánicos', '2017-12-21 23:06:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `compras` int(11) NOT NULL,
  `ultima_compra` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `documento`, `email`, `telefono`, `direccion`, `fecha_nacimiento`, `compras`, `ultima_compra`, `fecha`) VALUES
(3, 'Juan Villegas', 2147483647, 'juan@hotmail.com', '(300) 341-2345', 'Calle 23 # 45 - 56', '1980-11-02', 7, '2018-02-06 17:47:02', '2018-02-06 22:47:02'),
(4, 'Pedro Pérez', 2147483647, 'pedro@gmail.com', '(399) 876-5432', 'Calle 34 N33 -56', '1970-08-07', 7, '2017-12-26 17:27:42', '2017-12-26 22:27:42'),
(5, 'Miguel Murillo', 325235235, 'miguel@hotmail.com', '(254) 545-3446', 'calle 34 # 34 - 23', '1976-03-04', 32, '2017-12-26 17:27:13', '2017-12-27 04:38:13'),
(6, 'Margarita Londoño', 34565432, 'margarita@hotmail.com', '(344) 345-6678', 'Calle 45 # 34 - 56', '1976-11-30', 19, '2019-05-25 01:10:41', '2019-05-25 06:10:41'),
(7, 'Julian Ramirez', 786786545, 'julian@hotmail.com', '(675) 674-5453', 'Carrera 45 # 54 - 56', '1980-04-05', 14, '2017-12-26 17:26:28', '2017-12-26 22:26:28'),
(8, 'Stella Jaramillo', 65756735, 'stella@gmail.com', '(435) 346-3463', 'Carrera 34 # 45- 56', '1956-06-05', 9, '2017-12-26 17:25:55', '2017-12-26 22:25:55'),
(9, 'Eduardo López', 2147483647, 'eduardo@gmail.com', '(534) 634-6565', 'Carrera 67 # 45sur', '1978-03-04', 15, '2019-06-20 15:33:23', '2019-06-20 20:33:23'),
(10, 'Ximena Restrepo', 436346346, 'ximena@gmail.com', '(543) 463-4634', 'calle 45 # 23 - 45', '1956-03-04', 18, '2017-12-26 17:25:08', '2017-12-26 22:25:08'),
(11, 'David Guzman', 43634643, 'david@hotmail.com', '(354) 574-5634', 'carrera 45 # 45 ', '1967-05-04', 10, '2017-12-26 17:24:50', '2017-12-26 22:24:50'),
(12, 'Gonzalo Pérez', 436346346, 'gonzalo@yahoo.com', '(235) 346-3464', 'Carrera 34 # 56 - 34', '1967-08-09', 24, '2017-12-25 17:24:24', '2017-12-27 00:30:12'),
(13, 'jairo', 72276852, 'jairo.josias14@gmail.com', '(921) 830-0766_', 'tupac', '1992-09-14', 0, '0000-00-00 00:00:00', '2021-01-08 16:40:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `codigo`, `descripcion`, `imagen`, `stock`, `precio_compra`, `precio_venta`, `ventas`, `fecha`) VALUES
(44, 5, '501', 'Escalera de Tijera Aluminio ', 'vistas/img/productos/default/anonymous.png', 20, 350, 490, 0, '2017-12-21 21:56:28'),
(45, 5, '502', 'Extension Electrica ', 'vistas/img/productos/default/anonymous.png', 20, 370, 518, 0, '2017-12-21 21:56:28'),
(47, 5, '504', 'Lamina Cubre Brecha ', 'vistas/img/productos/default/anonymous.png', 20, 380, 532, 0, '2017-12-21 21:56:28'),
(64, 4, '20', 'adidas', 'cable_coaxial.jpg', 6, 3, 9, 0, '2021-01-07 19:06:31'),
(65, 2, '50', 'snyder', 'antivirus.jpg', 1, 5, 2, 0, '2021-01-06 05:39:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Administrador', 'administrador', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/admin/191.jpg', 1, '2020-12-15 23:26:19', '2020-12-16 04:26:19'),
(57, 'Juan Fernando Urrego', 'juan', '$2a$07$asxx54ahjppf45sd87a5auwRi.z6UsW7kVIpm0CUEuCpmsvT2sG6O', 'Vendedor', 'vistas/img/usuarios/juan/461.jpg', 1, '2020-12-15 23:26:19', '2020-12-16 04:26:19'),
(58, 'Julio Gómez', 'julio', '$2a$07$asxx54ahjppf45sd87a5auQhldmFjGsrgUipGlmQgDAcqevQZSAAC', 'Especial', 'vistas/img/usuarios/julio/100.png', 1, '2020-12-15 23:26:19', '2020-12-16 04:26:19'),
(59, 'Ana Gonzalez', 'ana', '$2a$07$asxx54ahjppf45sd87a5auLd2AxYsA/2BbmGKNk2kMChC3oj7V0Ca', 'Vendedor', 'vistas/img/usuarios/ana/260.png', 1, '2020-12-15 23:26:19', '2020-12-16 04:26:19'),
(60, 'jairo', 'jairo', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', 'Administrador', 'portada_jairo.jpg', 1, '2020-12-15 23:26:19', '2020-12-21 07:03:55'),
(61, 'josias', 'josias', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', 'Administrador', 'vistas/img/usuarios/jairo/337.jpg', 0, '2020-12-15 23:26:19', '2020-12-16 04:26:19'),
(62, 'amira', 'amira', '123', 'Administrador', 'keysi (2).png', 1, '2020-12-15 23:45:06', '2020-12-21 07:03:02'),
(63, 'pame', 'pame', '$2y$10$u9WBi529/PtFvQOBDL3SpuKsanOCNYPE3NdktTAlkXYC0Pzqgsp2S', 'Administrador', 'amor_manos.webp', 1, '2021-01-15 22:28:37', '2021-01-16 03:28:37'),
(64, 'jaime', 'asa', 'saaas', 'Administrador', '580b57fcd9996e24bc43c543.png', 1, '2020-12-18 23:54:08', '2020-12-21 05:04:53'),
(65, 'avalos', 'avalos', '$2y$10$iIGymzL7wHq/A29D5oT.5.jeBSGpDqHdA2ylEhxIheSrMUsv3ih6m', 'Administrador', 'aniversario1.jpg', 1, '2021-01-29 20:56:13', '2021-01-30 01:56:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `productos` text COLLATE utf8_spanish_ci NOT NULL,
  `impuesto` float NOT NULL,
  `neto` float NOT NULL,
  `total` float NOT NULL,
  `metodo_pago` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `codigo`, `id_cliente`, `id_vendedor`, `productos`, `impuesto`, `neto`, `total`, `metodo_pago`, `fecha`) VALUES
(17, 10001, 3, 1, '[{\"id\":\"1\",\"descripcion\":\"Aspiradora Industrial \",\"cantidad\":\"2\",\"stock\":\"13\",\"precio\":\"1200\",\"total\":\"2400\"},{\"id\":\"2\",\"descripcion\":\"Plato Flotante para Allanadora\",\"cantidad\":\"2\",\"stock\":\"7\",\"precio\":\"6300\",\"total\":\"12600\"},{\"id\":\"3\",\"descripcion\":\"Compresor de Aire para pintura\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"4200\",\"total\":\"4200\"}]', 3648, 19200, 22848, 'Efectivo', '2018-02-02 01:11:04'),
(18, 10002, 4, 59, '[{\"id\":\"5\",\"descripcion\":\"Cortadora de Piso sin Disco \",\"cantidad\":\"2\",\"stock\":\"18\",\"precio\":\"2156\",\"total\":\"4312\"},{\"id\":\"4\",\"descripcion\":\"Cortadora de Adobe sin Disco \",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"5600\",\"total\":\"5600\"},{\"id\":\"6\",\"descripcion\":\"Disco Punta Diamante \",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"1540\",\"total\":\"1540\"},{\"id\":\"7\",\"descripcion\":\"Extractor de Aire \",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"2156\",\"total\":\"2156\"}]', 2585.52, 13608, 16193.5, 'TC-34346346346', '2018-02-02 14:57:20'),
(19, 10003, 5, 59, '[{\"id\":\"8\",\"descripcion\":\"Guadañadora \",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"2156\",\"total\":\"2156\"},{\"id\":\"9\",\"descripcion\":\"Hidrolavadora Eléctrica \",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"3640\",\"total\":\"3640\"},{\"id\":\"7\",\"descripcion\":\"Extractor de Aire \",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"2156\",\"total\":\"2156\"}]', 1510.88, 7952, 9462.88, 'Efectivo', '2018-01-18 14:57:40'),
(20, 10004, 5, 59, '[{\"id\":\"3\",\"descripcion\":\"Compresor de Aire para pintura\",\"cantidad\":\"5\",\"stock\":\"14\",\"precio\":\"4200\",\"total\":\"21000\"},{\"id\":\"4\",\"descripcion\":\"Cortadora de Adobe sin Disco \",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"5600\",\"total\":\"5600\"},{\"id\":\"5\",\"descripcion\":\"Cortadora de Piso sin Disco \",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"2156\",\"total\":\"2156\"}]', 5463.64, 28756, 34219.6, 'TD-454475467567', '2018-01-25 14:58:09'),
(21, 10005, 6, 57, '[{\"id\":\"4\",\"descripcion\":\"Cortadora de Adobe sin Disco \",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"5600\",\"total\":\"5600\"},{\"id\":\"5\",\"descripcion\":\"Cortadora de Piso sin Disco \",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"2156\",\"total\":\"2156\"},{\"id\":\"3\",\"descripcion\":\"Compresor de Aire para pintura\",\"cantidad\":\"5\",\"stock\":\"9\",\"precio\":\"4200\",\"total\":\"21000\"}]', 5463.64, 28756, 34219.6, 'TC-6756856867', '2018-01-09 14:59:07'),
(22, 10006, 10, 1, '[{\"id\":\"3\",\"descripcion\":\"Compresor de Aire para pintura\",\"cantidad\":\"1\",\"stock\":\"8\",\"precio\":\"4200\",\"total\":\"4200\"},{\"id\":\"4\",\"descripcion\":\"Cortadora de Adobe sin Disco \",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"5600\",\"total\":\"5600\"},{\"id\":\"5\",\"descripcion\":\"Cortadora de Piso sin Disco \",\"cantidad\":\"3\",\"stock\":\"13\",\"precio\":\"2156\",\"total\":\"6468\"},{\"id\":\"6\",\"descripcion\":\"Disco Punta Diamante \",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"1540\",\"total\":\"1540\"}]', 3383.52, 17808, 21191.5, 'Efectivo', '2018-01-26 15:03:22'),
(23, 10007, 9, 1, '[{\"id\":\"6\",\"descripcion\":\"Disco Punta Diamante \",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"1540\",\"total\":\"1540\"},{\"id\":\"7\",\"descripcion\":\"Extractor de Aire \",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"2156\",\"total\":\"2156\"},{\"id\":\"8\",\"descripcion\":\"Guadañadora \",\"cantidad\":\"6\",\"stock\":\"13\",\"precio\":\"2156\",\"total\":\"12936\"},{\"id\":\"9\",\"descripcion\":\"Hidrolavadora Eléctrica \",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"3640\",\"total\":\"3640\"}]', 3851.68, 20272, 24123.7, 'TC-357547467346', '2017-11-30 15:03:53'),
(24, 10008, 12, 1, '[{\"id\":\"2\",\"descripcion\":\"Plato Flotante para Allanadora\",\"cantidad\":\"1\",\"stock\":\"6\",\"precio\":\"6300\",\"total\":\"6300\"},{\"id\":\"7\",\"descripcion\":\"Extractor de Aire \",\"cantidad\":\"5\",\"stock\":\"12\",\"precio\":\"2156\",\"total\":\"10780\"},{\"id\":\"6\",\"descripcion\":\"Disco Punta Diamante \",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"1540\",\"total\":\"1540\"},{\"id\":\"9\",\"descripcion\":\"Hidrolavadora Eléctrica \",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"3640\",\"total\":\"3640\"}]', 4229.4, 22260, 26489.4, 'TD-35745575', '2017-12-25 15:04:11'),
(25, 10009, 11, 1, '[{\"id\":\"10\",\"descripcion\":\"Hidrolavadora Gasolina\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"3094\",\"total\":\"3094\"},{\"id\":\"9\",\"descripcion\":\"Hidrolavadora Eléctrica \",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"3640\",\"total\":\"3640\"},{\"id\":\"6\",\"descripcion\":\"Disco Punta Diamante \",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"1540\",\"total\":\"1540\"}]', 1572.06, 8274, 9846.06, 'TD-5745745745', '2017-08-15 15:04:38'),
(26, 10010, 8, 1, '[{\"id\":\"9\",\"descripcion\":\"Hidrolavadora Eléctrica \",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"3640\",\"total\":\"3640\"},{\"id\":\"10\",\"descripcion\":\"Hidrolavadora Gasolina\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"3094\",\"total\":\"3094\"}]', 1279.46, 6734, 8013.46, 'Efectivo', '2017-12-07 15:05:09'),
(27, 10011, 7, 1, '[{\"id\":\"60\",\"descripcion\":\"Cortadora de Baldosin\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"1302\",\"total\":\"1302\"},{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"196\",\"total\":\"196\"},{\"id\":\"58\",\"descripcion\":\"Coche llanta neumatica\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"588\",\"total\":\"588\"},{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"812\",\"total\":\"812\"}]', 550.62, 2898, 3448.62, 'Efectivo', '2017-12-25 22:23:38'),
(28, 10012, 12, 57, '[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"196\",\"total\":\"196\"},{\"id\":\"58\",\"descripcion\":\"Coche llanta neumatica\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"588\",\"total\":\"588\"},{\"id\":\"54\",\"descripcion\":\"Chapeta\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"924\",\"total\":\"924\"},{\"id\":\"53\",\"descripcion\":\"Bomba Hidrostatica\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"1078\",\"total\":\"1078\"}]', 529.34, 2786, 3315.34, 'TC-3545235235', '2017-12-25 22:24:24'),
(29, 10013, 11, 57, '[{\"id\":\"54\",\"descripcion\":\"Chapeta\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"924\",\"total\":\"924\"},{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"196\",\"total\":\"196\"},{\"id\":\"60\",\"descripcion\":\"Cortadora de Baldosin\",\"cantidad\":\"5\",\"stock\":\"14\",\"precio\":\"1302\",\"total\":\"6510\"}]', 1449.7, 7630, 9079.7, 'TC-425235235235', '2017-12-26 22:24:50'),
(30, 10014, 10, 57, '[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"196\",\"total\":\"196\"},{\"id\":\"54\",\"descripcion\":\"Chapeta\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"924\",\"total\":\"924\"},{\"id\":\"53\",\"descripcion\":\"Bomba Hidrostatica\",\"cantidad\":\"10\",\"stock\":\"9\",\"precio\":\"1078\",\"total\":\"10780\"}]', 2261, 11900, 14161, 'Efectivo', '2017-12-26 22:25:09'),
(31, 10015, 9, 57, '[{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"3\",\"stock\":\"16\",\"precio\":\"812\",\"total\":\"2436\"}]', 462.84, 2436, 2898.84, 'Efectivo', '2017-12-26 22:25:33'),
(32, 10016, 8, 57, '[{\"id\":\"58\",\"descripcion\":\"Coche llanta neumatica\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"588\",\"total\":\"588\"},{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"5\",\"stock\":\"11\",\"precio\":\"812\",\"total\":\"4060\"},{\"id\":\"56\",\"descripcion\":\"Cizalla de Palanca\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"630\",\"total\":\"630\"}]', 1002.82, 5278, 6280.82, 'TD-4523523523', '2017-12-26 22:25:55'),
(33, 10017, 7, 57, '[{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"4\",\"stock\":\"7\",\"precio\":\"812\",\"total\":\"3248\"},{\"id\":\"52\",\"descripcion\":\"Bascula \",\"cantidad\":\"3\",\"stock\":\"17\",\"precio\":\"182\",\"total\":\"546\"},{\"id\":\"55\",\"descripcion\":\"Cilindro muestra de concreto\",\"cantidad\":\"2\",\"stock\":\"18\",\"precio\":\"560\",\"total\":\"1120\"},{\"id\":\"56\",\"descripcion\":\"Cizalla de Palanca\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"630\",\"total\":\"630\"}]', 1053.36, 5544, 6597.36, 'Efectivo', '2017-12-26 22:26:28'),
(34, 10018, 6, 57, '[{\"id\":\"51\",\"descripcion\":\"Tensor\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"140\",\"total\":\"140\"},{\"id\":\"52\",\"descripcion\":\"Bascula \",\"cantidad\":\"5\",\"stock\":\"12\",\"precio\":\"182\",\"total\":\"910\"},{\"id\":\"53\",\"descripcion\":\"Bomba Hidrostatica\",\"cantidad\":\"1\",\"stock\":\"8\",\"precio\":\"1078\",\"total\":\"1078\"}]', 404.32, 2128, 2532.32, 'Efectivo', '2017-12-26 22:26:51'),
(35, 10019, 5, 57, '[{\"id\":\"56\",\"descripcion\":\"Cizalla de Palanca\",\"cantidad\":\"15\",\"stock\":\"3\",\"precio\":\"630\",\"total\":\"9450\"},{\"id\":\"55\",\"descripcion\":\"Cilindro muestra de concreto\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"560\",\"total\":\"560\"}]', 1901.9, 10010, 11911.9, 'Efectivo', '2017-12-26 22:27:13'),
(36, 10020, 4, 57, '[{\"id\":\"55\",\"descripcion\":\"Cilindro muestra de concreto\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"560\",\"total\":\"560\"},{\"id\":\"54\",\"descripcion\":\"Chapeta\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"924\",\"total\":\"924\"}]', 281.96, 1484, 1765.96, 'TC-46346346346', '2017-12-26 22:27:42'),
(37, 10021, 3, 1, '[{\"id\":\"60\",\"descripcion\":\"Cortadora de Baldosin\",\"cantidad\":\"1\",\"stock\":\"13\",\"precio\":\"1302\",\"total\":\"1302\"},{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"196\",\"total\":\"196\"}]', 149.8, 1498, 1647.8, 'Efectivo', '2018-02-06 22:47:02'),
(38, 10022, 6, 1, '[{\"id\":\"60\",\"descripcion\":\"Cortadora de Baldosin\",\"cantidad\":\"1\",\"stock\":\"12\",\"precio\":\"1302\",\"total\":\"1302\"},{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"14\",\"precio\":\"196\",\"total\":\"196\"},{\"id\":\"58\",\"descripcion\":\"Coche llanta neumatica\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"588\",\"total\":\"588\"},{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"812\",\"total\":\"812\"},{\"id\":\"56\",\"descripcion\":\"Cizalla de Palanca\",\"cantidad\":\"1\",\"stock\":\"2\",\"precio\":\"630\",\"total\":\"630\"}]', 141.12, 3528, 3669.12, 'Efectivo', '2019-05-25 06:10:41'),
(39, 10023, 9, 1, '[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"13\",\"precio\":\"196\",\"total\":\"196\"},{\"id\":\"60\",\"descripcion\":\"Cortadora de Baldosin\",\"cantidad\":\"1\",\"stock\":\"11\",\"precio\":\"1302\",\"total\":\"1302\"},{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"812\",\"total\":\"812\"}]', 277.2, 2310, 2587.2, 'Efectivo', '2019-06-20 20:33:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
