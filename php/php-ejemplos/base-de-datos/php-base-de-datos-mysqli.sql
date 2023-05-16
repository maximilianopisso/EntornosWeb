
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php-base-de-datos-mysqli`
--
CREATE DATABASE IF NOT EXISTS `php-base-de-datos-mysqli` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `php-base-de-datos-mysqli`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alu_alumnos`
--

CREATE TABLE `alu_alumnos` (
  `alu_id` int(11) NOT NULL,
  `alu_nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alu_email` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alu_alumnos`
--

INSERT INTO `alu_alumnos` (`alu_id`, `alu_nombre`, `alu_email`) VALUES
(1, 'José Pérez', 'jperez@gmail.com'),
(2, 'Carlos Gómez', 'carlosgomez@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alu_alumnos`
--
ALTER TABLE `alu_alumnos`
  ADD PRIMARY KEY (`alu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alu_alumnos`
--
ALTER TABLE `alu_alumnos`
  MODIFY `alu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
