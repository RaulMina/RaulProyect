-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2023 a las 07:23:31
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `policia_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `circuitos`
--

CREATE TABLE `circuitos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_circuito` varchar(255) NOT NULL,
  `codigo_circuito` varchar(255) NOT NULL,
  `numero_circuito` varchar(255) NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `circuitos`
--

INSERT INTO `circuitos` (`id`, `nombre_circuito`, `codigo_circuito`, `numero_circuito`, `id_usuario`, `created_at`, `updated_at`) VALUES
(2, 'VILCABAMBA', '11D01C01', '22', 10, '2023-07-09 06:10:51', '2023-07-09 06:10:51'),
(3, 'YANGANA', '11D01C02', '22', 10, '2023-07-09 06:12:57', '2023-07-09 06:12:57'),
(4, 'MALACATOS', '11D01C03', '22', 10, '2023-07-09 06:13:24', '2023-07-09 06:13:24'),
(5, 'TAQUIL', '11D01C04', '22', 10, '2023-07-09 06:14:07', '2023-07-09 06:14:07'),
(6, 'ZAMORA HUAYCO', '11D0C05', '22', 11, '2023-07-12 06:53:42', '2023-07-12 06:53:42'),
(7, 'ESTEBAN GODOY', '11D01C06', '22', 11, '2023-07-12 06:54:34', '2023-07-12 06:54:34'),
(8, 'EL PARAISO', '11D01C06', '22', 11, '2023-07-12 06:55:05', '2023-07-12 06:55:05'),
(9, 'CELI ROMAN', '11D01C08', '22', 11, '2023-07-12 06:55:41', '2023-07-12 06:55:41'),
(10, 'IV CENTENARIO', '11D01C09', '22', 11, '2023-07-12 06:57:41', '2023-07-12 06:57:41'),
(11, 'TEBAIDA', '11D01C10', '22', 11, '2023-07-12 06:58:09', '2023-07-12 06:58:09'),
(12, 'LOS MOLINOS', '11D01C11', '22', 11, '2023-07-12 06:58:33', '2023-07-12 06:58:33'),
(13, 'CHONTAC RUZ', '11D01C12', '22', 11, '2023-07-12 06:59:22', '2023-07-12 06:59:22'),
(14, 'EL TAMBO', '11D02C01', '9', 11, '2023-07-12 06:59:58', '2023-07-12 06:59:58'),
(15, 'CATAMAYO NORTE', '11D02C02', '9', 11, '2023-07-12 07:00:25', '2023-07-12 07:00:25'),
(16, 'CATANAYO SAN JOSE', '11D02C03', '9', 11, '2023-07-12 07:00:58', '2023-07-12 07:00:58'),
(17, 'GUAYQUICHUMA', '11D02C04', '9', 11, '2023-07-12 07:01:32', '2023-07-12 07:01:32'),
(18, 'SAN PADREO DE LA BENDITA', '11D02C05', '9', 11, '2023-07-12 07:02:43', '2023-07-12 07:02:43'),
(19, 'CHAGUAR PAMBA', '11D02C06', '9', 11, '2023-07-12 07:03:11', '2023-07-12 07:03:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE `contratos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_contrato` varchar(255) NOT NULL,
  `detalle_contrato` varchar(255) NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependecias`
--

CREATE TABLE `dependecias` (
  `id` int(10) UNSIGNED NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `parroquia` varchar(255) NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `id_distrito` int(10) UNSIGNED NOT NULL,
  `id_circuito` int(10) UNSIGNED NOT NULL,
  `id_subcircuito` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE `dependencias` (
  `id` int(10) UNSIGNED NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `parroquia` varchar(255) NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `id_distrito` int(10) UNSIGNED NOT NULL,
  `id_circuito` int(10) UNSIGNED NOT NULL,
  `id_subcircuito` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distritos`
--

CREATE TABLE `distritos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_distrito` varchar(255) NOT NULL,
  `codigo_distrito` varchar(255) NOT NULL,
  `numero_distrito` varchar(255) NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `distritos`
--

INSERT INTO `distritos` (`id`, `nombre_distrito`, `codigo_distrito`, `numero_distrito`, `id_usuario`, `created_at`, `updated_at`) VALUES
(2, 'LOJA', '11D01', '9', 10, '2023-07-09 06:08:05', '2023-07-09 06:11:21'),
(3, 'CATAMAYO', '11D02', '9', 10, '2023-07-09 06:08:41', '2023-07-09 06:08:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos_preventivos`
--

CREATE TABLE `mantenimientos_preventivos` (
  `id` int(10) UNSIGNED NOT NULL,
  `detalles_mantenimiento` varchar(255) NOT NULL,
  `id_solicitud_mantenimientos` int(10) UNSIGNED NOT NULL,
  `id_vehiculos` int(10) UNSIGNED NOT NULL,
  `id_repuestos` int(10) UNSIGNED NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(32, '2023_06_11_011451_create_salicitud_mantenimiento_table', 4),
(35, '2014_10_12_000000_create_users_table', 5),
(36, '2014_10_12_100000_create_password_reset_tokens_table', 5),
(37, '2019_08_19_000000_create_failed_jobs_table', 5),
(38, '2019_12_14_000001_create_personal_access_tokens_table', 5),
(39, '2023_06_10_224805_create_usuarios_table', 5),
(40, '2023_06_10_225701_create_distritos_table', 5),
(41, '2023_06_10_231447_create_circuitos_table', 5),
(42, '2023_06_10_232613_create_subcircuitos_table', 5),
(43, '2023_06_10_233532_create_repuestos_table', 5),
(44, '2023_06_10_235044_create_contratos_table', 5),
(45, '2023_06_10_235605_create_dependecias_table', 5),
(46, '2023_06_11_000653_create_personals_table', 5),
(47, '2023_06_11_002759_create_vehiculos_table', 5),
(48, '2023_06_11_004326_create_vehiculos_subcircuitos_table', 5),
(49, '2023_06_11_010210_create_personal_subcircuitos_table', 5),
(50, '2023_06_11_012204_create_solicitud_mantenimientos_table', 5),
(51, '2023_06_11_012355_create_mantenimientos_preventivos_table', 5),
(52, '2023_06_10_235605_create_dependencias_table', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personals`
--

CREATE TABLE `personals` (
  `id` int(10) UNSIGNED NOT NULL,
  `identificacion` varchar(255) NOT NULL,
  `nombre_apellido` varchar(255) NOT NULL,
  `fecha_nacimiento` varchar(255) NOT NULL,
  `ciudad_nacimiento` varchar(255) NOT NULL,
  `numero_telefono` varchar(255) NOT NULL,
  `rango_policial` varchar(255) NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `id_dependecia` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_subcircuitos`
--

CREATE TABLE `personal_subcircuitos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_personals` int(10) UNSIGNED NOT NULL,
  `id_subcircuito` int(10) UNSIGNED NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuestos`
--

CREATE TABLE `repuestos` (
  `id` int(10) UNSIGNED NOT NULL,
  `detalles` varchar(255) NOT NULL,
  `unidad` int(11) NOT NULL,
  `precio` double(8,2) NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_mantenimientos`
--

CREATE TABLE `solicitud_mantenimientos` (
  `id` int(10) UNSIGNED NOT NULL,
  `persona_solicitante` varchar(255) NOT NULL,
  `detalle_solicitud` varchar(255) NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcircuitos`
--

CREATE TABLE `subcircuitos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_subcircuito` varchar(255) NOT NULL,
  `codigo_subcircuito` varchar(255) NOT NULL,
  `numero_subcircuito` varchar(255) NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subcircuitos`
--

INSERT INTO `subcircuitos` (`id`, `nombre_subcircuito`, `codigo_subcircuito`, `numero_subcircuito`, `id_usuario`, `created_at`, `updated_at`) VALUES
(2, 'VILCABAMBA 1', '11D01C01S01', '1', 10, '2023-07-09 06:16:37', '2023-07-09 06:16:37'),
(3, 'YANGANA 1', '11D01C02S01', '1', 11, '2023-07-12 07:04:48', '2023-07-12 07:05:26'),
(4, 'MALACATOS 1', '11D01C03S01', '1', 11, '2023-07-12 07:05:15', '2023-07-12 07:05:15'),
(5, 'TAQUIL 1', '11D01C04S01', '2', 11, '2023-07-12 07:07:32', '2023-07-12 07:07:32'),
(6, 'TAQUIL 2', '11D01C04S02', '2', 11, '2023-07-12 07:08:15', '2023-07-12 07:08:15'),
(7, 'ZAMORA HUAYCO 1', '11D01C05S01', '1', 11, '2023-07-12 07:09:11', '2023-07-12 07:09:11'),
(8, 'ESTEBAN GODOY 1', '11D01C06S01', '2', 11, '2023-07-12 07:09:48', '2023-07-12 07:09:48'),
(9, 'ESTEBAN GODOY 2', '11D01C06S02', '2', 11, '2023-07-12 07:10:02', '2023-07-12 07:10:02'),
(10, 'EL PARAISO 1', '11D01C07S01', '1', 11, '2023-07-12 07:11:09', '2023-07-12 07:11:09'),
(11, 'CELI ROMAN 1', '11D01C08S01', '1', 11, '2023-07-12 07:11:43', '2023-07-12 07:11:43'),
(12, 'IV CENTERARIO 1', '11D01C09S01', '1', 11, '2023-07-12 07:12:04', '2023-07-12 07:12:04'),
(13, 'TEBAIDA 1', '11D01C010S01', '1', 11, '2023-07-12 07:12:29', '2023-07-12 07:12:29'),
(14, 'LOS MOLINOS 1', '11D01C11S01', '1', 11, '2023-07-12 07:13:11', '2023-07-12 07:14:29'),
(15, 'CHONTACRUZ 1', '11D01C12S01', '2', 11, '2023-07-12 07:14:11', '2023-07-12 07:14:11'),
(16, 'EL TAMBO 1', '11D02C01S01', '1', 11, '2023-07-12 07:15:26', '2023-07-12 07:15:26'),
(17, 'CATAMAYO NORTE 1', '11D02C02S01', '2', 11, '2023-07-12 07:16:13', '2023-07-12 07:17:34'),
(18, 'CATAMAYO NORTE 2', '11D02C02S02', '2', 11, '2023-07-12 07:17:17', '2023-07-12 07:17:17'),
(19, 'CATAMAYO SAN JOSE 1', '11D02C03S02', '1', 11, '2023-07-12 07:18:27', '2023-07-12 07:18:27'),
(20, 'GUAYQUICHUMA 1', '11D02C04S02', '1', 11, '2023-07-12 07:18:54', '2023-07-12 07:18:54'),
(21, 'SAN PEDRO DE LA BENDITA 1', '11D02C05S01', '1', 11, '2023-07-12 07:19:42', '2023-07-12 07:19:42'),
(22, 'CHAGUARPAMBA 1', '11D02C06S02', '1', 11, '2023-07-12 07:20:11', '2023-07-12 07:20:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_apellido` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_apellido`, `correo`, `clave`, `usuario`, `rol`, `created_at`, `updated_at`) VALUES
(10, 'Polk vernaza', 'polk12@gmail.com', '$2y$10$jDWVkSF.u25/1vp/sFUOT.LOPU/Z0VKVPS8wXbEb1oiExERuaMP/m', 'polk3', '1', '2023-07-09 04:12:17', '2023-07-12 06:40:28'),
(11, 'Raul MIna', 'raul.mina@gmail.com', '$2y$10$PbnmZV6HNH/.Z1tQvmN4/.fRLSjHEJfDFK9ICcfnoWiKXPxW4q4CW', 'Raul', '2', '2023-07-09 04:48:07', '2023-07-09 04:48:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_vehiculo` varchar(255) NOT NULL,
  `placa` varchar(255) NOT NULL,
  `chasis` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `motor` varchar(255) NOT NULL,
  `kilometraje` varchar(255) NOT NULL,
  `cilindraje` varchar(255) NOT NULL,
  `capacidad_carga` varchar(255) NOT NULL,
  `capacidad_pasajeros` varchar(255) NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `tipo_vehiculo`, `placa`, `chasis`, `marca`, `modelo`, `motor`, `kilometraje`, `cilindraje`, `capacidad_carga`, `capacidad_pasajeros`, `id_usuario`, `created_at`, `updated_at`) VALUES
(1, 'Camionesta', 'SP2567', 'hrt3456', 'Masda', 'BT-50', 'A GASOLINA 2.2', '20000', '45', '40KG', '5', 11, '2023-07-12 08:58:36', '2023-07-12 08:58:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos_subcircuitos`
--

CREATE TABLE `vehiculos_subcircuitos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_vehiculo` int(10) UNSIGNED NOT NULL,
  `id_subcircuito` int(10) UNSIGNED NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `circuitos`
--
ALTER TABLE `circuitos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `circuitos_id_usuario_foreign` (`id_usuario`);

--
-- Indices de la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contratos_id_usuario_foreign` (`id_usuario`);

--
-- Indices de la tabla `dependecias`
--
ALTER TABLE `dependecias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dependecias_id_usuario_foreign` (`id_usuario`),
  ADD KEY `dependecias_id_distrito_foreign` (`id_distrito`),
  ADD KEY `dependecias_id_circuito_foreign` (`id_circuito`),
  ADD KEY `dependecias_id_subcircuito_foreign` (`id_subcircuito`);

--
-- Indices de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dependencias_id_usuario_foreign` (`id_usuario`),
  ADD KEY `dependencias_id_distrito_foreign` (`id_distrito`),
  ADD KEY `dependencias_id_circuito_foreign` (`id_circuito`),
  ADD KEY `dependencias_id_subcircuito_foreign` (`id_subcircuito`);

--
-- Indices de la tabla `distritos`
--
ALTER TABLE `distritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `distritos_id_usuario_foreign` (`id_usuario`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `mantenimientos_preventivos`
--
ALTER TABLE `mantenimientos_preventivos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mantenimientos_preventivos_id_solicitud_mantenimientos_foreign` (`id_solicitud_mantenimientos`),
  ADD KEY `mantenimientos_preventivos_id_vehiculos_foreign` (`id_vehiculos`),
  ADD KEY `mantenimientos_preventivos_id_repuestos_foreign` (`id_repuestos`),
  ADD KEY `mantenimientos_preventivos_id_usuario_foreign` (`id_usuario`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personals`
--
ALTER TABLE `personals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personals_id_usuario_foreign` (`id_usuario`),
  ADD KEY `personals_id_dependecia_foreign` (`id_dependecia`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `personal_subcircuitos`
--
ALTER TABLE `personal_subcircuitos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_subcircuitos_id_personals_foreign` (`id_personals`),
  ADD KEY `personal_subcircuitos_id_subcircuito_foreign` (`id_subcircuito`),
  ADD KEY `personal_subcircuitos_id_usuario_foreign` (`id_usuario`);

--
-- Indices de la tabla `repuestos`
--
ALTER TABLE `repuestos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `repuestos_id_usuario_foreign` (`id_usuario`);

--
-- Indices de la tabla `solicitud_mantenimientos`
--
ALTER TABLE `solicitud_mantenimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solicitud_mantenimientos_id_usuario_foreign` (`id_usuario`);

--
-- Indices de la tabla `subcircuitos`
--
ALTER TABLE `subcircuitos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcircuitos_id_usuario_foreign` (`id_usuario`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_correo_unique` (`correo`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehiculos_id_usuario_foreign` (`id_usuario`);

--
-- Indices de la tabla `vehiculos_subcircuitos`
--
ALTER TABLE `vehiculos_subcircuitos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehiculos_subcircuitos_id_vehiculo_foreign` (`id_vehiculo`),
  ADD KEY `vehiculos_subcircuitos_id_subcircuito_foreign` (`id_subcircuito`),
  ADD KEY `vehiculos_subcircuitos_id_usuario_foreign` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `circuitos`
--
ALTER TABLE `circuitos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dependecias`
--
ALTER TABLE `dependecias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `distritos`
--
ALTER TABLE `distritos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mantenimientos_preventivos`
--
ALTER TABLE `mantenimientos_preventivos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `personals`
--
ALTER TABLE `personals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_subcircuitos`
--
ALTER TABLE `personal_subcircuitos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `repuestos`
--
ALTER TABLE `repuestos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitud_mantenimientos`
--
ALTER TABLE `solicitud_mantenimientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subcircuitos`
--
ALTER TABLE `subcircuitos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vehiculos_subcircuitos`
--
ALTER TABLE `vehiculos_subcircuitos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `circuitos`
--
ALTER TABLE `circuitos`
  ADD CONSTRAINT `circuitos_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD CONSTRAINT `contratos_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `dependecias`
--
ALTER TABLE `dependecias`
  ADD CONSTRAINT `dependecias_id_circuito_foreign` FOREIGN KEY (`id_circuito`) REFERENCES `circuitos` (`id`),
  ADD CONSTRAINT `dependecias_id_distrito_foreign` FOREIGN KEY (`id_distrito`) REFERENCES `distritos` (`id`),
  ADD CONSTRAINT `dependecias_id_subcircuito_foreign` FOREIGN KEY (`id_subcircuito`) REFERENCES `subcircuitos` (`id`),
  ADD CONSTRAINT `dependecias_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD CONSTRAINT `dependencias_id_circuito_foreign` FOREIGN KEY (`id_circuito`) REFERENCES `circuitos` (`id`),
  ADD CONSTRAINT `dependencias_id_distrito_foreign` FOREIGN KEY (`id_distrito`) REFERENCES `distritos` (`id`),
  ADD CONSTRAINT `dependencias_id_subcircuito_foreign` FOREIGN KEY (`id_subcircuito`) REFERENCES `subcircuitos` (`id`),
  ADD CONSTRAINT `dependencias_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `distritos`
--
ALTER TABLE `distritos`
  ADD CONSTRAINT `distritos_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `mantenimientos_preventivos`
--
ALTER TABLE `mantenimientos_preventivos`
  ADD CONSTRAINT `mantenimientos_preventivos_id_repuestos_foreign` FOREIGN KEY (`id_repuestos`) REFERENCES `repuestos` (`id`),
  ADD CONSTRAINT `mantenimientos_preventivos_id_solicitud_mantenimientos_foreign` FOREIGN KEY (`id_solicitud_mantenimientos`) REFERENCES `solicitud_mantenimientos` (`id`),
  ADD CONSTRAINT `mantenimientos_preventivos_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `mantenimientos_preventivos_id_vehiculos_foreign` FOREIGN KEY (`id_vehiculos`) REFERENCES `vehiculos` (`id`);

--
-- Filtros para la tabla `personals`
--
ALTER TABLE `personals`
  ADD CONSTRAINT `personals_id_dependecia_foreign` FOREIGN KEY (`id_dependecia`) REFERENCES `dependecias` (`id`),
  ADD CONSTRAINT `personals_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `personal_subcircuitos`
--
ALTER TABLE `personal_subcircuitos`
  ADD CONSTRAINT `personal_subcircuitos_id_personals_foreign` FOREIGN KEY (`id_personals`) REFERENCES `personals` (`id`),
  ADD CONSTRAINT `personal_subcircuitos_id_subcircuito_foreign` FOREIGN KEY (`id_subcircuito`) REFERENCES `subcircuitos` (`id`),
  ADD CONSTRAINT `personal_subcircuitos_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `repuestos`
--
ALTER TABLE `repuestos`
  ADD CONSTRAINT `repuestos_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `solicitud_mantenimientos`
--
ALTER TABLE `solicitud_mantenimientos`
  ADD CONSTRAINT `solicitud_mantenimientos_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `subcircuitos`
--
ALTER TABLE `subcircuitos`
  ADD CONSTRAINT `subcircuitos_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `vehiculos_subcircuitos`
--
ALTER TABLE `vehiculos_subcircuitos`
  ADD CONSTRAINT `vehiculos_subcircuitos_id_subcircuito_foreign` FOREIGN KEY (`id_subcircuito`) REFERENCES `subcircuitos` (`id`),
  ADD CONSTRAINT `vehiculos_subcircuitos_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `vehiculos_subcircuitos_id_vehiculo_foreign` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
