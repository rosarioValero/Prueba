-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-07-2019 a las 19:02:34
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `user_history`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_12_144413_create_user_datas_table', 1),
(4, '2019_07_14_180726_create_ofertas_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

DROP TABLE IF EXISTS `ofertas`;
CREATE TABLE IF NOT EXISTS `ofertas` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`id`, `nombre`, `descripcion`, `usuario`, `created_at`, `updated_at`) VALUES
(1, 'Oferta 25%', 'Electrodomésticos y televisores', 'rosario.prueba@prueba.cl', '2019-07-14 17:00:07', '2019-07-14 17:00:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rosario', 'rosario.prueba@prueba.cl', '$2y$10$Lo3UKnVDBN2eM.glkM2bIeqteIBMbDiH2uGBzZzLjpS5Z2VSfJSTK', 'gY2zVukhVTAPU975E8f4yV5ZjkSMAWD2Kv470XnM5LQosjtqQohLfGdAE7SI', '2019-07-12 12:50:53', '2019-07-12 12:50:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_datas`
--

DROP TABLE IF EXISTS `user_datas`;
CREATE TABLE IF NOT EXISTS `user_datas` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_datas`
--

INSERT INTO `user_datas` (`id`, `nombre`, `descripcion`, `usuario`, `created_at`, `updated_at`) VALUES
(1, 'Primera Oferta', 'Descuento del -50%', 'rosario.prueba@prueba.cl', '2019-07-14 15:52:15', '2019-07-14 15:52:15'),
(2, 'Oferta 50 %', 'Muebles y sillas', 'rosario.prueba@prueba.cl', '2019-07-14 15:59:53', '2019-07-14 15:59:53'),
(3, 'Oferta 25%', 'Electrodomésticos y televisores', 'rosario.prueba@prueba.cl', '2019-07-14 16:05:26', '2019-07-14 16:05:26'),
(4, 'Oferta 50 %', 'Muebles y sillas', 'rosario.prueba@prueba.cl', '2019-07-14 16:59:13', '2019-07-14 16:59:13'),
(5, 'Oferta 35%', 'Prueba', 'rosario.prueba@prueba.cl', '2019-07-28 13:04:17', '2019-07-28 13:04:17'),
(6, 'Oferta 35%', 'Prueba', 'rosario.prueba@prueba.cl', '2019-07-28 14:55:41', '2019-07-28 14:55:41'),
(7, 'a', 'Descuento del -50%', 'rosario.prueba@prueba.cl', '2019-07-28 15:16:31', '2019-07-28 15:16:31'),
(8, 'Oferta 70 %', 'Discos duros', 'rosario.prueba@prueba.cl', '2019-07-28 16:22:58', '2019-07-28 16:22:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
