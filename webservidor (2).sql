-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2020 a las 10:18:53
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webservidor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `album`
--

INSERT INTO `album` (`id`, `imagen`, `titulo`, `genero`) VALUES
(1, '1.jpg', 'Sweet But Psycho', 'Pop'),
(2, '2.jpg', 'Charco de arena', 'Post_punk'),
(3, '3.jpg', 'Bababooie', 'Hard_Bass'),
(4, '4.jpg', 'Stigma', 'Pop'),
(5, '5.jpg', 'Dero', 'Hard_Bass'),
(6, '6.jpg', 'Luddydrag', 'Hard_Bass'),
(7, '7.jpg', 'Kaikai Kitan', 'Vaporwave'),
(8, '8.jpg', '夜迷事', 'Pop'),
(9, '9.jpg', 'Back to the 90s', 'Vaporwave');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `name`, `email`, `message`, `website`, `date`) VALUES
(1, 'a', 'b@c.d', 'fghij', 'e', '2020-11-24 07:59:06'),
(2, 'Borja', 'datborx@gmail.com', 'pa po pe', 'http://www.google.es', '2020-11-24 08:16:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201115092302', '2020-11-15 10:34:56', 955),
('DoctrineMigrations\\Version20201115163810', '2020-11-15 17:38:44', 688),
('DoctrineMigrations\\Version20201123114134', '2020-11-23 12:41:58', 577),
('DoctrineMigrations\\Version20201123171549', '2020-11-24 07:57:40', 65),
('DoctrineMigrations\\Version20201123173133', '2020-11-24 07:57:40', 52),
('DoctrineMigrations\\Version20201208150346', '2020-12-09 08:34:09', 574);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'man@olo.es', '[]', '$argon2id$v=19$m=65536,t=4,p=1$WUJmT1poclBkMmx0SkZkWQ$8XKRCVKEwIU69seaqLy+EnhuNmaN5sMjA0El66IKKXo'),
(2, 'pingo@luddydrag.pew', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$RUduMlk4OTkxOGpFY0dFeg$mX2s5g2/BSI2zCf2gLhKAr6CMsr/ZgnakdQenSG5quE'),
(3, 'pino@luddydrag.pew', '[]', '$argon2id$v=19$m=65536,t=4,p=1$N0RoclB2bmVpMDJRdmF4Zw$h4ssCzI6AYzS+epAekaH5UIB1qPg5GRpCspR6lJHbwc'),
(4, 'josep@calvo.es', '[]', '$argon2id$v=19$m=65536,t=4,p=1$VWhXR0lCWWVSVTV6OWFJTQ$/uqmB2iK35oOgoHxhdw9Snmm+V01LTrT7MU8lC+eKTo'),
(5, 'man@olo.ese', '[]', '$argon2id$v=19$m=65536,t=4,p=1$RFIyeUhWYUY3akwvOU0zTw$SpI0P6AU75ZKB0I1adCA8sQNvUfBpro0qkmyr1FbBGY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
