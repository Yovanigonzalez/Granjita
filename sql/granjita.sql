-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2024 a las 05:21:03
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `granjita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`id`, `titulo`, `subtitulo`, `imagen`) VALUES
(11, 'Cabeza Natural', 'Nuestros productos se distinguen por la calidad inigualable de cada componente, desde la raíz hasta la cabeza natural.', '../banner/cbz.jpg'),
(12, 'Molleja', 'Nuestras mollejas de pollo de calidad premium son una exquisitez culinaria que deleitará incluso a los paladares más exigentes.', '../banner/molle.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `misiones`
--

CREATE TABLE `misiones` (
  `id` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `misiones`
--

INSERT INTO `misiones` (`id`, `descripcion`) VALUES
(1, 'En La Granjita, nos dedicamos a ofrecer productos avícolas de la más alta calidad, brindando a nuestros clientes la frescura y el sabor inigualable de pollos criados de manera responsable y sostenible. Nos esforzamos por mantener los más altos estándares de bienestar animal y producción, garantizando así la confianza y satisfacción de nuestros clientes.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_empleo`
--

CREATE TABLE `solicitudes_empleo` (
  `id` int(11) NOT NULL,
  `vacante` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `experiencia` text NOT NULL,
  `educacion` text NOT NULL,
  `habilidades` text NOT NULL,
  `referencias` text NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `solicitudes_empleo`
--

INSERT INTO `solicitudes_empleo` (`id`, `vacante`, `nombre`, `direccion`, `telefono`, `correo`, `experiencia`, `educacion`, `habilidades`, `referencias`, `fecha_creacion`) VALUES
(3, 'Inspirado en: Ariana grande', 'dqef', '3 poniente numero 105, Centro, Tecamachalco, Puebla', '2491643410', 'therichars@gmail.com', 'dqef', 'fqef', 'fqef', 'feqfe', '2024-02-02 07:29:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`id`, `titulo`, `subtitulo`, `imagen`) VALUES
(4, 'dqefe', 'wdqwdew', '../tienda/pierna.jpg'),
(5, 'cloud', 'ariana grande', '../tienda/muslo.jpg'),
(9, 'dqefe', 'ariana grande', '../tienda/cbz.jpg'),
(10, 'cloud', 'wdqwdew', '../tienda/poll.png'),
(11, 'Inspirado en:', 'ariana grande', '../tienda/poll.png'),
(12, 'dqefe', 'wdqwdew', '../tienda/pta.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajos`
--

CREATE TABLE `trabajos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trabajos`
--

INSERT INTO `trabajos` (`id`, `titulo`, `subtitulo`) VALUES
(2, 'Inspirado en: Ariana grande', 'wdqwdew'),
(3, 'csqc', 'dwqd'),
(4, 'dwqdqw', 'dwqd'),
(5, 'dqwdqwd', 'dqwdqe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(255) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) NOT NULL,
  `rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `telefono`, `correo`, `contrasena`, `rol`) VALUES
(14, 'Mimi', ' 2383922977', 'mimi@gmail.com', '$2y$10$ze8Z8Ttbspwde7SzJkJ2v.ypZhTm6gCto9uh7mJDHrso4fGdJy2ga', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visiones`
--

CREATE TABLE `visiones` (
  `id` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `visiones`
--

INSERT INTO `visiones` (`id`, `descripcion`) VALUES
(1, 'En La Granjita, aspiramos a ser reconocidos como líderes en la industria avícola, destacándonos por nuestro compromiso con la calidad, la sostenibilidad y la excelencia en cada aspecto de nuestra operación. Buscamos expandir nuestro impacto de manera positiva en la comunidad, promoviendo prácticas agrícolas éticas y contribuyendo al bienestar de nuestros clientes, colaboradores y el medio ambiente.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `misiones`
--
ALTER TABLE `misiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes_empleo`
--
ALTER TABLE `solicitudes_empleo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visiones`
--
ALTER TABLE `visiones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `misiones`
--
ALTER TABLE `misiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `solicitudes_empleo`
--
ALTER TABLE `solicitudes_empleo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `visiones`
--
ALTER TABLE `visiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
