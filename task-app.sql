-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2020 a las 19:13:45
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `task-app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora` timestamp NOT NULL DEFAULT current_timestamp(),
  `Control` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `task`
--

INSERT INTO `task` (`id`, `name`, `description`, `hora`, `Control`) VALUES
(3, 'jugar', 'jugar Play', '00:00:00', '2020-07-04 23:07:24'),
(4, 'Nose', 'ssss', '00:00:00', '2020-07-04 23:07:24'),
(8, 'Jugar FREE :V', 'Nose', '00:00:00', '2020-07-04 23:07:24'),
(9, 'Ordenar mi cosas porfa', 'No me acuerdo donde lo deje ', '00:00:00', '2020-07-04 23:07:24'),
(42, 'Shshs', 'Sjwjw', '00:00:00', '2020-07-04 23:07:24'),
(43, 'Responder', 'Hola', '00:00:00', '2020-07-04 23:07:24'),
(49, 'ddd', 'dddd', '17:02:14', '2020-07-04 23:07:24'),
(50, 'xxx', 'xxx', '19:39:06', '2020-07-05 00:39:06'),
(51, 'sss', 'ss', '19:56:53', '2020-07-05 00:56:53'),
(61, 'aaaa', 'wwww', '04:13:00', '2020-07-05 02:13:42'),
(62, 'wees', 'ssewww', '04:14:00', '2020-07-05 02:14:07'),
(63, 'aaaa', 'aasss', '21:15:27', '2020-07-05 02:15:27'),
(64, 'ss', 'ss', '21:16:08', '2020-07-05 02:16:08'),
(65, 'AAA', 'aaaa', '21:47:26', '2020-07-05 02:47:26'),
(66, 'AAA', 'aaa', '21:48:47', '2020-07-05 02:48:47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
