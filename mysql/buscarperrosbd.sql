-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-01-2018 a las 00:04:42
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `buscarperrosbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perros`
--

DROP TABLE IF EXISTS `perros`;
CREATE TABLE IF NOT EXISTS `perros` (
  `id_perro` int(11) NOT NULL,
  `raza` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `color_pelo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `img_ruta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_perro`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perros`
--

INSERT INTO `perros` (`id_perro`, `raza`, `color_pelo`, `sexo`, `img_ruta`) VALUES
(3, 'No sÃ©', 'MarrÃ³n Oscuro', 'Macho', 'img/img_pub_orig/36B5.jpg'),
(2, 'No sÃ©', 'Negro', 'Macho', 'img/img_pub_orig/22966373565_d1e483ae94_o.jpg'),
(1, 'Labrador', 'MarrÃ³n Claro', 'Macho', 'img/img_pub_orig/1que-comen-los-perros.jpg'),
(4, 'Border Collie', 'Negro', 'Macho', 'img/img_pub_orig/sin_foto.jpg'),
(5, 'Bulldog FrancÃ©s', 'Blanco', 'Macho', 'img/img_pub_orig/5bulldog-frances-caracteristicas-raza.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

DROP TABLE IF EXISTS `publicaciones`;
CREATE TABLE IF NOT EXISTS `publicaciones` (
  `id_pub` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `texto` text NOT NULL,
  `reencuentro` tinyint(4) NOT NULL,
  `cerrada` tinyint(4) NOT NULL,
  `id_user` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_perro` int(11) NOT NULL,
  PRIMARY KEY (`id_pub`),
  KEY `id_user` (`id_user`),
  KEY `id_perro` (`id_perro`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id_pub`, `fecha`, `texto`, `reencuentro`, `cerrada`, `id_user`, `id_perro`) VALUES
(2, '2017-11-20 20:37:18', 'Me siguiÃ³ este perro hasta mi casa cuando salÃ­ a caminar por el paseo de la mujer. No tiene collar, pero parece ser de una familia porque estÃ¡ muy bien alimentado y es muy amable. ', 1, 0, '10212661251199593', 2),
(1, '2017-11-20 20:24:35', 'Se perdiÃ³ Bongo, en la zona de KilÃ³metro 5. Es un cachorro de labrador. En el momento que desapareciÃ³, llevaba un collar azul. Si alguien lo vio, por favor avisen y nos pondremos en contacto.', 1, 0, '10212661251199593', 1),
(3, '2017-11-20 22:17:50', 'EncontrÃ© a este perro en la calle, parece ser de alguien porque estÃ¡ bien cuidado', 1, 0, '10212661251199593', 3),
(4, '2017-11-21 12:06:24', 'ijfslÃ±dkfjsd', 0, 0, '10212661251199593', 4),
(5, '2017-11-21 15:44:33', 'Se perdiÃ³ Pelusa esta maÃ±ana. Salimos a hacer las compras y cuando volvimos ya no estaba. Pelusa suele abrir la puerta del jardÃ­n para salir a la vereda, pero normalmente vuelve solo. Lleva un pretal verde. Barrio Sanchez ElÃ­a', 0, 0, '10212661251199593', 4),
(6, '2017-11-23 21:46:27', 'kjfdlkxjfvlxjvlxkvlxkfd', 1, 0, '10212661251199593', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_user` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nombre_user`, `nombre`, `apellido`) VALUES
('10212661251199593', 'ElÃ­as Conde', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
