-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2022 a las 17:34:16
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reparacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `descripcion`) VALUES
(1, 'administador'),
(2, 'cliente'),
(3, 'empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `t_d` varchar(30) NOT NULL,
  `n_documento` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `placa` varchar(30) NOT NULL,
  `vehiculo` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `comentario` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `nombre`, `telefono`, `t_d`, `n_documento`, `correo`, `placa`, `vehiculo`, `fecha`, `comentario`) VALUES
(1, 'daniel', '4324234', 'cedula de ciudadania', '1312312', '         sebas@gmail.com', '123213', 'chevrolt', '2022-07-13', 'Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido.'),
(4, 'esteban', '2131', 'cedula de ciudadania', '132132', '  esteban@gmail.com', '12312', 'chevrolet', '2022-07-06', 'sdasdasdasdasdasdasdasdsadascasascs'),
(5, 'daniel', '312312', 'cedula de ciudadania', '312312', '    esteban@gmail.com', '21312', 'chevrolt', '2022-07-21', 'dasdsadsafadfsfsfsfasdffdsfasd'),
(6, 'dsad', 'asda', 'cedula de ciudadania', '12321', '    juan@gmail.com', '123', '1321', '2022-07-13', '1231321a f fsad fsadfsadfsad'),
(7, 'maria gonzalez', '111', 'cedula de ciudadania', '55555', 'sebas@gmail.com', '123', 'mazda', '2022-07-30', 'cambio de latoneria'),
(8, 'julian', '546546', 'cedula de ciudadania', '5165465', '            juan1@gmail.com', '3265', 'mazda', '2022-07-30', 'hola1'),
(9, 'samantha', '3127834460', 'tarjeta de identidad', '1091885119', 'samanthaortegon2218@gmail.com', '234', 'mazda', '2022-07-30', 'cambio de pintura'),
(10, 'a', '', 'tipo de documento', '', '', '', '', '', ''),
(11, 'jjjjjj', '77777', 'cedula de extranjeria', '55555', 'nose@gmail.com', '123', 'mazda', '9999-09-09', 'q vuele');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `comentario` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `correo`, `comentario`) VALUES
(15, 'sebastiamarin2004@gmail.com', 'chimba la pagina'),
(16, 'marta@gmail.com', 'excelente pagina, buenos diseños graficos. 100/10\r\n'),
(17, 'brayni@gmail.com', 'Considero que el logo debería tener otro fondo o mejor dicho no tener, que mejor el fondo sea el mismo azul de header, PERO EN GERENAL LA PLATAFROMA ESTÁ SIEDNO MUY BUENA Y FELICIYTACIONES, WIIIII'),
(18, 'ahenao@misena.edu.co', 'Me gusta la interfaz grafica\r\n'),
(19, 'sebas@gmail.com', 'muy buena idea!'),
(20, 'julianparraos147@gmail.com', 'jfelicidades\r\n'),
(21, 'juan@gmail.com', 'Bacano\r\n'),
(22, 'oscar@gmail.com', 'me gusto la pagiana tratar de mejorar el tema de diseño \r\n'),
(23, 'harolo@gmail.com', 'picos  en las tapas'),
(24, 'sebas@gmail.com', 'esta muy bien hecho c:'),
(25, 'oscar@gmail.com', 'muy buen trabajo!!'),
(26, 'samanthaortegon2218@gmail.com', 'me gusta'),
(27, 'daniel@gmail.com', 'mi cuenta se elimino accidentalmente:('),
(28, 'aarodriguez60@misena.edu.co', 'excelente aplicacion web, muy eficiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recu_contraseña`
--

CREATE TABLE `recu_contraseña` (
  `id` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `token` varchar(200) NOT NULL,
  `codigo` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recu_contraseña`
--

INSERT INTO `recu_contraseña` (`id`, `correo`, `token`, `codigo`, `fecha`) VALUES
(19, 'aldanadaniel162@gmail.com', 'b04e7444e2', 5364, '2022-08-01 01:34:42'),
(20, 'aldanadaniel162@gmail.com', 'b8dac9b9aa', 2925, '2022-08-01 14:59:46'),
(21, 'aldanadaniel162@gmail.com', 'cc94b8e1cc', 4082, '2022-08-01 15:00:25'),
(22, 'aldanadaniel162@gmail.com', '4dcf71bbb6', 9576, '2022-08-01 15:02:35'),
(23, 'aldanadaniel162@gmail.com', 'b226b21c01', 1574, '2022-08-01 15:03:07'),
(24, 'aldanadaniel162@gmail.com', 'e2bbeac339', 4609, '2022-08-01 15:03:46'),
(25, 'aldanadaniel162@gmail.com', '7db8c87ceb', 9375, '2022-08-01 15:04:30'),
(26, 'aldanadaniel162@gmail.com', 'c599b12fb3', 6125, '2022-08-01 15:04:57'),
(27, 'aldanadaniel162@gmail.com', '6b0be7f868', 9023, '2022-08-01 15:26:37'),
(28, 'aldanadaniel162@gmail.com', 'b6a075ddd5', 9540, '2022-08-01 15:30:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `ocupacion` varchar(40) NOT NULL,
  `contraseña` varchar(155) NOT NULL,
  `id_cargo` varchar(40) NOT NULL,
  `id_citas` varchar(40) NOT NULL,
  `id_comentario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `correo`, `telefono`, `ciudad`, `ocupacion`, `contraseña`, `id_cargo`, `id_citas`, `id_comentario`) VALUES
(1, 'jose daniel', 'aldana', 'daniel@gmail.com', '       321312', '', '', '123', '1', '', ''),
(3, 'sebas', 'tejada', 'sebas@gmail.com', '      132131231', '', '', '123', '1', '', ''),
(6, 'adriana', 'usuga', 'adriana', ' 123123', '', '', '123', '1', '', ''),
(7, 'salo', 'morales', 'salo@gmail.com', ' 2131312', '', '', '123', '1', '', ''),
(11, 'marlon', 'cristian', 'marlos@gmail.com', '   3232', '', '', '123', '2', '', ''),
(12, 'oscar', 'ramirez', 'oscar@gmail.com', '    55569', '  montenegro', '  teacher', '321', '2', '', ''),
(14, 'cris', 'mendoza', 'cris@gmail.com', '  555', '  ', '  ', '222', '2', '', ''),
(15, 'alex', 'henao', 'juan@gmail.com', ' 34234', '', '', '123', '3', '', ''),
(16, 'julian', 'asa', 'juan1@gmail.com', '65446', '', '', '123', '2', '', ''),
(18, 'julian', 'ramirez', 'davis@gmail.com', '354845', '', '', '123', '2', '', ''),
(19, 'julian', 'cris', 'sebas1@gmail.com', '57474647', '', '', '123', '2', '', ''),
(20, 'ana', 'martinez', 'sofia@gmail.com', '3007660089', '', '', '54321', '2', '', ''),
(21, 'samantha ', 'camargo', 'samanthaortegon2218@gmail.com', '3127834660', '', '', '12345678', '2', '', ''),
(23, 'alvaro', 'rodriguez', 'alvaro@gmail.com', '321422', '', '', '123', '2', '', ''),
(24, 'cristian', 'estrada', 'camiloestrada311@gmail.com', '3158644140', '', '', '1234', '2', '', ''),
(27, 'ana', 'maria', 'ana@gmail.com', '423423', '', '', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '1', '', ''),
(28, 'aldana', 'usuga', 'aldanadaniel162@gmail.com', '21321', '', '', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '2', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recu_contraseña`
--
ALTER TABLE `recu_contraseña`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_cargo` (`id_cargo`),
  ADD KEY `id_citas` (`id_citas`),
  ADD KEY `id_comentario` (`id_comentario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `recu_contraseña`
--
ALTER TABLE `recu_contraseña`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
